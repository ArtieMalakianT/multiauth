@extends('layouts.admin')

@section('titulo')
Editar Post
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

    <!-- Alert if Sucess -->
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
        <small>Postagens</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="#">Blog</a></li>
        <li class="active">Editar Post</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h2>Editar Post</h2>
			</div>
			<div class="box-body">
			<form action="/admin/post" method="POST" enctype="multipart/form-data">
            @csrf
            @if(!isset($post->id))

            @else
            <input type="hidden" name="updatingPost" value="{{ $post->id }}"/>
            @endif
			<input name="user" type="hidden" value="{{ Auth::user()->id }}"/>
				<div class="form-group">
					<label>Titulo do Post</label>
					<input class="form-control" type="text" name="titulo" maxlenght="200" value="{{ $post->titulo }}"/>
				
        </div>
        
        <div class="form-group">
					<label>Descrição do Post</label>
					<textarea required class="form-control" name="descricao" maxlenght="500" rows="5" cols="5">
          {{ $post->descricao }}
          </textarea>
				
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
          <label>Imagem de capa</label><small> Resolução indicada: 1145 x 400</small>
          <input type="file" name="image" id="InputFile" accept="image/*" value="0"/>
        </div>
				
				<div class="form-group">
					<label>Conteúdo do Post</label>
				  <div class="box box-info">
					<div class="box-header">
					  <span class="box-title">Editor de texto</span>
					  <!-- tools box -->
					  <div class="pull-right box-tools">
						<button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
								title="Mostrar/Ocultar">
						  <i class="fa fa-minus"></i></button>						
					  </div>
					  <!-- /. tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body pad">
							<textarea id="editor1" name="conteudo" rows="10" cols="80">
              {{ Storage::get("post/".$post->conteudo) }}
							</textarea>
					</div>
				  </div>
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Publicar</button>
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