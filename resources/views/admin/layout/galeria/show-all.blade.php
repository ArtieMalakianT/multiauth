@extends('layouts.admin')

@section('titulo')
Layout | Galerias 
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
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="/admin">Layout</a></li>
        <li class="/admin/layout/galerias">Galerias</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
				<h2>Lista de Galerias</h2>
        <a href="/admin/layout/galeria/create"><i class="fa fa-plus"></i> Cadastrar Galeria</a>
			</div>
			<div class="box-body">
          <?php $i = 0 ?>			                    
          @foreach($directories as $galeria)          
            <div class="box box-default collapsed-box">
              <label class="box-title">
              <?php $galeria = substr($galeria,9); ?>
              {{$galeria}}
              
              </label>
                          
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"> Adicionar fotos</i>
                </button>
                <a class="fa fa-eye" href="/admin/layout/galeria/fotos?galeria={{$galeria}}" > Ver fotos</a>
                <a class="fa fa-edit" href="/admin/layout/galeria/edit/{{$galeria}}"> Editar</a>                
                <a class="fa fa-trash" href="#" data-target="#modal-danger-{{$i}}" data-toggle="modal"> Deletar</a>                
              </div>              
              
              <div class="box-body">                  
                  <form action="/admin/layout/fotos/upload" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="file">Fotos - 20 arquivos por upload</label>
                        <input type="hidden" name="galeria" value="{{$galeria}}">
                      	<input type="file" name="images[]" id="file" multiple>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary" value="Enviar">
                    </div>
                  </form>
              </div>
            </div>
                                      
          
          <div class="modal modal-danger fade" id="modal-danger-@if(isset($i)){{$i}}@endif">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Aviso!</h4>
                  </div>
                  <div class="modal-body">
                    <p>Tem certeza que deseja excluir a galeria "@if(isset($galeria)){{$galeria}}@endif"?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                    <form action="/admin/layout/galeria/delete" method="post">
                      @method('delete')
                      @csrf                      
                      <input type="hidden" name="galeria" value="@if(isset($galeria)){{$galeria}}@endif">
                      <button type="submit" class="btn btn-outline">Excluir</button>
                    </form>                    
                  </div>
                </div>
                
              </div>
             
          </div>       
          <?php $i++ ?>  
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