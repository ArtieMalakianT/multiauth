<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Pacotes;
use App\Models\pacotesCurso;
use App\Models\Matriculas;
use App\Models\StatusMatricula;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

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

    public function formEditMatricula($idMatricula)
    {
        $matricula = Matriculas::find($idMatricula);
        $pacotes = Pacotes::all();
        $statusMatricula = StatusMatricula::all();
        return view('admin.alunos.edit-matricula',compact('matricula','pacotes','statusMatricula'));
    }

    public function updateMatricula(Request $request)
    {
        $idMatricula = $request->id_matricula;
        $pacote = $request->id_pacote;
        $status = $request->id_status;

        $matricula = Matriculas::find($idMatricula);

        $matricula->id_pacote = $pacote;
        $matricula->id_status = $status;

        if($matricula->save())
        {
            return back()->with('status','Matrícula alterada com sucesso!');
        }
        else
        {
            return back()->with('error','Erro na alteração!');
        }

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
    public function formHistorico(Request $request)
    {
        $idMatricula = $request->idMatricula;
        $matricula = Matriculas::find($idMatricula);
        return view('admin.alunos.form-historico',compact('matricula'));
    }
    public function salvarHistorico(Request $request)
    {        
        $idMatricula = $request->id_matricula;
        $matricula = Matriculas::find($idMatricula);

        if($matricula->historico)
        {
            Storage::delete($matricula->historico);
            $fileHistorico = $request->file('historico')->store('historicos');
        }
        else
        {
            $fileHistorico = $request->file('historico')->store('historicos');            
        }
        if($fileHistorico)
        {            
            $matricula->historico = $fileHistorico;
            if($matricula->save())
            {
                return back()->with('status','Histórico salvo!');
            }
            else
            {
                Storage::delete($fileHistorico);
            }
        }       
        else
        {
            return back()->with('error','Erro no upload do arquivo!');
            Storage::delete($fileHistorico);
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

    public function deleteMatricula($id)
    {
        $matricula = Matriculas::where('id',$id)->delete();
        if(!$matricula)
        {
            return back()->with('error','Não foi possível deletar');
        }
        else
        {
            return back()->with('status','Matrícula deletada!');
        }
    }
}
