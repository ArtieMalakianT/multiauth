<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Categorias;
use App\Mail\SendMailContact;
use App\Models\Pacotes;
use App\Models\Cusos;
use App\Models\pacotesCurso;
use App\Models\subCategorias;
use App\User;
use App\Models\Avaliacoes;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;
use Image;

use Mail;

class WelcomeController extends Controller
{
    public function index()
    {
        $recentPosts = Post::where('status',1)->orderBy('created_at','desc')->limit(3)->get();
        $categorias = Categorias::where('id','>',0)->orderBy('ordem')->get();
        $avaliacoes = Avaliacoes::where('status','1')->orderBy('created_at','desc')->limit(4)->get();
        $banners = Banner::where('id','>','0')->orderBy('ordem')->get();
        return view('welcome',compact('recentPosts','categorias','avaliacoes','banners'));
    }
    //Envio de email Formulário de contato da página principal
    public function contatoMail(Request $request)
    {
        $user = new User();

        $user->name = $request->nome;
        $user->email = $request->email;
        $user->tel = $request->telefone;
        $message = $request->msg;

        Mail::send('mail.contact', ['msg' => $message,'email' => $user->email, 'name' => $user->name,'tel' => $user->tel], function ($m) use ($user){
            $m->from ('info@likeschool.com.br','Info LikeSchool');

            $m->to('contato@likeschool.com.br', 'Contato LikeSchool')->subject('Mensagem do site');
        });
        return back()->with('success','Sua mensagem foi enviada com sucesso!');
    }
    //Envio de email do formulário de interesse de curso
    public function interesseMail(Request $request)
    {
        $user = new User();

        $user->email = $request->email;
        $user->name = $request->nome;
        $user->telefone = $request->telefone;
        $user->pacote = $request->pacote;
        $user->dataNascimento = $request->nascimento;        

        Mail::send('mail.contact', ['pacote' => $user->pacote,'email' => $user->email, 'name' => $user->name,'tel' => $user->telefone], function ($m) use ($user){
            $m->from ('info@likeschool.com.br','Info LikeSchool');

            $m->to('contato@likeschool.com.br', 'Contato LikeSchool')->subject('Mensagem do site | Interesse');
        });
        return back()->with('success','Sua mensagem foi enviada com sucesso! Entraremos em contato assim que possível :)');
    }
    //Mostra a página do curso
    public function showCurso(Request $request)
    {
        $id = $request->idPacote;
        $pacote = Pacotes::find($id);

        $subId = $pacote->id_sub_categoria;   
        $sub = subCategorias::find($subId);
        $paginatePosts = $sub->posts()->where('status','=',1)->orderBy('created_at','desc')->paginate(4);  
        
        return view('curso',compact('pacote','paginatePosts'));
    }

    //Registrar comentários e avaliações
    public function receiveComment(Request $request)
    {
        $validateData = $request->validate([
            'id_user' => 'required',
            'comment' => 'required|max:900',
        ]);

        $comment = $this->saveComment($validateData);
        if($comment)
        {
            return back()->with('success','Seu comentário foi salvo em nosso sistema, em breve ele estará visível no site!');
        }
        else
        {
            return back()->with('success','Erro :(');
        }

    }
    public function saveComment(array $data)
    {
        return Avaliacoes::create([
            'id_user' => $data['id_user'],
            'comment' => $data['comment'],
        ]);
    }
    public function showGalerias()
    {
        $directories = Storage::directories('/galerias');        
        return view('galerias',compact('directories'));
    }
    public function showFotos(Request $request)
    {
        $galeria = $request->galeria;
        $fotos = Storage::files("/galerias/$galeria");
        return view ('fotos',compact('fotos'));
    }
    public function ambiente(Request $request)
    {     
        $galeria = $request->galeria;
        if($galeria == "AmbienteGaspar")
        {
            $cidade = "Gaspar";
            $endereco = "R. João Silvino da Cunha, 140 Sete de Setembro ";
            $telefone = " (47) 3332-4750";
            $whatsapp = " (47) 8862-4532";
            $mapsUrl= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.190393316261!2d-48.94825768448777!3d-26.92917798312048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94df24b0b0d24b2b%3A0x15a995e281e83e18!2sLike+School+Gaspar!5e0!3m2!1spt-BR!2sbr!4v1547583443635";
            $banner = url('/img/banner/FachadaGaspar.png');
        }
        else
        {
            if($galeria == "AmbienteIlhota")
            {
                $cidade = "Ilhota";
                $endereco = "R. Leoberto Leal, 265 Centro";
                $telefone = " (47) 3343-7883";
                $whatsapp = " (47) 9273-6403";
                $mapsUrl = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113845.54212668908!2d-48.965065354932115!3d-26.91386507096155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94df3025fdf86205%3A0x402cbeb46c64f3d1!2sLike+School+Ilhota!5e0!3m2!1sen!2sbr!4v1557149209281!5m2!1sen!2sbr";
                $banner = url('/img/banner/FachadaIlhota.png');
            }
        }
        $fotos = Storage::files("/galerias/$galeria");
        return view ('ambiente.index',compact('fotos','endereco','telefone','cidade','whatsapp','mapsUrl','banner'));
    }
}
