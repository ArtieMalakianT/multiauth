<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AlunoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showAlunos()
    {
        //retornar lista dos alunos cadastrados no banco de dados
        $alunos = User::paginate(2);

        //mostrar view
        return view('admin.alunos',['alunos' => $alunos]);
    }

    public function formMatricula($idAluno)
    {
        
        $pacote = App\Models\Pacotes::all();
        $statusMatricula = App\Models\StatusMatricula::all();


        return view('admin/aluno-matricular',['statusMatricula' => $statusMatricula]);
    }

    public function matricular()
    {
         
    }
}
