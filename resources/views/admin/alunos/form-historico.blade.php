@extends('layouts.admin')
@section('titulo')
Like School| Histórico
@endsection

@section('content')
<div class="content-wrapper">

    <!-- Alert if Sucess -->
    @if (session('status'))
    <div class="box box-default">
        <div class="box-body">
            <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="fa fa-check"></i>Alerta</h4>
                {{ session('status') }}
            </div>
        </div>
    </div>
    @endif

    <!-- Alert if Error -->
    @if (session('error'))
    <div class="box box-default">
        <div class="box-body">
            <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="fa fa-ban"></i>Alerta</h4>
                {{ session('error') }}
            </div>
        </div>
    </div>
    @endif

    <!-- Content Header (Page header) -->
    
    <section class="content-header">
      <h1>
        Admin LikeSchool
        <small>Histórico Escolar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="/admin/alunos">Alunos</a></li>
        <li><a href="/admin/aluno/show/matriculas/{{ $matricula->aluno->id }}">Matrículas</a></li>
        <li class="active">Histórico</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h2>Upload do Histórico escolar</h2>
                    <label>Aluno: </label>
                    <p>{{ $matricula->aluno->nome }}  {{$matricula->aluno->sobrenome}}</p>
                    <label>Curso: </label>
                    <p>{{ $matricula->pacotes->nome }}</p>
                </div>
                <div class="box-body">

                <form action="/admin/aluno/historico" method="POST" enctype="multipart/form-data">
                @csrf

                    <div class="form-group">
                        <label>Arquivo</label>
                        <input type="file" id="historico" name="historico">  
                        <input type="hidden" name="id_matricula" value="{{$matricula->id}}">                                                  
                    </div>
                                      
                    <div class="form-group">
                        <button class="btn btn-primary">Salvar histórico</button>
                    </div>                        

                </form>

                </div>
            </div>
            </div>
        </div>
    </section>
</div>
@endsection
