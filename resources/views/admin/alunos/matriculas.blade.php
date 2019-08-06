@extends('layouts.admin')
@section('titulo')
Like School| Matrículas
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin LikeSchool
        <small>Matrículas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="#">Matrículas</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h2>Lista de Matrículas</h2>
                </div>
                <div class="box-body">
                    <ul style="padding: 0px">
                    <li>{{$aluno->id}}</li>
                        @foreach($aluno->matricula as $value)
                        <div style="background:#f3f3f3; padding: 10px; list-style:none">
                        <li >{{ $value->id }}</li>
                        <li >{{ $value->pacotes->pacote->nome }}</li>                       
                        <br>
                        </div>
                        @endforeach
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </section>
</div>
@endsection