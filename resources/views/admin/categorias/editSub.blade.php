@extends('layouts.admin')

@section('titulo')
Editar Sub Categoria
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
        <small>Sub Categorias</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="/admin/categorias/listar">Categorias</a></li>
        <li class="active">Editar Sub Categoria</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h2>Editar Sub Categoria</h2>
                    <small>Categoria pai: {{$subCategoria->categoria->nome}}</small>
                </div>
                <div class="box-body">
                    <form action="/admin/subCategoria/update" method="POST">
                        @method('PUT')
                        @csrf
                        <input name="user" type="hidden" value="{{ Auth::user()->id_user }}"/>
                        <input name="id" type="hidden" value="{{ $subCategoria->id }}"/>
                        
                        <div class="form-group">
                            <label>Nome do Categoria</label>
                            <input id="nome" class="form-control" type="text" name="nome" maxlenght="200" value="{{$subCategoria->nome}}"/>			
                        </div>                        							                                            
                        <div class="form-group">
                            <button class="btn btn-primary">Salvar Alterações</button>
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