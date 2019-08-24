@extends('layouts.admin')

@section('titulo')
Admin | Lista de Posts
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

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
    
    <section class="content-header">
      <h1>
        Admin LikeSchool
        <small>Posts</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="#">Posts</a></li>
      </ol>
    </section>
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header">
                <h2>Lista de Posts</h2>
                <a href="/admin/post"><i class="fa fa-plus"></i> Criar post</a>
            </div>
            <div class="box-body">
                    <div class="row">
                            <div class="col-md-10">
                              <!-- Custom Tabs -->
                              <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                <?php $i = 1; ?>
                                @foreach($categorias as $categoria)
                                    @if($i == 1)
                                  <li class="active"><a href="#tab_{{$i}}" data-toggle="tab">{{$categoria->nome}}</a></li>
                                  @else
                                  <li class=""><a href="#tab_{{$i}}" data-toggle="tab">{{$categoria->nome}}</a></li>
                                  @endif
                                  <?php $i += 1; ?>
                                @endforeach              
                                </ul>
                                <div class="tab-content">
                    
                                <?php $cont = 1; ?>
                                @foreach($categorias as $categoria)
                                @if($cont ==1)
                                <div class="tab-pane active" id="tab_{{$cont}}"> 
                                @else
                                <div class="tab-pane" id="tab_{{$cont}}"> 
                                @endif
                                                  
                                  <ul class="todo-list ui-sortable">                                                    
                                    @foreach($categoria->sub as $sub)  
                                    <small>{{$sub->nome}}</small><br>                                                                                                                                                                                                    
                                      @foreach($sub->posts as $post)                                                                                                                                  
                                        <li><label class="text">{{ $post->titulo }}</label>
                                                                                                                                 
                                            <div class="tools">
                                              <a class="fa fa-edit" href="/admin/post/edit/{{ $post->id }}"></a>
                                              <a class="fa fa-eye" href="/blog/show/post/{{ $post->id }}" target="_blank"></a>
                                              <a href="#" class="fa fa-trash" data-toggle="modal" data-target="#modal-danger-{{$post->id}}"></a>
                                            </div>
                                          
                                        </li>
                                        <div class="modal modal-danger fade" id="modal-danger-@if(isset($post)){{$post->id}}@endif">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Aviso!</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <p>Tem certeza que deseja excluir o post "@if(isset($post)){{$post->titulo}}@endif"?</p>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                                                    <form action="/admin/post/delete" method="post">
                                                      @method('delete')
                                                      @csrf                      
                                                      <input type="hidden" name="id_post" value="@if(isset($post)){{$post->id}}@endif">
                                                      <button type="submit" class="btn btn-outline">Excluir</button>
                                                    </form>                    
                                                  </div>
                                                </div>
                                                <!-- /.modal-content -->
                                              </div>
                                              <!-- /.modal-dialog -->
                                          </div>
                                        <!-- /.modal -->
                                      @endforeach                                                                        
                                    @endforeach   
                                  </ul> 
                                </div>                                                    
                                <?php $cont += 1; ?> 
                                    
                                @endforeach     
                                  <!-- /.tab-pane -->
                                
                                </div>
                                <!-- /.tab-content -->
                              </div>
                              <!-- nav-tabs-custom -->
                            </div>
                            <!-- /.col -->
                        </div>
                       
                        </div>
            </div>
        </div>
    </div>
    
    </div>
@endsection