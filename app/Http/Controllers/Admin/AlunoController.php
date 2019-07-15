<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Pacotes;
use App\Models\StatusMatricula;

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
        $aluno = User::find($idAluno);
        $pacotes = Pacotes::all();
        $statusMatricula = StatusMatricula::all();


        return view('admin/alunos-matricular',['statusMatricula' => $statusMatricula,'pacotes' => $pacotes, 'aluno' => $aluno]);
    }

    public function matricular()
    {
         
    }
}
