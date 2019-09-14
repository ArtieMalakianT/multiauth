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
        <h3 class="">Contatos</h3>

        <div class="row">
            <div class="col s12 m6">
                <div class="card blue lighten-5">
                    <div class="card-content">
                        <span class="card-title">Telefones</span>
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