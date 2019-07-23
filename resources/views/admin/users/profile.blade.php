@extends('layouts.admin')
@section('titulo')
Perfil
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Perfil
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admins</a></li>
        <li class="active">Perfil de usuário</li>
      </ol>
    </section>
    <section class="content">

            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        @if(Auth::user()->perfil)
                        <img class="profile-user-img img-responsive img-circle" src="{{Storage::url(Auth::user()->perfil)}}" alt="User profile picture">
                        @else
                        <img class="profile-user-img img-responsive img-circle" src="/assets/dist/img/user-standard.png" alt="User profile picture">
                        @endif
                        <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>
                        <form action="/admin/perfil" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="btn btn-primary" for="perfil">Trocar foto de perfil</label>
                                <input required type="file" id="perfil" name="perfil" style="display:none"/>
                                <input type="hidden" name="userId" value="{{Auth::user()->id}}"/>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success">Salvar foto</button>
                            </div>                                                        
                        </form>
                    </div>
                </div>
            </div>
            </div>
    </section>
</div>


@endsection