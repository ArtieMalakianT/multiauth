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
        $banners = Banner::where('id','>','0')->get();
        return view('admin.layout.banner.show-all',compact('banners'));
    }

    //Mostrar form de cadastro
    public function showForm()
    {
        return view('admin.layout.banner.create');
    }

    //Validar novo banner
    public function saveBanner(Request $request)
    {        
        $file = $request->file('banner')->store('banners');
        $fileBanner = Storage::get($file);
        $image = Image::make($fileBanner);
        $image->resize(1920,null,function ($constraint) {
            $constraint->aspectRatio();});
        $image->crop(1920,480);
        $image->save(public_path()."/storage/$file");
        if($image)
        {
            
        }
        else
        {
            return back()->with('error','Erro ao registrar Banner !');
        }
        $banner = new Banner();
        $banner->path = $file;
        if($banner->save())
        {
            return back()->with('status','Banner Registrado com sucesso!');
        }
        else
        {
            return back()->with('error','Erro ao registrar Banner !');
        }

    }

    //Excluir banner
    public function deleteBanner()
    {

    }
}