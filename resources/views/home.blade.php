@extends('layouts.student')
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
        <li><a href="#">Área do estudante</a></li>
        <li class="active">Perfil de usuário</li>
      </ol>
    </section>
    <section class="content">

            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        @if(Auth::user()->profile)
                        <img class="profile-user-img img-responsive img-circle" src="{{Storage::url(Auth::user()->profile)}}" alt="User profile picture">
                        @else
                        <img class="profile-user-img img-responsive img-circle" src="/assets/dist/img/avatar.png" alt="User profile picture">
                        @endif
                        <h3 class="profile-username text-center">{{Auth::user()->nome}}  <small>{{  Auth::user()->sobrenome}}</small></h3>
                        <form action="/home/photo" method="POST" enctype="multipart/form-data">
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
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sobre min</h3>
                    </div>
                    <div class="box-body">
                        <strong>
                            <i class="fa fa-birthday-cake"></i> Idade
                        </strong>
                        <p class="text-muted"><?php $year = date('y'); $sub = substr(Auth::user()->nascimento,-4,1); $idade = $year - $sub; echo $idade."  Anos";  ?></p>
                        <hr>
                        <strong>
                            <i class="fa fa-file"></i>  RG
                        </strong>
                        <p class="text-muted">{{Auth::user()->rg}}</p>
                        <hr>
                        <strong>
                            <i class="fa fa-file"></i>  CPF
                        </strong>
                        <p class="text-muted">{{Auth::user()->cpf}}</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-success">
                    <div class="box-header">
                        <i class="fas fa-award fa-lg"></i>
                        <h3 class="box-title">Matrículas</h3>
                    </div>
                    <div class="box-footer">
                            @foreach(Auth::user()->matriculas as $matricula)    
                            <div class="callout callout-default ">
                                <i class="fas fa-box"></i>
                                <strong>Pacote</strong>                        
                                <p>{{$matricula->pacotes->nome}}</p>
                                <i class="fas fa-briefcase"></i>                                                            
                                <strong>Cursos</strong>                            
                                @foreach($matricula->pacotes->pacote as $rel)
                                    <p>{{$rel->cursos->nome}} </p>                                                                  
                                @endforeach                                   
                                
                                <i class="fas fa-bookmark"></i>
                                <strong>Status</strong>
                                <p>{{$matricula->status->nome}}</p> 
                                <a type="button" href="#" class="btn btn-success" style="text-decoration: none;">Baixar histórico</a> 
                                <p>Última atualização - {{$matricula->created_at}}</p>
                            </div>                 
                                                                                                                          
                            @endforeach                            
                        
                    </div>
                </div>
            </div>

            </div>
    </section>
</div>


@endsection