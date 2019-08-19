<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\User;
use Image;

class UserController extends Controller
{
    public function changePhoto(Request $request)
    {
        $photo = $request->perfil->store('perfil');
        $arquivoPhoto = Storage::get($photo);
        $thumb = Image::make($arquivoPhoto);                        
        $thumb->resize(null,2000,function ($constraint) {
        $constraint->aspectRatio();}); 
        $thumb->crop(2000,2000);         
        $thumb->save(public_path().'/storage/'.$photo);  

        $user = User::find($request->userId);
        if($user->profile)
        {
            Storage::delete($user->profile);                    
        }
        $user->profile = $photo;   
        $user->save();
        return back();
    }
}
