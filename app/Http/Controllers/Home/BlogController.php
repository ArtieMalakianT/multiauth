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
        $paginatePosts = Post::where('status','=',1)->orderBy('created_at','desc')->paginate(10);
        $cat = subCategorias::all();
        $bannerPosts = Post::where('status','=',1)->orderBy('created_at','desc')->limit(3)->get();
        $popularPosts = Post::where('status','=',1)->orderBy('acessos','desc')->limit(5)->get();
        return view('blog.index',compact('paginatePosts','categorias','cat','bannerPosts','popularPosts'));
    }
    //Mostrar página inicial do blog ordenando os posts por categoria
    public function filter(Request $request)
    { 
        $categorias = $this->categorias;
        $catFilter = $request->idCat;       
        $paginatePosts = Categorias::find($catFilter)->posts()->orderBy('created_at','desc')->paginate(10);  
        //$subCats = subCategorias::where('id_categoria',$catFilter); 
        $cat = Categorias::find($catFilter)->sub;
        $bannerPosts = Post::where('status','=',1)->limit(3)->get();   
        $popularPosts = Post::where('status','=',1)->orderBy('acessos','desc')->limit(5)->get();  
        return view('blog.index',compact('paginatePosts','categorias','cat','bannerPosts','popularPosts'));
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
            $paginatePosts = $sub->posts()->where('status','=',1)->orderBy('created_at','desc')->paginate(10);  
            //$search = $sub->nome;   
            //$paginatePosts = Post::where('','like',"%$search%")->orderBy('created_at','desc')->paginate(10);   
        }
        
        
        $categorias = $this->categorias;   
        //$bannerPosts = Post::where('id','>',0)->limit(3)->get();     
        $popularPosts = Post::where('status','=',1)->orderBy('acessos','desc')->limit(5)->get();
        return view('blog.index',compact('paginatePosts','categorias','cat','popularPosts'));
    }

    //Mostrar o conteúdo de um post
    public function showPost(Request $request)
    {
        $idPost = $request->idPost;
        $post = POST::find($idPost);
        $acessos = $post->acessos;
        $acessos = $acessos + 1;
        $post->acessos = $acessos;
        $post->save();
        $categorias = $this->categorias;
        $cat = Categorias::find($post->id_categoria)->sub; 

        $popularPosts = Post::where('status','=',1)->orderBy('acessos','desc')->limit(5)->get();

        if($post->status == 0)
        {
            return view('blog.error-blog',compact('categorias','cat','popularPosts'));
        }
        else
        {
            return view('blog.single-blog',compact('post','categorias','cat','popularPosts'));
        }
        
    }

    //Registrar um comentário
}
