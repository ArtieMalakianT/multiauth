@extends('layouts.admin')
@section('titulo')
Like School| Alunos
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
        <small>Alunos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="#">Alunos</a></li>
        <li>Matrícular</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h2>Matrícula</h2>
                    <label>Aluno: <label>
                    <p>{{ $aluno->nome }}</p>
                </div>
                <div class="box-body">

                <form action="/admin/aluno/matricular" method="POST">
                @csrf

                    <div class="form-group">
                        <label>Pacote</label>
                        <select name="id_pacote" class="form-control">
                            @foreach($pacotes as $pacote)
                            <option class="@error('pacote') is-invalid @enderror" value="{{$pacote->id}}">{{$pacote->nome}}</option>
                            @endforeach
                        </select>
                        @error('pacote')
                        <small style="color:red">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="id_user" value="{{$aluno->id}}">
                    </div>

                    <div class="form-group">
                        <label>Status da Matrícula</label>
                        <select name="id_status" class="form-control">
                            @foreach($statusMatricula as $value)
                            <option class="@error('status') is-invalid @enderror" value="{{ $value->id }}" >{{ $value->nome }}</option>
                            @endforeach
                        </select>
                        @error('status')
                        <small style="color:red">{{$message}}</small>
                        @enderror                        
                    </div>                                        

                    <div class="form-group">
                        <button class="btn btn-primary">Salvar</button>
                    </div>                        

                </form>

                </div>
            </div>
            </div>
        </div>
    </section>
</div>
@endsection