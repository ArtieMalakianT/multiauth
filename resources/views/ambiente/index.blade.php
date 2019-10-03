@extends('layouts.home-menu')

@section('titulo')
Like School | Ambiente
@endsection

@section('head')
<style>
body
{
    background-color: #dadada;
}
#conteudo
{
    background-color: #fff;
}
.perfil-top img
{
    width: 150px;
    background-color: #fff;
    margin-top: -10%;
}
</style>
@endsection

@section('banner')
<img src="{{url('/img/banner/Fachada.jpg')}}" alt="" class="responsive-img">
@endsection

@section('conteudo')

<!-- Modals -->
@if(session('success'))
<div class="modal green white-text" id="modal_success">
 <div class="modal-content">
    <h4>Aviso</h4>
    <p>{{session('success')}}</p>
 </div>
 <div class="modal-footer">
    <a href="#" class="modal-close btn-flat green white-text">Ok</a>
 </div>
</div>
@endif

<!-- Conteúdo -->
<section class="page-section">
    <div class="container" id="conteudo">  
        <!--First DIV -->              
        <div class="perfil-top">
            <img src="/img/like_logo.png">
            <span>Like School | Gaspar</span>
        </div>
        
        <!-- Map Card-->
        <div class="row">
            <div class="col s12 m6">                
                <div class="card left-align">
                    <div class="card-content">
                        <i class="material-icons">place</i> R. João Silvino da Cunha, 140
                        Sete de Setembro
                    </div>
                </div>
            </div>
            <div class="col s12 m6">                
                    <div class="card right-align">
                        <div class="card-content">
                            <a href=""><i class="material-icons right">camera_enhance</i></a>
                            <a href=""><i class="material-icons right">thumb_up</i></a>Mídias Sociais
                        </div>
                    </div>
                </div>
        </div>
        <!-- Information DIVs-->
        <div class="row">

            <div class="col s12 m6">
                <div class="card center-align">
                     <div class="card-content">
                        <div class="card-title grey darken-3 white-text">
                            Nosso Contato                                                                                                           
                        </div>
                        <div class="card-link left-align">
                            <i class="material-icons">call</i> (47) 9228-0287
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>    
</section>         

@endsection

@section('script')
<script>
$('.sidenav').sidenav();   
                $('.fixed-action-btn').floatingActionButton();  
</script>
@endsection