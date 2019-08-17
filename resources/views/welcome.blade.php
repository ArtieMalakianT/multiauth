@extends('layouts.home-menu')
@section('titulo')
Like School | Inglês Absoluto
@endsection

@section('banner')
<img class="responsive-img" src="img/banner site.jpg">
@endsection

@section('conteudo')
<!-- About -->
<section id="about" class="page-section center-align">
        <div class="container">
            <div class="row">
                <h4 class="grey-text text-darken-3">Sobre Nós</h4>                    
            </div>
            <div class="section-description">                
                <div class="row">
                    <p class="grey-text">A missão da Like School é proporcionar o melhor ensino dentro de um ambiente saudável, através de uma equipe feliz, de princípios e comprometida com a educação e o bom relacionamento com alunos e sociedade.</p>
                </div>
            </div>                                          
            <div class="row"> 
                    <div class="col s12 m4">
                        <img class="responsive-img" title="Dedicação 100%" alt="Dedicação 100%" src="img/percent_azul.png">
                        <p class="txt-left" style="color: #2980b9"><i class="fas fa-award fa-lg"></i> Dedicação</p>
                    </div>
                    <div class="col s12 m4">
                        <img class="responsive-img" title="Compromisso 100%" alt="Compromisso 100%" src="img/percent_preto.png">
                        <p class="txt-left" style="color: #000"><i class="fas fa-handshake fa-lg"></i> Compromisso</p>
                    </div>
                    <div class="col s12 m4">
                        <img class="responsive-img" title="Social 100%" alt="Social 100%" src="img/percent_vermelho.png">
                        <p class="txt-left" style="color: #df0024"><i class="fas fa-share-alt fa-lg"></i> Social</p>
                    </div>                                      
            </div>    
        </div>
        
    </section>
    <!-- Projects -->
    <section id="projects" class="page-section center-align" style="background-image: url('/img/patterns/pattern1.png');display: flow-root">        
        <div class="row">
            <h4 class="grey-text text-darken-3">Projetos</h4>
            <p class="grey-text">Você vai amar o que fazemos. Confira!</p>                        
        </div>                       
        <div class="row">                
                <div class="col s6 m3">                        
                    <img class="responsive-img" src="img/projects/IMG-20190518-WA0011.jpg">                            
                </div>
                <div class="col s6 m3">
                    <img class="responsive-img" src="img/projects/IMG-20190610-WA0001.jpg">                          
                </div>
                <div class="col s6 m3">
                    <img class="responsive-img" src="img/projects/IMG-20190610-WA0002.jpg">                           
                </div>
                <div class="col s6 m3">
                    <img class="responsive-img" src="img/projects/Premio_mae_gaspar_normal.png">                          
                </div>                
        </div>
    </section>

    <!-- Wekness -->
    <section id="avaliations" class="page-section center-align" style="background-image: url('/img/thumb.jpg');background-size: cover; background-attachment: fixed;">
        <div class="row">                               
            <h4 style="color:#FFF">Avaliações</h4>  
            <i class="fas fa-star"></i>                                                   
            <i class="fas fa-star"></i>    
            <i class="fas fa-star"></i>    
            <i class="fas fa-star"></i>    
            <i class="fas fa-star"></i>                                                                                 
        </div>            

        <div class="carousel carousel-slider">
            <div class="carousel-item" > 
                <div class="container" style="color: white">
                    <img src="img/weekness/33151683_655776868094838_1299105767407747072_n.jpg" width="100">
                    <p>Getúlio Vargas</p>
                
                    <img style="width: 30px;margin-bottom: -25px;" src="img/patterns/arrow_blue.png">
                    <p style="background:#2980b9;color:#FFF;border-radius:10px;padding:10px">"Eu gosto de fazer cursos na Like School pelo fato de ser algo que a Ilhota nunca teve, e a escola estar dando certo, está prosseguindo. Os cursos tanto de Inglês como de Informática são bem produtivos e realmente tem um ensino de grande qualidade."</p>
                </div>    
            </div>

            <div class="carousel-item">
                <div class="" style="color: white">                
                    <img src="img/weekness/67697569_10205950013025036_7384679688280473600_n.jpg">
                    <p>Jenny Thuler</p>                                           
                </div>                
                <div class="container">                    
                    <p class="w1 ma"><img style="width: 30px;margin-bottom: -25px" src="img/patterns/arrow_blue.png"></p>
                    <p style="background:#2980b9;color:#FFF;border-radius:10px;padding:10px">"Melhor curso da região! Imbatível em criatividade e qualidade de ensino! Super recomendo."</p>                                                                     
                </div>
            </div>                
        </div>     

    </section>

    <!-- Cursos -->
    <section id="cursos" class="page-section center-align">
        <div class="container">
            <h4 class="grey-text text-darken-3">Cursos</h4>
            <div class="row">
                @foreach($categorias as $categoria)
                    <div class="col s12 m4">
                        <div class="card red">
                            <div class="card-content  white-text">                                    
                                <span class="card-title"><i class="{{$categoria->icon}}"></i> {{$categoria->nome}}</span>
                                <p>Certificações</p>                                    
                            </div>
                            <div class="card-action white">
                                @foreach($categoria->pacotes->where('status',1) as $pacote)
                                <a href="/curso/{{$pacote->id}}" class="red-text truncate" title="{{$pacote->nome}}">{{$pacote->nome}}</a><br>
                                @endforeach
                            </div>
                        </div>                            
                        
                    </div>                    
                @endforeach     
            </div>
               
        </div>

        
    </section>

    <!-- Blog -->
    <section id="blog" class="page-section grey darken-4" style="display:flow-root">
        <div class="center">
            <h4 class="white-text">Blog Like School</h4>
            <small class="grey-text">Posts recentes...</small>
        </div>    
        <div class="container center-align">
            <div class="row">
                @foreach($recentPosts as $post)                
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
                                    <a class="blue-text" href="/blog/show/post/{{ $post->id }}">Ver Post</a>
                                </div>  
                            </div>                                
                        </div>
                    </div>                                                                                                             
                @endforeach                         
            </div> 
            <div class="row">
                <div class="col s12">
                    <a href="/blog" class="btn blue">Ver Blog</a>
                </div>                    
            </div>   
        </div>                                                                                                                                           
    </section>        
    
    <!-- Contato -->
    <section id="contato" class="page-section center-align">
        <div class="container">
            <h4 class="grey-text text-darken-3" >Contato</h4>
            <div class="row">
                <form class="col s12" action="/mail/contact" method="POST">
                    @csrf
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input name="nome" type="text" placeholder="Nome" id="first_name"  class="validate">
                            <label for="first_name">Primeiro Nome</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="text" id="second_name"  class="validate">
                            <label for="second_name">Sobrenome</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input name="telefone" type="tel" id="telefone"  class="validate">
                            <label for="telefone">Telefone</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">email</i>
                            <input name="email" type="email" id="email"  class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">sms</i>
                            <textarea name="msg" id="msg" class="materialize-textarea" data-length="120"></textarea>
                            <label for="msg">Sua mensagem</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">                                
                            <input class="btn black" type="submit" value="Enviar">
                        </div>
                    </div>

                </form>
            </div>
            <div class="row">
                <div class="col s12 m6">
                    <label>Like School - Gaspar</label>
                    <p>
                        R. João Silvino da Cunha, 140
                            Sete de Setembro, Gaspar - SC, 89114-810
                            <strong class="red-text">(47) 3332-4750</strong>
                    </p>                        
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.190393316261!2d-48.94825768448777!3d-26.92917798312048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94df24b0b0d24b2b%3A0x15a995e281e83e18!2sLike+School+Gaspar!5e0!3m2!1spt-BR!2sbr!4v1547583443635"  frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col s12 m6">                        
                    <label>Like School - Ilhota</label>
                    <p>
                        R. Leoberto Leal, 265
                        Centro, Ilhota - SC, 88320-000
                        <strong class="red-text">(47) 3343-7883</strong>
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113845.54212668908!2d-48.965065354932115!3d-26.91386507096155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94df3025fdf86205%3A0x402cbeb46c64f3d1!2sLike+School+Ilhota!5e0!3m2!1sen!2sbr!4v1557149209281!5m2!1sen!2sbr"  frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </section>
    @endsection