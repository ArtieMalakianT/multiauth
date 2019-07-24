<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Categorias;
use App\Models\subCategorias;

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
        $cat = subCategorias::all();
        return view('blog.index',compact('paginatePosts','categorias','cat'));
    }
    //Mostrar página inicial do blog ordenando os posts por categoria
    public function filter(Request $request)
    { 
        $categorias = $this->categorias;
        $catFilter = $request->idCat;       
        $paginatePosts = Categorias::find($catFilter)->posts()->orderBy('created_at','desc')->paginate(10);  
        //$subCats = subCategorias::where('id_categoria',$catFilter); 
        $cat = Categorias::find($catFilter)->sub;     
        return view('blog.index',compact('paginatePosts','categorias','cat'));
    }
    //Mostrar página com conteúdos pesquisados
    public function search(Request $request)
    {
        if(!isset($request->id))
        {
            $search = $request->consulta; 
            $paginatePosts = Post::where('titulo','like',"%$search%")->orderBy('created_at','desc')->paginate(10);                      
        }
        else
        {
            $subId = $request->id;   
            $sub = subCategorias::find($subId);
            $paginatePosts = $sub->posts()->orderBy('created_at','desc')->paginate(10);  
            //$search = $sub->nome;   
            //$paginatePosts = Post::where('','like',"%$search%")->orderBy('created_at','desc')->paginate(10);   
        }
        
        
        $categorias = $this->categorias;        
        return view('blog.index',compact('paginatePosts','categorias','cat'));
    }

    //Mostrar o conteúdo de um post
    public function showPost(Request $request)
    {
        $idPost = $request->idPost;
        $post = POST::find($idPost);
        $categorias = $this->categorias;
        $cat = Categorias::find($post->id_categoria)->sub; 

        return view('blog.single-blog',compact('post','categorias','cat'));
    }

    //Registrar um comentário
}
