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
        <li><a href="/admin/categorias/listar">Categorias</a></li>
        <li><a href="/admin/pacotes/listar/{{$categoria->id}}">Pacotes</a></li>
        <li class="active">Cadastrar Pacotes</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h2>Cadastrar  Pacote - {{ $categoria->nome }}</h2>
			</div>
			<div class="box-body">
			<form action="/admin/pacotes" method="POST">
            @csrf
			<input name="user" type="hidden" value="{{ Auth::user()->id_user }}"/>            
            <input name="id_categoria" type="hidden" value="{{ $categoria->id }}"/> 
				<div class="form-group">
					<label>Nome do Pacote</label>
					<input id="nome" class="form-control" type="text" name="nome" maxlenght="200" required/>				
                </div>                                 

                <div class="form-group">
					<label>Sub Categoria</label>
					<select id="sub" name="id_sub_categoria" class="form-control"> 
                        @foreach($categoria->sub as $subCategoria)
                            <option  value="{{$subCategoria->id}}" >{{$subCategoria->nome}}</option>
                        @endforeach                    
					</select>
                </div>

                <div class="form-group">
                @foreach($cursos as $curso)
                <label>           
                    <input type="checkbox" name="cursos[]" value="{{ $curso->id }}" class="minimal">
                    {{ $curso->nome }}                               
                </label>
                    
                @endforeach
                </div>


                <div class="form-group">
					<label>Ordem de exibiçao</label>
					<input required class="form-control" type="text" name="ordem" maxlenght="200"/>
				
				</div>

                <div class="form-group">
					<label>Status</label>
					<select required name="status" class="form-control">
                        <option value="1"> Ativo</option>
                        <option value="0"> Oculto</option>
                    </select>
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
                    <label for="cores">Cor de fundo</label>
                    <select name="cores" id="cores" class="form-control">
                    @foreach($cores as $cor)
                        <option value="{{$cor->id}}">{{$cor->nome}}</option>
                    @endforeach        
                    </select>               
                </div>

                <div class="form-group">
                    <label for="video">ID do Vídeo demonstrativo</label>
                    <label for="">
                        <img src="{{url('img/elements/video_id.png')}}" alt="">
                    </label>
                    <input type="text" name="video" id="video" maxlength="150" class="form-control">
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
  @section('script')
  <script>
    $(document).ready(function()
      {
        $('#nome').focus();
        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass   : 'iradio_minimal-blue'
        });
      }
    );
  </script>
  <script src="/assets/plugins/iCheck/icheck.min.js"></script>  
  @endsection