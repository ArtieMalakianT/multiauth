@extends('layouts.admin')

@section('titulo')
Cadastrar Pacotes
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
        <li class="active">Cadastrar Pacotes</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h2>Cadastrar  Pacote</h2>
			</div>
			<div class="box-body">
			<form action="/admin/pacotes" method="POST">
            @csrf
			<input name="user" type="hidden" value="{{ Auth::user()->id_user }}"/>
				<div class="form-group">
					<label>Nome do Pacote</label>
					<input class="form-control" type="text" name="nome" maxlenght="200" required/>
				
				</div>

                <div class="form-group">
					<label>Categoria</label>
					<select name="categoria" class="form-control">
                        @foreach($categorias as $categoria)
						<option  value="{{ $categoria->id }}" >{{ $categoria->nome }}</option>
                        @endforeach
					</select>
				</div>

                <div class="form-group">
                @foreach($cursos as $curso)
                    <input type="checkbox" name="cursos[]" value="{{ $curso->id }}">{{ $curso->nome }}
                @endforeach
                </div>


                <div class="form-group">
					<label>Ordem de exibiçao</label>
					<input required class="form-control" type="text" name="ordem" maxlenght="200"/>
				
				</div>

                <div class="form-group">
					<label>Status</label>
					<input required type="number" class="form-control" name="status"/>
				</div>

                <div class="form-group">
					<label>Duraçao</label>
					<input type="text" class="form-control" name="duracao"/>
				</div>

                <div class="form-group">
                    <label>Descriçao</label>
                    <div class="box">
                        <div class="box-header">                        
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                        title="Mostrar/Ocultar">
                                <i class="fa fa-minus"></i></button>                                
                            </div>
                            <!-- /. tools -->
                        </div>                    
                         <!-- /.box-header -->
                    <div class="box-body pad">
                   
                        <textarea name="desc" class="textarea" placeholder="Digite o texto aqui"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    </div>
                </div>
								
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Cadastrar"/>
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