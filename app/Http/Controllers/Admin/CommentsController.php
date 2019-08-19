<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Models\Avaliacoes;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showAll()
    {
        $comentarios = Avaliacoes::where('status','0')->get();
        $comentariosAtivos = Avaliacoes::where('status','1')->get();
        return view('admin.comments\show-all',compact('comentarios','comentariosAtivos'));
    }

    public function acceptComment(Request $request)
    {
        $idComment = $request->id;
        $comment = Avaliacoes::find($idComment);

        $comment->status = '1';
        if($comment->save())
        {
            return back()->with('status','Comentário Aprovado!');
        }
        else
        {
            return back()->with('error','Erro ao aprovar o comentário');
        }
    }

    public function deleteComment(Request $request)
    {
        $idComment = $request->id;
        $comment = Avaliacoes::find($idComment);

        if($comment->delete())
        {
            return back()->with('status','Comentário Deletado!');
        }
        else
        {
            return back()->with('error','Erro ao deletar comentário');
        }
    }
}
