<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Categorias;

class BlogController extends Controller
{
    public $categorias;


    public function __construct()
    {
        return $this->categorias  = Categorias::all();
    }
    //Mostrar página inicial do blog com os posts recentes
    public function index()
    { 
        $categorias = $this->categorias;       
        $paginatePosts = Post::where('id','>',0)->orderBy('created_at','desc')->paginate(10);
        return view('blog.index',compact('paginatePosts','categorias'));
    }
    //Mostrar página inicial do blog ordenando os posts por categoria
    public function filter(Request $request)
    { 
        $categorias = $this->categorias;
        $catFilter = $request->idCat;       
        $paginatePosts = Post::where('id_categoria',$catFilter)->orderBy('created_at','desc')->paginate(10);        
        return view('blog.index',compact('paginatePosts','categorias'));
    }
    //Mostrar página com conteúdos pesquisados
    public function search(Request $request)
    {
        $search = $request->consulta;   
        //var_dump($search);exit;
        $paginatePosts = Post::where('titulo','like',"%$search%")->orderBy('created_at','desc')->paginate(10);

        $categorias = $this->categorias;
        return view('blog.index',compact('paginatePosts','categorias'));
    }

    //Mostrar o conteúdo de um post
    public function showPost(Request $request)
    {
        $idPost = $request->idPost;
        $post = POST::find($idPost);
        $categorias = $this->categorias;

        return view('blog.single-blog',compact('post','categorias'));
    }

    //Registrar um comentário
}
