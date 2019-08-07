<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Like School</title>
        
        <meta name="Description" CONTENT="Author: LikeSchool, Category: School">
        <!-- CSS -->
        <link rel="stylesheet" href="/css/style.css" type="text/css">
        <!-- JQuery -->
        <script src="/js/jquery-3.4.1.js" ></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/assets/bower_components/font-awesome/css/fontawesome.css">
        <link rel="stylesheet" href="/assets/bower_components/font-awesome/css/brands.css">
        <link rel="stylesheet" href="/assets/bower_components/font-awesome/css/solid.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto|Lato|Lobster&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <header class="page-section">
            <div class="infos">
                <div class="txt-left w100" style="font-size: 10px">
                    <div class="col w4 txt-left">
                        <a href=""><i class="fas fa-phone fa-lg"></i> Gaspar (47) 33324750 </a>
                        <a href=""><i class="fas fa-phone fa-lg"></i> Ilhota (47) 33324750</a> 
                        <a href="">><i class="fas fa-envelope fa-lg"></i> contato@likeschool.com.br </a>
                    </div>  
                    <div class="col w5 txt-right">                        
                        @if (Route::has('login'))
                            @auth
                            <a href="{{ url('/home') }}"><i class="fas fa-home fa-lg"></i> Área do estudante </a>
                        @else
                            <a href="{{ route('login') }}"><i class="fas fa-user fa-lg"></i> Login</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}"><i class="fas fa-key fa-lg"></i> Registrar</a>
                            @endif

                            @endauth
                        @endif
                    </div>                  
                </div>
            </div>
            <div class="top-header">
                <nav class="top-nav">
                    <div class="nav-left">
                        <ul class="menu-left">
                            <li style="width:65px"><img src="img/like_logo.png" style="height: 40px; margin:auto"></li>
                            <li><a class="dropbtn" href="#">Início</a></li>
                            <li><a class="dropbtn" href="#">Sobre Nós</a></li>
                            <li><a class="dropbtn" href="#">Cursos</a></li>
                            <li><a class="dropbtn" href="#">Contato</a></li>
                            <li>
                                <ul class="dropdown">
                                    <button class="dropbtn">Mídias <i class="fas fa-sort-down"></i></button>
                                        <div class="dropdown-content">
                                            <a href="#">Galerias</a>
                                            <a href="#">Vídeos</a>                                            
                                        </div>
                                </ul>
                            </li>
                        </ul> 
                    </div>
                    <div class="nav-center">

                    </div>
                    <div class="nav-right">
                        <a href="" style="color: #fff" title="Messenger do facebook" alt="Envie-nos uma mensagem pelo facebook"><i class="fab fa-facebook-messenger fa-lg"></i></a>
                        <a href="" style="color: #fff" title="Facebook" alt="Acesse nossa página do facebook"><i class="fab fa-facebook fa-lg" ></i></a>
                        <a href="" style="color: #fff" title="Whatsapp" alt="Envie-nos uma mensagem pelo whatsapp"><i class="fab fa-whatsapp fa-lg"></i></a>
                        <a href="" style="color: #fff" title="Instagram" alt="Acesse nosso perfil no Instagram"><i class="fab fa-instagram fa-lg"></i></a>
                    </div>
                </nav>
            </div>
            <div class="banner">
                <img src="img/banner site.jpg">
            </div>
        </header>
        <!-- About -->
        <section id="about" class="page-section">
            <div class="section-header">
                <div class="container">
                    <div class="row">
                        <h2>Sobre Nós</h2>                    
                    </div>
                    <div class="section-description">                
                        <div class="row">
                            <p>A missão da Like School é proporcionar o melhor ensino dentro de um ambiente saudável, através de uma equipe feliz, de princípios e comprometida com a educação e o bom relacionamento com alunos e sociedade.</p>
                        </div>
                    </div> 
                </div>                               
            </div>            
            <div class="section-content"> 
                <div class="section-header">
                    <div class="row">
                        <div class="col w3">
                            <img title="Dedicação 100%" alt="Dedicação 100%" src="img/percent_azul.png">
                            <p class="txt-left" style="color: #2980b9"><i class="fas fa-award fa-lg"></i> Dedicação</p>
                        </div>
                        <div class="col w3">
                            <img title="Compromisso 100%" alt="Compromisso 100%" src="img/percent_preto.png">
                            <p class="txt-left" style="color: #000"><i class="fas fa-handshake fa-lg"></i> Compromisso</p>
                        </div>
                        <div class="col w3">
                            <img title="Social 100%" alt="Social 100%" src="img/percent_vermelho.png">
                            <p class="txt-left" style="color: #df0024"><i class="fas fa-share-alt fa-lg"></i> Social</p>
                        </div>
                    </div>
                </div>               
            </div>
        </section>
        <!-- Projects -->
        <section id="projects" class="page-section">
            <div class="section-header">
                <div class="container">
                    <div class="row">
                        <h2>Projetos</h2>
                        <small>Você vai amar o que fazemos. Confira!</small>                        
                    </div>
                </div>
            </div>
            <div class="section-content">
                    <div class="container-fluid">
                        <div class="projects">
                            <div>
                                <img src="img/projects/IMG-20190518-WA0011.jpg">
                            </div>                            
                        </div>
                        <div class="projects">
                            <div>
                                <img src="img/projects/IMG-20190610-WA0001.jpg">
                            </div>                            
                        </div>
                        <div class="projects">
                            <div>
                                <img src="img/projects/IMG-20190610-WA0002.jpg">
                            </div>                            
                        </div>
                        <div class="projects">
                            <div>
                                <img src="img/projects/Premio_mae_gaspar_normal.png">
                            </div>                            
                        </div>
                    </div>
                </div>
        </section>
        <!-- Wekness -->
        <section id="avaliations" class="page-section">
            <div class="section-header">
                <div class="container">
                    <div class="row">
                        <h2>Avaliações</h2>  
                            <i class="fas fa-star"></i>                                                   
                            <i class="fas fa-star"></i>    
                            <i class="fas fa-star"></i>    
                            <i class="fas fa-star"></i>    
                            <i class="fas fa-star"></i>                                     
                    </div>
                </div>
            </div>
            <!-- First Comment -->
            <div id="comments" class="section-content"> 
                <div class="col w5" >          
                    <div class="row w2 ma">
                            <img src="img/weekness/33151683_655776868094838_1299105767407747072_n.jpg">
                            <small>Getúlio Vargas</small>                       
                    </div>                
                    <div class="row">
                        <p class="w1 ma" style="margin-bottom:-7px;"><img src="img/patterns/arrow_blue.png"></p>
                        <p class="weekness-text bg-blue" style="font-size:12px">"Eu gosto de fazer cursos na Like School pelo fato de ser algo que a Ilhota nunca teve, e a escola estar dando certo, está prosseguindo. Os cursos tanto de Inglês como de Informática são bem produtivos e realmente tem um ensino de grande qualidade."</p>
                    </div>
            <!-- Second Comment -->                
                    <div class="row w2 ma">                
                        <img src="img/weekness/67697569_10205950013025036_7384679688280473600_n.jpg">
                        <small>Jenny Thuler</small>                                           
                    </div>                
                    <div class="row">                    
                        <p class="w1 ma" style="margin-bottom:-7px;"><img src="img/patterns/arrow_blue.png"></p>
                        <p class="weekness-text bg-blue" style="font-size:12px">"Melhor curso da região! Imbatível em criatividade e qualidade de ensino! Super recomendo."</p>                                                                     
                    </div>
                </div>
            </div>            

        </section>
        
        <!-- Cursos -->
        <section id="cursos" class="page-section">
            <div class="section-header">
                <div class="row">
                    <h2>Cursos</h2>
                </div>            
            </div>
            <div class="section-content">
                <div class="row" style="color: #fff">
                    <div class="col w3" style="background-color: #2980b9">
                        <div class="row">
                            <i class="fas fa-comment-alt fa-5x"></i>
                        </div>                        
                        <p>Idiomas</p>
                    </div>
                    <div class="col w3" style="background-color: #000">
                        <div class="row">
                            <i class="fas fa-code fa-5x"></i>
                        </div>
                        <p>Informática</p>
                    </div>
                    <div class="col w3" style="background-color: #df0024">
                    <div class="row">
                       <i class="fas fa-chart-bar fa-5x"></i>
                    </div>
                    <p>Negócios</p>
                </div>
            </div>
        </section>
        <script>

        </script>
    </body>
</html>
