@extends('layouts.admin')

@section('titulo')
Admin | Lista de Posts
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin LikeSchool
        <small>Posts</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="#">Blog</a></li>
      </ol>
    </section>
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header">
                <h2>Lista de Posts</h2>
            </div>
            <div class="box-body">
                <ul class="todo-list ui-sortable">            
                @foreach($posts as $post)
                <li><label class="text">{{ $post->titulo }}</label>
                    <form action="" method="post" style="display: inline">
                    <input type="hidden" name="_METHOD" value="delete">
                        <div class="tools">
                        <a class="fa fa-edit" href="/admin/post/edit/{{ $post->id }}"></a>
                        <a class="fa fa-eye" href=""></a>
                        <button class="fa fa-trash"></button>
                        </div>
                    </form>
                <li>
                @endforeach
                 </ul>
            </div>
        </div>
    </div>
    </div>
@endsection