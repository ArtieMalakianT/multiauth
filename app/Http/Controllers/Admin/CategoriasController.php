<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorias;

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
    //Mostrar formulário de cadastro de Categorias
    public function showForm()
    {
        return view('admin.categorias.categorias-form');
    }
    //Tratar dados submetidos do formulario
    public function formSubmit(Request $request)
    {
        $nome = $request->nome;
        $ordem = $request->ordem;

        $cat = new Categorias();
        $cat->nome = $nome;
        $cat->ordem = $ordem;
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
