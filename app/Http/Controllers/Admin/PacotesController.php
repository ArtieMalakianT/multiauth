<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cursos;
use App\Models\Pacotes;
use App\Models\Categorias;
use App\Models\pacotesCurso;

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

        return view('admin.pacotes.pacote-form',['categoria' => $categoria,'cursos' => $cursos]);
    }
    //Mostrar form para editar Pacote
    public function formUpdate(Request $request)
    {
        $idPacote = $request->id;
        $pacote = Pacotes::find($idPacote);
        $idCat = $pacote->id_categoria;

        $cursos = Cursos::where('id_categoria',$idCat)->orderBy('nome')->get();
        return view('admin.pacotes.update-form',['pacote' => $pacote,'cursos' => $cursos]);
    }
    //Atualiza os pacotes
    public function Update(Request $request)
    {
        $idPacote = $request->id;
                

        //Recebe os dados submtidos
        $cat = $request->categoria;
        $nome = $request->nome;
        $desc = $request->desc;
        $status = $request->status;
        $ordem = $request->ordem;
        $duracao = $request->duracao;   
        $this->cursos = $request->cursos;  

         //cria um nome randômico para o conteúdo da descrição
         $rand = rand(9000,1000000000);
         $fileName = $rand.".txt";  

        //Cria um objeto $pacote e define suas propriedades
        $pacote = Pacotes::find($idPacote);
        $pacote->id_categoria = $cat;
        $pacote->nome = $nome;
        $pacote->descricao = $fileName;
        $pacote->duracao = $duracao;
        $pacote->status = $status;
        $pacote->ordem = $ordem;

        $rel = pacotesCurso::where('id_pacote',$idPacote);
        $rel->delete();
        

        if(!$pacote->save())
        {
            return back()->with('error','Erro ao alterar dados');
        }
        else
        {
            //Faz o upload do arquivo $conteudo
            $store = Storage::disk('public')->put("/cursos/$fileName", $desc);

            //Se o upload foi feito
            if($store)
            {
                //Retorna para o formulário com o aviso de sucesso
                return back()->with('status', 'Post Publicado!');
            }
            //Caso contrário
            else
            {
                //Retorna para o formulário com o aviso de erro
                return back()->with('error', 'Algo deu Errado!');
            }
            foreach($this->cursos as $key => $curso)
            {                                
                $newRel = new pacotesCurso();
                $newRel->id_curso = $curso;
                $pacote->pacote()->save($newRel);                
            }
            return back()->with('status','Dados Alterados com sucesso!');
        }        
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
        $this->cursos = $request->cursos;     

        //Cria um objeto $pacote e define suas propriedades
        $pacote = new Pacotes();
        $pacote->id_categoria = $cat;
        $pacote->nome = $nome;
        $pacote->descricao = $desc;
        $pacote->duracao = $duracao;
        $pacote->status = $status;
        $pacote->ordem = $ordem;
        if(!$pacote->save())
        {
            return back()->with('error','Erro ao gravar dados');
        }
        else
        {
            foreach($this->cursos as $key => $curso)
            {
                $obj = new pacotesCurso();
                $obj->id_curso = $curso;
                $pacote->pacote()->save($obj);                
            }
            return back()->with('status','Dados Cadastrados!');
        }             
    }
}
