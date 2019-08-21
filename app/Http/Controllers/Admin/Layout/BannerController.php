<?php

namespace App\Http\Controllers\Admin\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;
use Image;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //Listar todos os banners
    public function showAll()
    {
        $banners = Banner::where('id','>','0')->orderBy('ordem')->get();
        return view('admin.layout.banner.show-all',compact('banners'));
    }

    //Mostrar form de cadastro
    public function showForm()
    {
        return view('admin.layout.banner.create');
    }

    //Mostrar formulário para atualizar ordem do Banner
    public function showUpdateForm(Request $request)
    {
        $idBanner = $request->id;
        $banner = Banner::find($idBanner);
        return view('admin.layout.banner.update',compact('banner'));
    }
    public function update(Request $request)
    {
        $idBanner = $request->id;
        $banner = Banner::find($idBanner);
        $banner->ordem = $request->ordem;
        if(!$banner->save())
        {
            return back()->with('error','Erro ao atualizar ordem do banner');
        }
        else
        {
            return back()->with('status','Banner Atualizado com sucesso!');
        }
    }

    //Validar novo banner
    public function saveBanner(Request $request)
    {        
        $file = $request->file('banner')->store('banners');
        $ordem = $request->ordem;
        
        $fileBanner = Storage::get($file);
        $image = Image::make($fileBanner);
        $image->resize(1920,null,function ($constraint) {
            $constraint->aspectRatio();});
        $image->crop(1920,480);
        $image->save(public_path()."/storage/$file");
        if($image)
        {
            $banner = new Banner();
            $banner->path = $file;
            $banner->ordem = $ordem;
            if($banner->save())
            {
                return back()->with('status','Banner Registrado com sucesso!');
            }
            else
            {
                return back()->with('error','Erro ao registrar Banner !');
            }    
        }
        else
        {
            return back()->with('error','Erro ao registrar Banner !');
        }        
    }

    //Excluir banner
    public function Delete(Request $request)
    {
        $idBanner = $request->id;
        $banner = Banner::find($idBanner);        
        $fileDeleted = Storage::delete($banner->path);
        if($fileDeleted)
        {
            if($banner->delete())
            {
                return back()->with('status','Banner deletado com sucesso!');
            }
            else
            {
                return back()->with('error','arquivo do Banner deletado porém continua armazenado no banco de dados');
            }
            
        }        
        else
        {
            return back()->with('error','Erro ao deletar banner');
        }
    }
}
