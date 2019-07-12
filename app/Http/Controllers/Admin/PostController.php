<?php

namespace App\Http\Controllers\Admin;

use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorias;
use App\Models\Post;

class PostController extends Controller
{
    //Método construtor impede que usuários comuns acessem a administração
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //Mostrar formulário de cadastro de Posts
    public function showForm()
    {
        $categorias = Categorias::all();

        return view('admin.post-form',['categorias' => $categorias]);
    }

    //Persiste as informações do formulário do modelo Post
    public function submitForm(Request $request)
    {
        //Recupera os dados submetidos do formulário
        $contents = $request->conteudo;
        $titulo = $request->titulo;
        $categoria = $request->categoria;
        $user = $request->user;

        //cria um nome randômico para o conteúdo do post
        $rand = rand(9000,1000000000);
        $fileName = $rand.".txt";        

        //Salva os dados no banco de dados
        $post = new Post();
        $post->TITULO = $titulo;
        $post->CONTEUDO = $fileName;
        $post->ID_CATEGORIA = $categoria;
        $post->id_user = $user;
        $post->save();

        //Se os dados forem salvos...
        if($post)
        {
            //Faz o upload do arquivo $conteudo
            $store = Storage::disk('public')->put("/post/$fileName", $contents);

            //Se o upload foi feito
            if($store)
            {
                //Retorna para o formulário com o aviso de sucesso
                return back()->with('status', 'Post Publicado!');
            }
            //Caso contrário
            else
            {
                //Retorna para o formulário com o aviso de erro
                return back()->with('error', 'Algo deu Errado!');
            }
        }
        //Se os dados não forem persistidos...
        else
        {
            //Retorna para o formulário com o aviso de erro
            return back()->with('error', 'Dados não salvos!');
        }

        
    }
    //Listar POSTS na área de Admin
    public function showPosts()
    {
        $posts = Post::all();

        return view('/admin/post-list',['posts' => $posts]);
    }
}
