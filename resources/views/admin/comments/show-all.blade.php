@extends('layouts.admin')

@section('titulo')
Comentários & Avaliações 
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Alert if Sucess -->
    @if (session('status'))
        <div class="box box-default">
            <div class="box-body">
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="fa fa-check"></i>Sucesso</h4>
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
                <h4><i class="fa fa-ban"></i>Erro</h4>
                    {{ session('error') }}
                </div>
            </div>
        </div>
    @endif

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin LikeSchool
        <small>Comentários & Avaliações</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active">Comentários</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
                <h2>Lista de Comentários</h2>         
			</div>
			<div class="box-body">	
                <div class="col-md-10">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab-visiveis" data-toggle="tab">Visíveis</a>
                            </li>
                            <li>
                                <a href="#tab-aguardando" data-toggle="tab">Aguardando</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-visiveis">
                                <ul class="todo-list ui-sortable"> 
                                @foreach($comentariosAtivos as $comentario) 
                                    <li><label class="text truncate">{{$comentario->comment}}</label>              
                                        <div class="tools">                                                     
                                        <a class="fa fa-trash" style="color:red" data-toggle="modal" data-target="#modal-danger-{{$comentario->id}}"> Deletar</a>
                                        </div>
                                        <p>Usuário: {{$comentario->user->nome}}</p>
                                    </li>
                                    <div class="modal modal-danger fade" id="modal-danger-{{$comentario->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Aviso!</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Tem certeza que deseja excluir o comentario "{{$comentario->comment}}"?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                                            <form action="/admin/comment/delete" method="post">
                                            @method('delete')
                                            @csrf                      
                                            <input type="hidden" name="id" value="{{$comentario->id}}">
                                            <button type="submit" class="btn btn-outline">Excluir</button>
                                            </form>                    
                                        </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->           
                                @endforeach
                            </div>
                            <div class="tab-pane" id="tab-aguardando">
                                <ul class="todo-list ui-sortable"> 
                                @foreach($comentarios as $comentario) 
                                    <li><label class="text truncate">{{$comentario->comment}}</label>              
                                        <div class="tools">
                                        <a class="fa fa-check" style="color:green" href="/admin/comment/accept/{{$comentario->id}}"> Aprovar</a>              
                                        <a class="fa fa-trash" style="color:red" data-toggle="modal" data-target="#modal-danger-{{$comentario->id}}"> Deletar</a>
                                        </div>
                                        <p>Usuário: {{$comentario->user->nome}}</p>
                                    </li>
                                    <div class="modal modal-danger fade" id="modal-danger-{{$comentario->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Aviso!</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Tem certeza que deseja excluir o comentario "{{$comentario->comment}}"?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                                            <form action="/admin/comment/delete" method="post">
                                            @method('delete')
                                            @csrf                      
                                            <input type="hidden" name="id" value="{{$comentario->id}}">
                                            <button type="submit" class="btn btn-outline">Excluir</button>
                                            </form>                    
                                        </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->           
                                @endforeach
                            </div>
                            
                        </div>
                    </div>

                </div>		            
			</div>
		</div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection