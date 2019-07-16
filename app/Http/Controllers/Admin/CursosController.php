<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cursos;
use App\Models\Categorias;

class CursosController extends Controller
{
    //Método construtor impede que usuários comuns acessem a administração
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //Mostrar form para cadastro de cursos
    public function showForm()
    {
        $categorias = Categorias::all();
        return view('admin.curso.curso-form',['categorias' => $categorias]);
    }
    //Mostrar todos os cursos
    public function showAll()
    {
        $cursos = Cursos::paginate(4);
        return view('admin.curso.show-all',['cursos' => $cursos]);
    }
    //Mostrar form para atualizar registro
    public function formUpdate(Request $request)
    {
        $id = $request->id;
        $curso = Cursos::find($id);
        $categoria = $curso->id_categoria;
        return view('admin.curso.update-form',['curso' => $curso,'categoria' => $categoria]);
    }
    //Atualizar Curso
    public function Update(Request $request)
    {
        $id = $request->id;
        $nome = $request->nome;
        $duracao = $request->duracao;       
        $categoria = $request->categoria; 

        $curso = Cursos::find($id);
        $curso->nome = $nome;
        $curso->duracao = $duracao;
        $curso->id_categoria = $categoria;
        $curso->save();

        if($curso)
        {
            return back()->with('status','Curso Atualizado!');
        }
        else
        {
            return back()->with('error','Falha ao atualizar curso!');
        }
    }
    //Submeter Formulario
    public function formSubmit(Request $request)
    {
        $nome = $request->nome;
        $duracao = $request->duracao;       
        $categoria = $request->categoria; 
        
        $curso = new Cursos();
        $curso->nome = $nome;
        $curso->duracao = $duracao;
        $curso->id_categoria = $categoria;
        $curso->save();

        if($curso)
        {
            return back()->with('status','Curso Cadastrado!');
        }
        else
        {
            return back()->with('error','Falha ao cadastrar curso!');
        }
        
    }
}
