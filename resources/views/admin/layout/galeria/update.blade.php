@extends('layouts.admin')

@section('titulo')
Atualizar Galeria
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
        <small>Galerias</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="">Layout</a></li>
        <li><a href="/admin/layout/galerias">Galerias</a></li>
        <li class="active">Atualizar Galeria</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h2>Atualizar  Galeria</h2>
			</div>
			<div class="box-body">
			<form action="/admin/layout/galeria/update" method="POST" enctype="multipart/form-data">
            @csrf	 
            @METHOD('put')          
                <div class="form-group">
                    <label for="image"></label>
                    <input type="hidden" name="oldName" value="{{$diretorio}}">
                    <input type="text" name="nome" value="{{$diretorio}}">
                </div>                

				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Atualizar"/>
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