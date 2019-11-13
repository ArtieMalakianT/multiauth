@extends('layouts.home-menu')

@section('titulo')
Like School | Ambiente
@endsection

@section('head')
<style>
    .halfway
    {
        text-align: left;
    }
    .halfway img
    {
        text-align: left;
        margin-top: -50px;
        background-color: #fff;
    }
    .page-section
    {
        padding-top: 0px;
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
    <div class="container center-align">
        <div class="halfway">
            <img src="../img/like_logo.png" alt="LikeSchool Logo" width="200">
        </div>

        <div class="row">
            <div class="col s12">                
                <div class="card left-align">
                    <div class="card-content">
                        <i class="material-icons">place</i> R. João Silvino da Cunha, 140
                        Sete de Setembro
                        <a href="https://www.instagram.com/like.school.oficial/?hl=pt-br" target="_blank"><i class="material-icons right" title="Instagram">camera_enhance</i></a>
                        <a href="https://www.facebook.com/like.school.brazil/" target="_blank"><i class="material-icons right"  title="Facebook">thumb_up</i></a>
                    </div>
                </div>
            </div>            
        </div>
        <!-- Information DIVs-->
        <div class="row">

            <div class="col s12 m4">
                <div class="card center-align">
                     <div class="card-content">
                        <div class="card-title grey darken-3 white-text">
                            Nosso Contato                                                                                                           
                        </div>
                        <div class="card-link left-align">
                            <i class="material-icons">call</i> <a>(47) 9228-0287</a>
                            <i class="fab fa-whatsapp-square fa-lg"></i> (47) 9228-0287
                        </div>
                    </div>
                </div>                
            </div>
                <div class="col s12 m4">
                    <div class="card center-align">
                         <div class="card-content">
                            <div class="card-title grey darken-3 white-text">
                                Atendimento                                                                                                           
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