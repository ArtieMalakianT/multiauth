<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    //Mostrar página inicial do blog com os posts recentes
    public function index()
    {
        return view('Blog.index');
    }

    //Mostrar o conteúdo de um post


    //Registrar um comentário
}
