<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="/img/favicon.png" type="image/png">
        <title>@yield('title')</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/css/blog/bootstrap.css">
        <link rel="stylesheet" href="/vendors/linericon/style.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/assets/bower_components/font-awesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="/assets/bower_components/font-awesome/css/brands.min.css">
        <link rel="stylesheet" href="/assets/bower_components/font-awesome/css/solid.min.css">
        <link rel="stylesheet" href="/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="/vendors/jquery-ui/jquery-ui.css">
        <!-- main css -->
        <link rel="stylesheet" href="/css/blog/style.css">
        <link rel="stylesheet" href="/css/blog/responsive.css">
    </head>
    <body>
        @include('layouts.blog-menu')
        
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
        	<div class="container">
				<div class="row">
					<div class="col-lg-5"></div>
					<div class="col-lg-7">						
                        @if(!isset($bannerPosts))	
				        @else	                        
                        <div class="blog_text_slider owl-carousel">                        
                        @foreach($bannerPosts as $post)
							<div class="item">                            
								<div class="blog_text">
                                <p>Posts recentes</p>
									<div class="cat">
										<a class="cat_btn" href="/blog/search/{{$post->sub->id}}">{{$post->sub->nome}}</a>
										<a href=""><i class="fa fa-calendar" aria-hidden="true"></i> {{$post->created_at}}</a>										
									</div>
									<a href="/blog/show/post/{{ $post->id }}"><h4>{{$post->titulo}}</h4></a>
									<p>{{$post->descricao}}</p>
									<a class="blog_btn" href="/blog/show/post/{{ $post->id }}">Ler mais...</a>
								</div>
							</div>
                        @endforeach		
                        @endif				
						</div>
					</div>
				</div>
        	</div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!-- Blog Area -->
        @yield('content')
        
       @include('layouts.blog-footer')
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="/js/blog/jquery-3.2.1.min.js"></script>
        <script src="/js/blog/popper.js"></script>
        <script src="/js/blog/bootstrap.min.js"></script>
        <script src="/js/blog/stellar.js"></script>
        <script src="/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="/vendors/isotope/isotope-min.js"></script>
        <script src="/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="/vendors/jquery-ui/jquery-ui.js"></script>
        <script src="/js/blog/jquery.ajaxchimp.min.js"></script>
        <script src="/js/blog/mail-script.js"></script>
        <script src="/js/blog/theme.js"></script>
    </body>
</html>