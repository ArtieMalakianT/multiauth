@extends('layouts.admin')

@section('titulo')
Atualizar Vídeo
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
        <small>Vídeos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="">Layout</a></li>
        <li><a href="/admin/layout/videos">Vídeos</a></li>
        <li class="active">Atualizar Vídeos</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h2>Atualizar  Vídeos</h2>
			</div>
			<div class="box-body">
			<form action="/admin/layout/video/update" method="POST" enctype="multipart/form-data">
            @csrf
            @METHOD('PUT')
            <div class="form-group">
              <label for="url">Url do vídeo (Embed)</label>
              <input type="hidden" name="id" value="{{$video->id}}">
              <input type="text" id="url" name="url" maxlength="600" class="form-control" value="{{$video->url}}">
            </div>

            <div class="form-group">
              <label>Categoria</label>
              <select id="categoria" name="categoria" class="form-control">
              <option  value="" ></option>
                @foreach($categorias as $categoria)
                  @if($video->sub->categoria->id == $categoria->id)
                  <option selected value="{{ $categoria->id }}" >{{ $categoria->nome }}</option>
                  @else
                  <option value="{{ $categoria->id }}" >{{ $categoria->nome }}</option>
                  @endif
                @endforeach
              </select>
            </div>           

            <div class="form-group">
              <label>Sub Categoria</label>
              <select id="sub" name="sub" class="form-control">   
                  @if($video->sub)
                  <option value="{{$video->id_sub_categoria}}">{{$video->sub->nome}}</option>
                  @else
                  @endif
                    <option  value="" ></option>
              </select>
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
  @section('script')
  <script>
    $(document).ready(function()
      {
        $('#nome').focus();
      }
    );
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
  @endsection