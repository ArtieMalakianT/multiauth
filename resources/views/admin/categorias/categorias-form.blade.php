@extends('layouts.admin')

@section('titulo')
Cadastrar Categorias
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
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="#">Cursos</a></li>
        <li class="active">Cadastrar Categorias</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h2>Cadastrar  Categoria</h2>
			</div>
			<div class="box-body">
			<form action="/admin/categorias" method="POST">
            @csrf
			<input name="user" type="hidden" value="{{ Auth::user()->id_user }}"/>
				<div class="form-group">
					<label>Nome do Categoria</label>
					<input id="nome" class="form-control" type="text" name="nome" maxlenght="200"/>
				
				</div>

        <div class="form-group">
					<label>Ordem de exibiçao</label>
					<input class="form-control" type="text" name="ordem" maxlenght="200"/>			
				</div>							
								
				<div class="form-group">
					<button class="btn btn-primary">Cadastrar</button>
				</div>
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
  @section('script')
  <script>
    $(document).ready(function()
      {
        $('#nome').focus();
      }
    );
  </script>
  @endsection