@extends('layouts.admin')

@section('titulo')
Layout | Galerias > Fotos 
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
        <li><a href="/admin/layout/galerias">Galerias</a></li>
        <li class="active">Fotos</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-md-12">		
            <ul class="timeline">
                <li>
                    <i class="fa fa-camera bg-purple"></i>
                    <div class="timeline-item">
                        <h3 class="timelite-header"><a href="">{{$galeria}}</a> Fotos enviadas</h3>
                        <div class="timeline-body">
                            <form action="/admin/layout/foto/delete" method="POST">
                            @csrf
                            @method('delete')
                                <?php $i = 0 ?>
                                @foreach($files as $foto)
                                    <label for="foto-{{$i}}">
                                        <input type="checkbox" name="fotos[]" id="foto-{{$i}}" class="minimal" value="{{$foto}}">
                                        <img src="{{Storage::url($foto)}}" class="margin" alt="" width="150" height="100">
                                    </label>
                                    <?php $i++ ?>
                                @endforeach
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Excluir">
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </li>
            </ul>
        </div>
      </div>
      
      
    </section>
   
  </div>
  @endsection