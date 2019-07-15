<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorias;
use App\Models\Cursos;
use App\Models\Pacotes;
use App\Models\pacotesCurso;
use App\DB;

class PacotesController extends Controller
{
    //Método construtor impede que usuários comuns acessem a administração
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //Mostrar formulário de cadastro de Pacotes
    public function showForm()
    {
        $categorias = Categorias::all();
        $cursos = Cursos::all();

        return view('admin.pacote-form',['categorias' => $categorias,'cursos' => $cursos]);
    }

    //Submeter formulario para registrar o pacote
    public function formSubmit(Request $request)
    {        
        //Recebe os dados submtidos
        $cat = $request->categoria;
        $nome = $request->nome;
        $desc = $request->desc;
        $status = $request->status;
        $ordem = $request->ordem;
        $duracao = $request->duracao;
        $cursos = $request->cursos;

        //Cria um objeto $pacote e define suas propriedades
        $pacote = new Pacotes();
        $pacote->id_categoria = $cat;
        $pacote->nome = $nome;
        $pacote->descricao = $desc;
        $pacote->duracao = $duracao;
        $pacote->status = $status;
        $pacote->ordem = $ordem;
        
        if($pacote->save())
        {
            $idPacote = DB::getPdo()->lastInsertId();

            foreach($cursos as $curso)
            {
                $obj = new pacotesCurso();
                $obj->id_curso = $curso;
                $obj->id_pacote = $idPacote;
                return $obj->save();                
            }
        }
        if($obj->save())
        {
            return back()->with('status','Dados Cadastrados!');
        }
        else
        {
            return back()->with('error','Erro ao gravar dados');
        }
        

    }
}
