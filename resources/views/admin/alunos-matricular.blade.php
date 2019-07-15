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
                    <label>Aluno:<label> <small>{{ $aluno->name }}</small>
                </div>
                <div class="box-body">

                <form>

                    <div calss="form-group">
                        <label>Status da Matrícula</label>
                        <select name="status" class="form-control">
                            @foreach($statusMatricula as $value)
                            <option value="{{ $value->ID_STATUS_MATRICULA }}" >{{ $value->NOME }}</option>
                            @endforeach
                        </select>
                    </div>

                </form>

                </div>
            </div>
            </div>
        </div>
    </section>
</div>
@endsection