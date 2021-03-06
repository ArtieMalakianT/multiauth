@extends('layouts.home-menu')

@section('titulo')
Like School | {{$pacote->nome}}
@endsection


@section('banner')
<img class="responsive-img" style="width:100%" src="/img/banner/certificado.png">
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

<div class="row {{$pacote->cor->nome}} darken-2">
    <div class="col s12 center-align">
        <h4 class="white-text" style="font-variant: small-caps"><i class="fas fa-award"></i> {{$pacote->nome}}</h4>
    </div>
</div>

<div class="container">
    <div class="row">
        <!-- Informações do curso -->
        <div class="col s12 m6">
            <table class="responsive-table">
                <thead>
                    <tr class="{{$pacote->cor->nome}} darken-3 white-text">
                        <th>Cursos</th>
                        <th>Duração</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pacote->pacote as $relacao)
                        <tr>
                            <td><i class="fas fa-graduation-cap"></i> {{$relacao->cursos->nome}}</td>
                            <td><i class="fas fa-clock"></i> {{$relacao->cursos->duracao}}</td>
                        </tr>
                    @endforeach  
                        <tr>
                            <th>Prazo de término</th>
                            <th>{{$pacote->duracao}}</th>
                        </tr>      
                </tbody>
            </table>        
        </div>
        <!-- Contato -->
        <div class="col s12 m6">
            <div class="row right-align">
                    <p>Se interessou pelo curso? Preencha o formulário para receber mais informações de disponibilidade! <i class="fas fa-check-circle {{$pacote->cor->nome}}-text"></i></p>
            </div>
            
            <div class="row">
                <form class="col s12" action="/mail/curso" method="POST">
                    @csrf

                    <input type="hidden" name="pacote" value="{{$pacote->nome}}">

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input name="nome" type="text" placeholder="Nome" id="first_name"  class="validate">
                            <label for="first_name">Nome</label>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">phone</i>
                            <input name="telefone" type="tel" id="telefone"  class="validate" data-mask="(00) 0000-0000">
                            <label for="telefone">Telefone</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input name="email" type="email" id="email"  class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">event</i>
                            <input id="datepicker" type="text" class="datepicker" name="nascmiento">
                            <label for="datepicker">Data de Nascimento</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">                                
                            <input class="btn black" type="submit" value="Enviar">
                        </div>
                    </div>
                </form>
            </div>    
        </div>
    </div>    
</div>
<!-- Posts relacionados -->
<section class="page-section {{$pacote->cor->nome}} darken-2">
    <div class="row">
        <div class="center">
            <h4 class="white-text">Blog Like School</h4>
            <small class="grey-text">Posts relacionados...</small>
        </div>    
        <div class="container center-align">
            <div class="row">
                @foreach($paginatePosts as $post)                
                <div class="col s6 m4">                            
                    <div class="card">
                        <div class="card-image">
                            <?php $url = Storage::url($post->capa) ?>
                            <img src="{{$url}}">
                        </div>        
                        <div class="card-stacked">
                            <div class="card-content">
                                <span class="card-title truncate" title="{{$post->titulo}}">{{$post->titulo}}</span>
                                <small class="truncate" title="{{$post->sub->nome}}">{{$post->sub->nome}}</small>
                            </div>        
                            <div class="card-action">
                                <a class="{{$pacote->cor->nome}}-text" href="/blog/show/post/{{ $post->id }}">Ver Post</a>
                            </div>  
                        </div>                                
                    </div>
                </div>                                                                                                             
                @endforeach                         
            </div> 
            <div class="row">
                <div class="col s12">
                    <a href="/blog" class="btn grey darken-4">Ver Blog</a>
                </div>                    
             </div>   
        </div>                 
    </div>
</section>
@if($pacote->video)
<!-- Vídeo -->
<section class="page-section">
        <div class="video-container container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$pacote->video}}?controls=0&autoplay=1&mute=1&loop=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        
        </div>
</section>
@endif

<!-- Registrar Avaliação -->
@if(Auth::user())
<section class="page-section">
    <div class="container">
        <h4 class="grey-text text-darken-3 center-align" >FeedBack</h4>
        <ul class="collapsible">
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">chat</i>Conte-nos o que você achou da Like School
                </div>                        
                <div class="collapsible-body">                        
                    <form action="/wekness/comment" method="post">  
                    @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                                <textarea name="comment" id="comment" class="materialize-textarea" data-length="120"></textarea>
                                <label for="comment">Comentário</label>
                            </div> 
                        </div>    
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" class="btn black" value="Registrar">
                            </div>
                        </div>                                                                                                     
                    </form>
                </div>                  
            </li>
        </ul>
    </div>
</section>
@endif


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