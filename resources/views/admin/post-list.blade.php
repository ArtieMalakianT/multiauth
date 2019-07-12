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
        <li><a href="#">Posts</a></li>
      </ol>
    </section>
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header">
                <h2>Lista de Posts</h2>
            </div>
            <div class="box-body">
                <ul>
                @foreach($posts as $post)
                    <li>{{ $post->TITULO }}</li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
    </div>
@endsection