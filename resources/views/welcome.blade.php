    <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Like School</title>
        
        <meta name="Description" CONTENT="Author: LikeSchool, Category: School">
        <!--
        <link rel="stylesheet" href="/css/style.css" type="text/css">
        <script src="/js/jquery-3.4.1.js" ></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
        <script src="/js/jquery-3.4.1.js" ></script>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/assets/bower_components/font-awesome/css/fontawesome.css">
        <link rel="stylesheet" href="/assets/bower_components/font-awesome/css/brands.css">
        <link rel="stylesheet" href="/assets/bower_components/font-awesome/css/solid.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto|Lato|Lobster&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <header>     
            <div id="nav" class="" style="transition: all 0.5s">
            <nav class="nav-extended blue">
                <div class="nav-wrapper">                                        
                    <!-- Left Items -->                    
                    <ul class="">
                        <li class="brand-logo"><a>Like School</a></li>
                    </ul>

                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <!-- Right Items -->                                        
                    <ul class="right  hide-on-med-and-down">
                        @if (Route::has('login'))
                        @auth
                            <li><a href="{{ url('/home') }}"><i class="fas fa-home fa-lg"></i> Área do estudante</a></li>
                        @else
                            <li><a href="{{ route('login') }}"><i class="fas fa-user fa-lg"></i> Login</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}"><i class="fas fa-key fa-lg"></i> Registrar</a></li>
                        @endif

                        @endauth
                        @endif
                        <li><a href="" style="color: #fff" title="Messenger do facebook" alt="Envie-nos uma mensagem pelo facebook"><i class="fab fa-facebook-messenger fa-lg"></i></a></li>
                        <li><a href="" style="color: #fff" title="Facebook" alt="Acesse nossa página do facebook"><i class="fab fa-facebook fa-lg" ></i></a></li>
                        <li><a href="" style="color: #fff" title="Whatsapp" alt="Envie-nos uma mensagem pelo whatsapp"><i class="fab fa-whatsapp fa-lg"></i></a></li>
                        <li><a href="" style="color: #fff" title="Instagram" alt="Acesse nosso perfil no Instagram"><i class="fab fa-instagram fa-lg"></i></a>     </li>
                    </ul>
                    <ul class="tabs tabs-transparent">
                        <li class="tab"><a href="">Home</a></li>                        
                        <li class="tab"><a href="#about">Sobre Nós</a></li>
                        <li class="tab"><a href="#projects">Projetos</a></li>
                        <li class="tab"><a href="#cursos">Cursos</a></li>
                        <li class="tab"><a href="#blog">Blog</a></li>
                        <li class="tab"><a href="#contato">Contato</a></li>
                    </ul>               
                </div>                                  
            </nav> 
               
            </div>
            <ul class="sidenav blue"  id="mobile-demo">
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/home') }}"><i class="fas fa-home fa-lg"></i> Área do estudante</a></li>
                @else
                    <li><a href="{{ route('login') }}"><i class="fas fa-user fa-lg"></i> Login</a></li>
                @if (Route::has('register'))
                    <li><a href="{{ route('register') }}"><i class="fas fa-key fa-lg"></i> Registrar</a></li>
                @endif
                @endauth
                @endif
                <li><a href="" style="color: #fff" title="Messenger do facebook" alt="Envie-nos uma mensagem pelo facebook"><i class="fab fa-facebook-messenger fa-lg"></i>Messenger</a> </li>
                <li><a href="" style="color: #fff" title="Facebook" alt="Acesse nossa página do facebook"><i class="fab fa-facebook fa-lg" ></i>Facebook</a> </li>
                <li><a href="" style="color: #fff" title="Whatsapp" alt="Envie-nos uma mensagem pelo whatsapp"><i class="fab fa-whatsapp fa-lg"></i>Whatsapp</a></li>
                <li><a href="" style="color: #fff" title="Instagram" alt="Acesse nosso perfil no Instagram"><i class="fab fa-instagram fa-lg"></i>Instagram</a> </li>
            </ul>        
                        

            <div class="banner">
                <img class="responsive-img" src="img/banner site.jpg">
            </div>

            <div class="fixed-action-btn">
                <a href="#" class="btn-floating">
                    <i class="large material-icons blue">arrow_upward</i>
                </a>
                
            </div>
        </header>
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
                            <h4 >{{$categoria->nome}}</h4>
                            <a href="#" class="btn btn-large waves-effect waves-light red darken">Ver pacotes <i class="material-icons right">send</i></a>
                        </div>                    
                    @endforeach     
                </div>
                   
            </div>

            
        </section>

        <!-- Blog -->
        <section id="blog" class="page-section grey darken-4" style="display:flow-root">
            <div class="center">
                <h4 class="white-text">Blog</h4>
                <small class="grey-text">Posts recentes...</small>
            </div>    
            <div class="container center-align">
                <div class="row">
                    @foreach($recentPosts as $post)                
                        <div class="col s6 m3">                            
                            <div class="card">
                                <div class="card-image">
                                    <?php $url = Storage::url($post->capa) ?>
                                    <img src="{{$url}}" height="150">
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
                                <input name="telefone" type="tel" id="tel"  class="validate">
                                <label for="tel">Telefone</label>
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
                    <div class="col s6 ">
                        <label>Like School - Gaspar</label>
                        <p>
                            R. João Silvino da Cunha, 140
                                Sete de Setembro, Gaspar - SC, 89114-810
                                <strong class="red-text">(47) 3332-4750</strong>
                        </p>                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.190393316261!2d-48.94825768448777!3d-26.92917798312048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94df24b0b0d24b2b%3A0x15a995e281e83e18!2sLike+School+Gaspar!5e0!3m2!1spt-BR!2sbr!4v1547583443635"  frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col s6 ">                        
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

        <!-- Footer -->
        <footer class="page-footer blue">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5>Like School</h5>
                        <small>Inglês Absoluto</small>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5>Menu</h5>
                        <ul>
                            <li ><a class="white-text" href="#">Home</a></li>                        
                            <li ><a class="white-text" href="#about">Sobre Nós</a></li>
                            <li ><a class="white-text" href="#projects">Projetos</a></li>
                            <li ><a class="white-text" href="#cursos">Cursos</a></li>
                            <li ><a class="white-text" href="#blog">Blog</a></li>
                            <li ><a class="white-text" href="#contaot">Contato</a></li>
                        </ul>
                    </div>
                </div>    
            </div>
            <div class="footer-copyright">
                <div class="container">
                    @ <?php echo date('Y'); ?> Like School, todos os direitos reservados
                </div>
            </div>            
        </footer>
        

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="/js/materialize.min.js">      
        </script>
        <script>
            $(document).ready(function(){
                $('.sidenav').sidenav();                

                $(document).ready(function(){
                    $('.carousel').carousel({
                        indicators: true
                    });
                });

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

                $('textarea#msg').characterCounter();

            });
        </script>          
    </body>
</html>
