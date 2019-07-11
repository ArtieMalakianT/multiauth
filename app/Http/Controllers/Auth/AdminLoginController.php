<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        //Validar os dados do formulário
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        //Se o usuário autenticado for ADMIN
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            //Redireciona para o dashboard Admin
            return redirect()->intended(route('admin.dashboard'));
        }

        //se não for autenticado, retorna para o formulário de login com os dados escritos
        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
