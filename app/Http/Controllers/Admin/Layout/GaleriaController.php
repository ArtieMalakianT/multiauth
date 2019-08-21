<?php

namespace App\Http\Controllers\Admin\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;

class GaleriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //Mostrar os diretórios de galerias
    public function showDirectories()
    {
        $directories = Storage::directories('/galerias');        
        return view('admin.layout.galeria.show-all',compact('directories'));
    }


    //Mostrar as fotos dentro dos diretórios


    //Registrar um diretório/galeria
    public function create(Request $request)
    {
        $nomeGaleria = $request->nome;
        $directory = Storage::makeDirectory('/galerias/'.$nomeGaleria);
        if(!$directory)
        {
            return back()->with('error','Erro ao criar galeria');
        }
        else
        {
            return back()->with('status','Galeria criada!');
        }
    }

    //Mudar nome de um diretório
    public function update()
    {
        
    }

    //Apagar um diretório/galeria

    //Apagar um arquivo/foto
}
