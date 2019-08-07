<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Pacotes;
use App\Models\pacotesCurso;
use App\Models\Matriculas;
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
        return view('admin.alunos.alunos',['alunos' => $alunos]);
    }

    public function formMatricula($idAluno)
    {
        $aluno = User::find($idAluno);        
        $pacotes = Pacotes::all();
        $statusMatricula = StatusMatricula::all();


        return view('admin/alunos.alunos-matricular',['statusMatricula' => $statusMatricula,'pacotes' => $pacotes, 'aluno' => $aluno]);
    }

    public function matricular(Request $request)
    {
         $validationData = $request->validate([
            'id_pacote' => 'integer|required',
            'id_user' => 'required',
            'id_status' => 'integer|required',            
         ]);
         $matricula = $this->salvar($validationData);
         if($matricula)
         {
             return back()->with('status','Matrícula feita!');
         }
         else
         {
            return back()->with('error','Algo deu errado!');
         }
    }
    public function salvar(array $request)
    {
        return Matriculas::create([
            'id_pacote' => $request['id_pacote'],
            'id_user' => $request['id_user'],
            'id_status' => $request['id_status'],
        ]);
    }
    public function showMatriculas($id)
    {
        $aluno = User::find($id);
        return view('admin.alunos.matriculas',compact('aluno'));
    }
}
