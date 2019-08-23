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


    //Mostrar as fotos dentro dos diretórios ADMIN
    public function showFotos(Request $request)
    {
        $galeria = $request->galeria;
        $files = Storage::files("/galerias/$galeria");
        return view('admin.layout.galeria.show-fotos',compact('files','galeria'));
    }

    public function showCreateForm()
    {
        return view('/admin.layout.galeria.create');
    }


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

    public function showUpdateForm(Request $request)
    {
        $diretorio = $request->nomeGaleria;
        return view('/admin.layout.galeria.update',compact('diretorio'));
    }

    //Mudar nome de um diretório
    public function update(Request $request)
    {
        $oldName = $request->oldName;
        $newName = $request->nome;
        //var_dump(dirname(__DIR__));exit;        
        $renamed = Storage::move("galerias/$oldName","galerias/$newName");
        if(!$renamed)
        {
            return back()->with('error','Algo deu errado');
        }
        else
        {
            return redirect('/admin/layout/galerias')->with('status','Galeria alterada!');
        }
    }

    //Apagar um diretório/galeria
    public function delete(Request $request)
    {
        $galeria = $request->galeria;
        $allFiles = Storage::allFiles("/galerias/$galeria");
        foreach($allFiles as $file)
        {
            Storage::delete($file);
        }
        $deletedDir = rmdir(public_path()."/storage/galerias/$galeria");
        if(!$deletedDir)
        {
            return back()->with('error','Algo deu errado!');
        }
        else
        {
            return back()->with('status','Galeria deletada!');
        }
    }
    
}
