<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cursos;

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
        return view('admin.curso-form');
    }
    //Submeter Formulario
    public function formSubmit(Request $request)
    {
        $nome = $request->nome;
        $duracao = $request->duracao;        

        $curso = new Cursos();
        $curso->nome = $nome;
        $curso->duracao = $duracao;
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
