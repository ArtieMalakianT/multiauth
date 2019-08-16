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

use Mail;

class WelcomeController extends Controller
{
    public function index()
    {
        $recentPosts = Post::where('status',1)->orderBy('created_at','desc')->limit(3)->get();
        $categorias = Categorias::where('id','>',0)->orderBy('ordem')->get();
        return view('welcome',compact('recentPosts','categorias'));
    }
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
        return back()->with('input');
    }
    public function interesseMail(Request $request)
    {
        $user = new User();

        $user;
    }
    public function showCurso(Request $request)
    {
        $id = $request->idPacote;
        $pacote = Pacotes::find($id);

        $subId = $pacote->id_sub_categoria;   
        $sub = subCategorias::find($subId);
        $paginatePosts = $sub->posts()->where('status','=',1)->orderBy('created_at','desc')->paginate(4);  
        
        return view('curso',compact('pacote','paginatePosts'));
    }
}
