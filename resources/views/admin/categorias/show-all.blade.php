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
			</div>
			<div class="box-body">			
        <ul class="todo-list ui-sortable">            
          @foreach($categorias as $categoria)
          <li><label class="text">{{ $categoria->nome }}</label>
          <form action="" method="post" style="display: inline">
          <input type="hidden" name="_METHOD" value="delete">
            <div class="tools">
              <a class="fa fa-plus" href="/admin/subCategoria/{{ $categoria->id }}" title="Adicionar Sub-Categoria" style="color:green;"> Adicionar Sub-Categoria</a>
              <a class="fa fa-edit" href="" title="Editar Categoria"> Editar Categoria</a>
              <a class="fa fa-eye" href="/admin/pacotes/listar/{{ $categoria->id }}" title="Visualizar Pacotes"> Ver Pacotes</a>
              <a href="#"><i class="fa fa-trash"></i> Excluir</a>
            </div>
            </form>
          </li>
          <ul>
            @foreach($categoria->sub as $sub)
            <form>
              <li style="margin:5px">{{$sub->nome}} 
              <a class="fa fa-edit" href="" title="Editar Sub Categoria"></a>
              <button><i class="fa fa-trash" size="small"></i></button></li>              
            </form>
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