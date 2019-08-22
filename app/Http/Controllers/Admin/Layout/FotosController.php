<?php

namespace App\Http\Controllers\Admin\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Image;

class FotosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //upload das fotos
    public function upload(Request $request)
    {
        $galeria = $request->galeria;        
        $fotos = $request->images;
        foreach($fotos as $key=>$foto)
        {
            $uploadedFoto = Storage::putFile("/galerias/$galeria",$foto);            
            
        }
        if(!$uploadedFoto)
        {
            return back()->with('error','Erro ao fazer upload!');
        }
        else
        {
            return back()->with('status','Upload concluído');
        }
    }

    //excluir fotos


    //mostrar fotos

}
