@extends('layouts.admin')
@section('titulo')
Like School| Alunos
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin LikeSchool
        <small>Alunos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="#">Alunos</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h2>Lista de Alunos</h2>
                </div>
                <div class="box-body">
                    <ul >
                        @foreach($alunos as $value)
                        <li >{{ $value->nome }}</li>
                        <li >{{ $value->email }}</li>
                        <a class="btn btn-primary" href="/admin/aluno/matricular/{{ $value->id_user }}">Matricular</a>
                        <br>
                        @endforeach
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </section>
</div>
{!! $alunos->links() !!}
@endsection