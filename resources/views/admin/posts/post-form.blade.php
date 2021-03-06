@extends('layouts.admin')

@section('titulo')
Criar Post
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
        <li><a href="/admin/post/list">Posts</a></li>
        <li class="active">Criar Post</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h2>Criar Post</h2>
			</div>
			<div class="box-body">
			<form action="/admin/post" method="POST" enctype="multipart/form-data">
            @csrf
			<input name="user" type="hidden" value="{{ Auth::user()->id }}"/>
				<div class="form-group">
					<label>Titulo do Post</label>
					<input id="titulo" required class="form-control" type="text" name="titulo" maxlenght="200"/>
				
        </div>
        
        <div class="form-group">
					<label>Descrição do Post</label><br>
          <small></small>
					<textarea required class="form-control" name="descricao" maxlenght="500" rows="5" cols="5" placeholder="Se necessário, inclua palavras chave para que seu post seja encontrado por buscas, Ex: #Design ou #IntroA"></textarea>
				
				</div>
				
				<div class="form-group">
					<label>Categoria</label>
					<select id="categoria" name="categoria" class="form-control">
          <option  value="" ></option>
                        @foreach($categorias as $categoria)
						<option  value="{{ $categoria->id }}" >{{ $categoria->nome }}</option>
                        @endforeach
					</select>
        </div>

        <div class="form-group">
					<label>Sub Categoria</label>
					<select id="sub" name="sub" class="form-control">          
          <option  value="" ></option>
					</select>
        </div>
        
        <div class="form-group">
          <label>Imagem de capa</label><small> Resolução indicada: 2000 x 2000</small>
          <input required type="file" name="image" id="InputFile" accept="image/*"/>
        </div>

        <div class="form-group">
          <label>Status</label>
          <select class="form-control" name="status">
            <option value="1">Visível</option>
            <option value="0">Oculto</option>
          </select>         
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
								Insira ou crie o conteúdo do Post
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
  @section('script')
  <script type="text/javascript">
        $('#categoria').change(function () {
            var idCat = $(this).val();
            $.get('/ajax/subCat/' + idCat, function (sub) {
                $('#sub').empty();
                $.each(sub, function (key, value) {
                    $('#sub').append('<option value=' + value.id + '>' + value.nome + '</option>');
                });
            });
        });
    </script>
    <script>
    $(document).ready(function()
      {
        $('#titulo').focus();
      }
    );
  </script>
  @endsection

 