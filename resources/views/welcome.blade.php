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
            <div class="navbar">
            <nav class="nav-extended blue">
                <div class="nav-wrapper">                                        
                    <!-- Left Items -->
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="left hide-on-med-and-down">
                        <li><a href="">Home</a></li>                        
                        <li><a href="">Sobre Nós</a></li>
                        <li><a href="">Projetos</a></li>
                        <li><a href="">Cursos</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>

                    <!-- Right Items -->                                        
                    <ul class="right">
                        @if (Route::has('login'))
                        @auth
                            <li><a href="{{ url('/home') }}"><i class="fas fa-home fa-lg"></i> Área do estudante </a></li>
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
                    <div class="nav-content">
                        <ul class="tabs tabs-transparent">
                            <li class="tab"><a href="">Home</a></li>                        
                            <li class="tab"><a href="">Sobre Nós</a></li>
                            <li class="tab"><a href="">Projetos</a></li>
                            <li class="tab"><a href="">Cursos</a></li>
                            <li class="tab"><a href="/blog">Blog</a></li>
                            <li class="tab"><a href="">Contato</a></li>
                        </ul>
                    </div>                
                </div>                                  
            </nav> 
               
            </div>
            <ul class="sidenav blue"  id="mobile-demo">
                    <li><a href="">Home</a></li>                        
                    <li><a href="">Sobre Nós</a></li>
                    <li><a href="">Projetos</a></li>
                    <li><a href="">Cursos</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Contato</a></li>
                    <li style="display:flex"><img class="responsive-img" src="/img/like_logo.png" style="width:100px; height:60px; margin:0px auto"></li>                   
            </ul>        
                        

            <div class="banner">
                <img class="responsive-img" src="img/banner site.jpg">
            </div>
        </header>
        <!-- About -->
        <section id="about" class="container center-align">
            <div class="row">
                <h4>Sobre Nós</h4>                    
            </div>
            <div class="section-description">                
                <div class="row">
                    <p>A missão da Like School é proporcionar o melhor ensino dentro de um ambiente saudável, através de uma equipe feliz, de princípios e comprometida com a educação e o bom relacionamento com alunos e sociedade.</p>
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
        </section>
        <!-- Projects -->
        <section id="projects" class=" center-align" style="background-image: url('/img/patterns/pattern1.png')">        
            <div class="row">
                <h4>Projetos</h4>
                <small>Você vai amar o que fazemos. Confira!</small>                        
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
        <section id="avaliations" class="grey darken-4 center-align">
            <div class="row">               
                    <div class="">
                        <h4 style="color:#FFF">Avaliações</h4>  
                            <i class="fas fa-star"></i>                                                   
                            <i class="fas fa-star"></i>    
                            <i class="fas fa-star"></i>    
                            <i class="fas fa-star"></i>    
                            <i class="fas fa-star"></i>                                     
                    </div>                
            </div>
            <!-- First Comment -->
            <div id="comments" class=""> 
                <div class="container" >          
                    <div class="">
                            <img src="img/weekness/33151683_655776868094838_1299105767407747072_n.jpg">
                            <p>Getúlio Vargas</p>                       
                    </div>                
                    <div class="row">
                        <img style="width: 30px;margin-bottom: -25px;" src="img/patterns/arrow_blue.png">
                        <p style="background:#2980b9;color:#FFF;border-radius:10px;padding:10px">"Eu gosto de fazer cursos na Like School pelo fato de ser algo que a Ilhota nunca teve, e a escola estar dando certo, está prosseguindo. Os cursos tanto de Inglês como de Informática são bem produtivos e realmente tem um ensino de grande qualidade."</p>
                    </div>
            <!-- Second Comment -->                
                    <div class="">                
                        <img src="img/weekness/67697569_10205950013025036_7384679688280473600_n.jpg">
                        <p>Jenny Thuler</p>                                           
                    </div>                
                    <div class="row">                    
                        <p class="w1 ma"><img style="width: 30px;margin-bottom: -25px" src="img/patterns/arrow_blue.png"></p>
                        <p style="background:#2980b9;color:#FFF;border-radius:10px;padding:10px">"Melhor curso da região! Imbatível em criatividade e qualidade de ensino! Super recomendo."</p>                                                                     
                    </div>
                </div>
            </div>            

        </section>
        
        <!-- Cursos -->
        <section id="cursos" class="page-section">
            <div class="section-header">
                <div class="">
                    <h2>Cursos</h2>
                </div>            
            </div>
            <div class="section-content">
                <div class="" style="color: #fff">
                    <div class="col w3" style="background-color: #2980b9">
                        <div class="">
                            <i class="fas fa-comment-alt fa-5x"></i>
                        </div>                        
                        <p>Idiomas</p>
                    </div>
                    <div class="col w3" style="background-color: #000">
                        <div class="">
                            <i class="fas fa-code fa-5x"></i>
                        </div>
                        <p>Informática</p>
                    </div>
                    <div class="col w3" style="background-color: #df0024">
                    <div class="">
                       <i class="fas fa-chart-bar fa-5x"></i>
                    </div>
                    <p>Negócios</p>
                </div>
            </div>
        </section>

        <!-- Blog -->
        <section id="blog" class="page-section">
            <div class="section-header">
                <div class="">
                    <h2>Blog</h2>
                </div>
            </div>

            <div class="section-content">
                <?php
                    foreach($recentPosts as $post)
                    {
                        echo $post->titulo."<br>";
                    }
                ?>
            </div>
        </section>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="/js/materialize.min.js">      
        </script>
        <script>
            $(document).ready(function(){
                $('.sidenav').sidenav();
            });
        </script>          
    </body>
</html>
