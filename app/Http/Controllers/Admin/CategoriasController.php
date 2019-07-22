<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorias;
use App\Models\subCategorias;

class CategoriasController extends Controller
{
    //Método construtor impede que usuários comuns acessem a administração
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //Mostrar todas as categorias no admin
    public function showAll()
    {
        $categorias = Categorias::all();
        return view('admin/categorias/show-all',['categorias' => $categorias]);
    }
    //Mostrar formulário de cadastro de Categorias ou Subcategorias
    public function showForm(Request $request)
    {
        if(!isset($request->catId))
        {
            return view('admin.categorias.categorias-form');
        }
        else
        {
            $catId = $request->catId;
            $cat = Categorias::find($catId);
            return view('admin.categorias.sub-cat-form',['cat'=>$cat]);
        }
        
    }
    //Tratar dados submetidos do formulario
    public function formSubmit(Request $request)
    {
        $nome = $request->nome;

        if(!isset($request->catId))
        {
            $ordem = $request->ordem;
            $cat = new Categorias();
            $cat->ordem = $ordem;
        }
        else
        {
            $cat = new subCategorias();
            $cat->id_categoria = $request->catId;
        }
                
        $cat->nome = $nome;
        
        $cat->save();
        if($cat)
        {
            return back()->with('status','Categoria cadastrada com sucesso!');
        }
        else
        {
            return back()->with('error','Erro ao cadastrar categoria');
        }
    }
}
