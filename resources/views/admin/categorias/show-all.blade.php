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
        Blog LikeSchool
        <small>Cursos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="#">Cursos</a></li>
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
              <a class="fa fa-plus" href="/admin/subCategoria/{{ $categoria->id }}" title="Adicionar Sub-Categoria" style="color:green;"></a>
              <a class="fa fa-edit" href="" title="Editar Categoria"></a>
              <a class="fa fa-eye" href="/admin/pacotes/listar/{{ $categoria->id }}" title="Visualizar Pacotes"></a>
              <button class="fa fa-trash"></button>
            </div>
            </form>
          <li>
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