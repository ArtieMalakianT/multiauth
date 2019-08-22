@extends('layouts.home-menu')
@section('titulo')
Like School | Galerias
@endsection


@section('conteudo')

<div class="row">
    @foreach($directories as $galeria)
    <div class="container">
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <img src="/storage/<?php foreach(Storage::files($galeria) as $foto){ echo $foto; break; } ?>" alt="">                                      
                    <a class="btn-floating halfway-fab waves-effect waves-light blue" href="/galeria/fotos?galeria={{substr($galeria,9)}}"><i class="material-icons">collections</i></a>
                </div>
                <div class="card-content">
                    <span > {{substr($galeria,9)}}</span>
                </div>                
            </div>
        </div>
        
    </div>
    @endforeach

</div>

@endsection
@section('script')
    <script>            
            $(document).ready(function(){
                $('.sidenav').sidenav();   
                $('.fixed-action-btn').floatingActionButton();             
                $('#slider-avaliacoes').carousel({indicators: true});
                $('#slider-banner').carousel({fullWidth:true});
                setInterval(function(){
                    $('#slider-banner').carousel('next');
                    $('#slider-avaliacoes').carousel('next');
                }, 10000);
                $('.collapsible').collapsible();
                $('.datepicker').datepicker();                
                $("#telefone").mask("(00) 0000-0000");

                var topHeight = 100;
                $(window).bind('scroll',function(){                    
                    if($(window).scrollTop() > topHeight)
                    {
                        $('.fixed-action-btn').css('display','block');
                    }
                    else
                    {
                        $('.fixed-action-btn').css('display','none');
                    }
                });
                $('#modal_success').modal();
                $('#modal_success').modal('open');
                $('textarea#msg').characterCounter();
                $('textarea#comment').characterCounter();                
            });                      
        </script>          
    @endsection
