<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\User;

class UserController extends Controller
{
    public function changePhoto(Request $request)
    {
        $photo = $request->perfil->store('perfil');
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
