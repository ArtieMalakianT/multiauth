<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index() 
    {
        return view('admin.users.create-admin');
    }
    public function perfil()
    {
        return view('admin.users.profile');
    }
    public function changePhoto(Request $request)
    {
        $photo = $request->perfil->store('perfil');
        $user = Admin::find($request->userId);
        if($user->perfil)
        {
            Storage::delete($user->perfil);                    
        }
        $user->perfil = $photo;   
        $user->save();
        return back();
    }
    //Registrar um novo moderador
    public function register(Request $request)
    {        
            $validatedData = $request->validate(
                [
                    'nome' => 'required|max:255',
                    'email' => 'required|max:150',
                    'password' => 'required|string|min:8|confirmed',
                ]
            );
            $user = $this->create($validatedData);
            if($user )
            {
                return back()->with('status','Usuário Registrado');
            }
            else
            { 
               return back()->with('error','falha no Registro');
                Storage::delete($image);
            }        
    }
    public function create(array $data)
    {
        return Admin::create([
            'name' => $data['nome'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),            
        ]);
    }

}
