@extends('layouts.admin')

@section('titulo')
Categorias 
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
        <small>Categorias</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="/admin/cursos/listar">Cursos</a></li>
        <li class="active">Categorias</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
        <h2>Lista de Categorias</h2>   
        <a href="/admin/categorias"><i class="fa fa-plus"></i> Adicionar Categoria</a>     
			</div>
			<div class="box-body">			
        <ul class="todo-list ui-sortable">            
          @foreach($categorias as $categoria)
          <li><label class="text">{{ $categoria->nome }}</label>
          <form action="" method="post" style="display: inline">
          <input type="hidden" name="_METHOD" value="delete">
            <div class="tools">
              <a class="fa fa-plus" href="/admin/subCategoria/{{ $categoria->id }}" title="Adicionar Sub-Categoria" style="color:green;"> Adicionar Sub-Categoria</a>
              <a class="fa fa-edit" href="/admin/categoria/edit/{{$categoria->id}}" title="Editar Categoria"> Editar Categoria</a>
              <a class="fa fa-eye" href="/admin/pacotes/listar/{{ $categoria->id }}" title="Visualizar Pacotes"> Ver Pacotes</a>
              <a href="#" data-toggle="modal" data-target="#cat-modal-danger-{{$categoria->id}}"><i class="fa fa-trash"></i> Excluir</a>
            </div>
            </form>
          </li>
          <div class="modal modal-danger fade" id="cat-modal-danger-{{$categoria->id}}">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Aviso!</h4>
                  </div>
                  <div class="modal-body">
                    <p>Tem certeza que deseja excluir a categoria "{{$categoria->nome}}"?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                    <form action="/admin/categoria/delete" method="post">
                      @method('delete')
                      @csrf                      
                      <input type="hidden" name="id" value="{{$categoria->id}}">
                      <button type="submit" class="btn btn-outline">Excluir</button>
                    </form>                    
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
          </div>
        <!-- /.modal -->
          <ul>
            @foreach($categoria->sub as $sub)
            <li style="margin:5px">{{$sub->nome}} 
            <a class="fa fa-edit" href="/admin/subCategoria/edit/{{$sub->id}}" title="Editar Sub Categoria"></a>
            <a href="#" data-toggle="modal" data-target="#sub-modal-danger-{{$sub->id}}"><i class="fa fa-trash" size="small"></i></a></li>

            <div class="modal modal-danger fade" id="sub-modal-danger-{{$sub->id}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Aviso!</h4>
                    </div>
                    <div class="modal-body">
                      <p>Tem certeza que deseja excluir a sub categoria "{{$sub->nome}}"?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                      <form action="/admin/subCategoria/delete" method="post">
                        @method('delete')
                        @csrf                      
                        <input type="hidden" name="id" value="{{$sub->id}}">
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
          </ul>
          @endforeach
        </ul>

			</form>
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