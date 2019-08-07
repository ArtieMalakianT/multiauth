@extends('layouts.admin')
@section('titulo')
Like School| Matrículas
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
        <small>Matrículas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="/admin/alunos">Alunos</a></li>
        <li><a href="#">Matrículas</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h2>{{$aluno->nome}} <small>{{$aluno->sobrenome}}</small></h2>
                    <a href="/admin/aluno/matricular/{{$aluno->id}}"><i class="fa fa-plus"></i> Nova Matrícula</a>
                </div>
                <div class="box-body">                    
                    @if(!$aluno->matricula)
                    <div class="callout callout-warning">
                        <h4>Aviso</h4>
                        <p>Nenhuma matrícula cadastrada!</p>
                    </div>                    
                    @else

                        @foreach($aluno->matricula as $value)

                        <div class="callout callout-default">                        
                            <h4>Pacote</h4>
                            <p >{{ $value->pacotes->nome}}</p>                       
                            <h4>Status</h4>
                            <p >{{ $value->status->nome}}</p> 
                            <br>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-danger-{{$value->id}}">Excluir matrícula</button>
                            <a class="btn btn-primary" href="{{$value->id}}">Editar matrícula</a>
                        </div>

                        <!-- Modals -->
                        <div class="modal modal-danger fade" id="modal-danger-{{$value->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Aviso!</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Você está certo que deseja excluir esta matrícula?&hellip; {{$value->pacotes->nome}}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                                        <a href="/admin/aluno/delete/matricula/{{$value->id}}" type="button" class="btn btn-outline">Excluir</a>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        @endforeach
                    @endif
                </div>
            </div>
            </div>
        </div>        

    </section>
</div>
@endsection