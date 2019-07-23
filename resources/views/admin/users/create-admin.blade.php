@extends('layouts.admin')

@section('titulo')
Admin | Registrar Moderador
@endsection

@section('content')
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
        Admin LikeSchool
        <small>Registros</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="#">Registrar moderador</a></li>
      </ol>
    </section>
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header">
                <h2>Registrar</h2>
            </div>
            <div class="box-body">
            @if(Auth::user()->id > 1)            
                    <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="fa fa-ban"></i>Alerta</h4>
                        Você não possui permissão para registrar novos moderadores.
                    </div>        
            @else
            <form action="/admin/register" method="POST" enctype="multipart/form-data">
            @csrf			
				<div class="form-group">
					<label>Nome</label>
					<input required class="form-control @error('nome') is invalid @enderror" type="text" name="nome" maxlenght="200" value="{{ old('nome') }}"/>
                    @error('nome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        
                <div class="form-group">
					<label>Email</label>
					<input required class="form-control  @error('email') is invalid @enderror" type="email" name="email" maxlenght="200" value="{{old('email')}}"/>	
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror		
				</div>									

                <div class="form-group">
					<label>Senha</label>
					<input required class="form-control  @error('password') is invalid @enderror" type="password" name="password" maxlenght="200"/>			
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

                <div class="form-group">
                    <label for="password-confirm">Confirmar Senha</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

				<div class="form-group">
					<button class="btn btn-primary">Registrar</button>
				</div>
			</form>
            </div>
            @endif     
            </div>
        </div>
    </div>

@endsection