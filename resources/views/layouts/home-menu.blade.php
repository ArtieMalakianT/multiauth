<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>@yield('titulo')</title>
        
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
                @yield('banner')                
            </div>

            <div class="fixed-action-btn">
                <a href="#" class="btn-floating">
                    <i class="large material-icons blue">arrow_upward</i>
                </a>
                
            </div>
        </header>
        
        @yield('conteudo')

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
