<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Categorias;

class WelcomeController extends Controller
{
    public function index()
    {
        $recentPosts = Post::where('status',1)->orderBy('created_at','desc')->limit(4)->get();
        $categorias = Categorias::where('id','>',0)->orderBy('ordem')->get();
        return view('welcome',compact('recentPosts','categorias'));
    }
}
