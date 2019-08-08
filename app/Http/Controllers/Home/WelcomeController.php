<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class WelcomeController extends Controller
{
    public function index()
    {
        $recentPosts = Post::where('status',1)->orderBy('created_at','desc')->limit(5)->get();
        return view('welcome',compact('recentPosts'));
    }
}
