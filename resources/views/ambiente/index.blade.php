@extends('layouts.home-menu')

@section('titulo')
Like School | Ambiente
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

<!-- Contatos -->
<section class="page-section">
    <div class="container center-align">
        <h3 class="">Gaspar</h3>

        <div class="row">
            <div class="col s6 m3">
                <div class="card blue lighten-5">
                    <div class="card-image">
                        <img src="/img/banner/Climatizado.png" alt="">                        
                        <a class="btn-floating halfway-fab waves-effect waves-light blue"><i class="material-icons">ac_unit</i></a>
                    </div>
                    <div class="card-content">
                        <span class="truncate">Ambiente Climatizado</span>
                    </div>
                </div>
            </div>
            <div class="col s6 m3">
                <div class="card blue lighten-5">
                    <div class="card-image">
                        <img src="/img/banner/Informatica.png" alt="">                        
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">desktop_windows</i></a>
                    </div>
                    <div class="card-content">
                        <span class="truncate" title="Laboratório de Informática">Laboratório de Informática</span>
                    </div>
                </div>
            </div>
            <div class="col s6 m3">
                <div class="card blue lighten-5">
                    <div class="card-image">
                        <img src="/img/banner/Lazer.png" alt="">                       
                        <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">battery_charging_full</i></a>
                    </div>
                    <div class="card-content">
                        <span class="truncate" title="Área de lazer">Área de lazer</span>
                    </div>
                </div>
            </div>
            <div class="col s6 m3">
                <div class="card blue lighten-5">
                    <div class="card-image">
                        <img src="/img/banner/Cafe.png" alt="">                        
                        <a class="btn-floating halfway-fab waves-effect waves-light orange"><i class="material-icons">free_breakfast</i></a>
                    </div>
                    <div class="card-content">
                        <span class="truncate" title="Cafézinho">Cafézinho</span>
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