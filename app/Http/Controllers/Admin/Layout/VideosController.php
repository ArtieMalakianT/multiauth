<?php

namespace App\Http\Controllers\Admin\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\subCategorias;
use App\Models\Categorias;

class VideosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showAll()
    {
        $videos = Video::where('id','>','0')->get();
        $categorias = Categorias::all();
        return view('admin.layout.video.show-all',compact('videos','categorias'));
    }

    public function showCreateForm()
    {
        $categorias = Categorias::where('id','>','0')->get();
        return view('admin.layout.video.create',compact('categorias'));
    }

    public function showUpdateForm(Request $request)
    {
        $id = $request->id;
        $video = Video::find($id);
        $categorias = Categorias::where('id','>','0')->get();
        return view('admin.layout.video.update',compact('video','categorias'));
    }

    public function validateForm(Request $request)
    {
        $validationData = $request->validate([
            'url' => 'required|max:600',
            'sub' => 'required|integer',            
        ]);
        $video = $this->create($validationData);
        if(!$video)
        {
            return back()->with('error','Erro ao registrar Vídeo');
        }
        else
        {
            return back()->with('status','Vídeo registrado');
        }           
    }

    public function update(array $data)
    {
        return Video::update([
            'url' => $data['url'],
            'id_sub_categoria' => $data['sub'],
        ]);
    }

    public function create(array $data)
    {
        return Video::create([
            'url' => $data['url'],
            'id_sub_categoria' => $data['sub'],
        ]);
    }
}
