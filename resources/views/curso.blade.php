@extends('layouts.home-menu')

@section('titulo')
Like School | {{$pacote->nome}}
@endsection

@section('banner')
<img class="responsive-img" style="width:100%" src="/img/banner/certificado.png">
@endsection

@section('conteudo')

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

<!-- Registrar Avaliação -->
<section>
    <div class="container">
        <h4 class="grey-text text-darken-3 center-align" >FeedBack</h4>
        <ul class="collapsible">
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">chat</i>Conte-nos o que você achou da Like School
                </div>                        
                <div class="collapsible-body">                        
                    <form action="">  
                        <div class="row">
                            <div class="input-field col s12">
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


@endsection