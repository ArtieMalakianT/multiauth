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

use Mail;

class WelcomeController extends Controller
{
    public function index()
    {
        $recentPosts = Post::where('status',1)->orderBy('created_at','desc')->limit(3)->get();
        $categorias = Categorias::where('id','>',0)->orderBy('ordem')->get();
        $avaliacoes = Avaliacoes::where('status','1')->orderBy('created_at','desc')->limit(4)->get();
        return view('welcome',compact('recentPosts','categorias','avaliacoes'));
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
            return back()->with('success','Sua mensagem foi enviada com sucesso! Entraremos em contato assim que possível :)');
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
}
