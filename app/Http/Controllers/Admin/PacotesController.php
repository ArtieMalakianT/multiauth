<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cursos;
use App\Models\Pacotes;
use App\Models\Categorias;
use App\Models\pacotesCurso;
use App\Models\Cores;
use Illuminate\Support\Facades\Storage;

class PacotesController extends Controller
{
    public $cursos;

    //Método construtor impede que usuários comuns acessem a administração
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //Mostrar todas os pacotes no admin
    public function showAll(Request $request)
    {
        $idCat = $request->id_cat;
        $pacotes = Pacotes::where('id_categoria',$idCat)->orderBy('nome')->get();
        return view('admin/pacotes/show-all',['pacotes' => $pacotes,'idCat' => $idCat]);
    }
    //Mostrar formulário de cadastro de Pacotes
    public function showForm(Request $request)
    {
        $idCat = $request->id_cat;
        $categoria = Categorias::find($idCat);
        $cursos = Cursos::where('id_categoria',$idCat)->orderBy('nome')->get();
        $cores = Cores::all();

        return view('admin.pacotes.pacote-form',['categoria' => $categoria,'cursos' => $cursos,'cores' => $cores]);
    }
    //Mostrar form para editar Pacote
    public function formUpdate(Request $request)
    {
        $idPacote = $request->id;
        $pacote = Pacotes::find($idPacote);
        $idCat = $pacote->id_categoria;
        $categoria = Categorias::find($idCat);
        $cores = Cores::all();

        $cursos = Cursos::where('id_categoria',$idCat)->orderBy('nome')->get();
        return view('admin.pacotes.update-form',['pacote' => $pacote,'cursos' => $cursos,'cores' => $cores,'categoria' => $categoria]);
    }
    //Atualiza os pacotes
    public function Update(Request $request)
    {
        $idPacote = $request->id;
                

        //Recebe os dados submtidos
        $cat = $request->id_categoria;
        $sub = $request->id_sub_categoria;
        $nome = $request->nome;
        $desc = $request->desc;
        $status = $request->status;
        $ordem = $request->ordem;
        $duracao = $request->duracao;   
        $this->cursos = $request->cursos;
        $cor = $request->cores;    
        $video = $request->video;        

        //Cria um objeto $pacote e define suas propriedades
        $pacote = Pacotes::find($idPacote);
        $pacote->id_categoria = $cat;
        $pacote->id_sub_categoria = $sub;
        $pacote->nome = $nome;
        $pacote->descricao = $desc;
        $pacote->duracao = $duracao;
        $pacote->status = $status;
        $pacote->ordem = $ordem;
        $pacote->id_cor = $cor;
        $pacote->video = $video;
       
        

        if(!$pacote->save())
        {
            return back()->with('error','Erro ao alterar dados');
        }
        else
        {
            if(!isset($this->cursos))
            {
                return back()->with('status','Dados Alterados com sucesso! Porém nenhum curso alterado'); 
            }
            else
            {
                $rel = pacotesCurso::where('id_pacote',$idPacote);
                $rel->delete();
                foreach($this->cursos as $key => $curso)
                {   

                    $newRel = new pacotesCurso();
                    $newRel->id_curso = $curso;
                    $pacote->pacote()->save($newRel); 
                                
                }
                return back()->with('status','Dados Alterados com sucesso!');    
            }
                        
        }        
    }

    //Submeter formulario para registrar o pacote
    public function formSubmit(Request $request)
    {        
        //Recebe os dados submtidos
        $cat = $request->id_categoria;
        $sub = $request->id_sub_categoria;
        $nome = $request->nome;
        $desc = $request->desc;
        $status = $request->status;
        $ordem = $request->ordem;
        $duracao = $request->duracao;   
        $this->cursos = $request->cursos;  
        $cor = $request->cores;   
        $video = $request->video;

        //Cria um objeto $pacote e define suas propriedades
        $pacote = new Pacotes();
        $pacote->id_categoria = $cat;
        $pacote->id_sub_categoria = $sub;
        $pacote->nome = $nome;
        $pacote->descricao = $desc;
        $pacote->duracao = $duracao;
        $pacote->status = $status;
        $pacote->ordem = $ordem;
        $pacote->id_cor = $cor;
        $pacote->video = $video;
        if(!$pacote->save())
        {
            return back()->with('error','Erro ao gravar dados');
        }
        else
        {
            if(!isset($this->cursos))
            {
                return back()->with('status','Dados Cadastrados! Porém nenhum curso adicionado');
            }
            else
            {
                foreach($this->cursos as $key => $curso)
                {
                    $obj = new pacotesCurso();
                    $obj->id_curso = $curso;
                    if(!$pacote->pacote()->save($obj))
                    {
                        $pacote->delete();
                    }
                    else
                    {

                    }
                }
                return back()->with('status','Dados Cadastrados!');    
            }
            
        }             
    }
    public function Delete(Request $request)
    {
        $idPacote = $request->id_pacote;
        $pacote = Pacotes::find($idPacote);
        if($pacote->pacote)
        {
            foreach($pacote->pacote as $relacao)
            {
                $relacao->delete();
            }    
        }
       
        if($pacote->delete())
        {
            return back()->with('status','Pacote Deletado!');    
        }
        else
        {
            return back()->with('error','Não foi possível deletar o pacote!');    
        }
    }
}
