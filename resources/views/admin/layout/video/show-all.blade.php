@extends('layouts.admin')

@section('titulo')
Vídeos 
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
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Início</a></li>    
        <li class="active">Vídeos</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h2>Lista de Vídeos</h2>
        <a href=""><i class="fa fa-plus"></i> Cadastrar Vídeo</a>
			</div>
			<div class="box-body">			
        <ul class="todo-list ui-sortable">            
          @foreach($videos as $video)
          <li><label class="text">{{ $video->url }}</label>
          
            <div class="tools">
              <a class="fa fa-edit" href="/admin/layout/video/edit/{{$video->id}}"></a>
              <a class="fa fa-eye" href="/curso/{{$video->id}}" target="_blank"></a>
              <a class="fa fa-trash" href="#" data-target="#modal-danger-{{$video->id}}" data-toggle="modal"></a>
            </div>
           
          </li>
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
      <div class="modal modal-danger fade" id="modal-danger-@if(isset($video)){{$video->id}}@endif">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Aviso!</h4>
            </div>
            <div class="modal-body">
              <p>Tem certeza que deseja excluir o pacote "@if(isset($video)){{$video->nome}}@endif"?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
              <form action="/admin/pacote/delete" method="post">
                @method('delete')
                @csrf                      
                <input type="hidden" name="id_pacote" value="@if(isset($video)){{$video->id}}@endif">
                <button type="submit" class="btn btn-outline">Excluir</button>
              </form>                    
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
  <!-- /.modal -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection