<?php
namespace App\Http\Controllers\Admin;
header('Content-Type: text/html; charset=utf-8');


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use App\Models\Categorias;
use App\Models\Post;
use Image;

class PostController extends Controller
{
    //Método construtor impede que usuários comuns acessem a administração
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //Mostrar formulário de cadastro de Posts
    public function showForm(Request $request)
    {
        $categorias = Categorias::all();
        if(!isset($request->idPost))
        {
          return view('admin.posts.post-form',['categorias' => $categorias]);
        }
        else
        {
          $id = $request->idPost;
          $post = Post::find($id);
          return view('admin.posts.update',['categorias' => $categorias,'post'=>$post]);
        }        
    }
    //função para retornar subcategorias ao ajax
    public function getSubCat($idCat)
    {
        $idCat = $idCat;
        $categoria = Categorias::find($idCat);
        $sub = $categoria->sub()->getQuery()->get(['id', 'nome']);            
        return Response::json($sub);
        
    }
    //Persiste as informações do formulário do modelo Post
    public function submitForm(Request $request)
    {
        $contents = $request->conteudo;
        $titulo = $request->titulo;
        $categoria = $request->categoria;
        $user = $request->user;  
        $descricao = $request->descricao; 
        $subCat = $request->sub;
        $status = $request->status;         
        
        $date = uniqid(date('HisYmd'));
        $fileName = "$date.txt";     

        if(!isset($request->updatingPost))
        {            
            $capa = $request->file('image')->store('images');
            $arquivoCapa = Storage::get($capa);
            $thumb = Image::make($arquivoCapa);                        
            $thumb->resize(2000,null,function ($constraint) {
                $constraint->aspectRatio();});
            $thumb->crop(2000,2000);          
            $thumb->save(public_path().'/storage/'.$capa);            
            /*$this->dialog($capa,'Erro no Upload da Capa');*/
            $store = Storage::disk('public')->put("/post/$fileName", $contents);
            $this->dialog($store,'Erro no Upload do conteúdo');

            $post = new Post();
            $post->capa = $capa;
            $post->conteudo = $fileName;
        }
        else
        {
            $post = Post::find($request->updatingPost);

            if($request->file('image') == 0)
            {
              
            }
            else
            {                
                Storage::delete($post->capa);
                $capa = $request->file('image')->store('images'); 
                $arquivoCapa = Storage::get($capa);
                $thumb = Image::make($arquivoCapa);                        
                $thumb->resize(null,2000,function ($constraint) {
                    $constraint->aspectRatio();}); 
                $thumb->crop(2000,2000);         
                $thumb->save(public_path().'/storage/'.$capa);                               

                $post->capa = $capa;                
            }              
            $store = Storage::disk('public')->put("/post/$post->conteudo", $contents);
            $this->dialog($store,'Erro no Upload da Capa');           
        }
        
        $post->titulo = $titulo;        
        $post->id_categoria = $categoria;
        $post->id_sub_categoria = $subCat;
        $post->id_user = $user;      
        $post->descricao = $descricao;  
        $post->status = $status;
        $post->save();       

        if($post)
        {              
            return back()->with('status', 'Post salvo!');                      
        }
        else
        {
            return back()->with('error', 'Dados não salvos!');
        }

        
    }

    //Listar POSTS na área de Admin
    public function showPosts()
    {
        $categorias =  Categorias::all();     

        return view('/admin/posts.post-list',compact('categorias'));
    }

    public function Delete(Request $request)
    {
        $idPost = $request->id_post;
        $post = Post::find($idPost);
        if($post->delete())
        {
            return back()->with('status', 'Post deletado!'); 
        }
        else
        {
            return back()->with('error', 'Não foi possível deletar o Post!'); 
        }
    }

    public function dialog($cond,$error)
    {
        if($cond)
        {
            
        }
        else
        {
            return back()->with('error',$error);
        }
    }    
}
