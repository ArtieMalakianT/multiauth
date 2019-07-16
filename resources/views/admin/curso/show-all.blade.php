@extends('layouts.admin')

@section('titulo')
Cursos 
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
                <h4><i class="fa fa-check"></i>Sucesso</h4>
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
                <h4><i class="fa fa-ban"></i>Erro</h4>
                    {{ session('error') }}
                </div>
            </div>
        </div>
    @endif

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin LikeSchool
        <small>Cursos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active">Cursos</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h2>Lista de Cursos</h2>        
			</div>
			<div class="box-body">			
        <ul class="todo-list ui-sortable">            
          @foreach($cursos as $curso)
          <li><label class="text">{{ $curso->nome }}</label>
          <form action="" method="post" style="display: inline">
          <input type="hidden" name="_METHOD" value="delete">
            <div class="tools">
              <a class="fa fa-edit" href="/admin/cursos/edit/{{$curso->id}}"></a>
              <a class="fa fa-eye" href="/admin/pacotes/listar/{{ $curso->id }}"></a>
              <button class="fa fa-trash"></button>
            </div>
            </form>
          <li>
          @endforeach
          {!! $cursos->links() !!}
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