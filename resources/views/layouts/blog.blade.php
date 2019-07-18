<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>@yield('title')</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/blog/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/blog/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/blog/style.css">
        <link rel="stylesheet" href="css/blog/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
			<div class="main_menu">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><img src="/img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav">
								<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="category.html">Categoria</a></li>
								<li class="nav-item"><a class="nav-link" href="archive.html">Arquivo</a></li>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="single-blog.html">Sinlge Blog</a></li>
										<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
									</ul>
								</li> 
								<li class="nav-item"><a class="nav-link" href="contact.html">Contato</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right header_social ml-auto">
								<li class="nav-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="nav-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="nav-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li class="nav-item"><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div> 
					</div>
				</nav>
			</div>
			<div class="logo_part">
				<div class="container">
					<a class="logo" href="#"><img src="/img/logo.png" alt=""></a>
				</div>
			</div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
        	<div class="container">
				<div class="row">
					<div class="col-lg-5"></div>
					<div class="col-lg-7">
						<div class="blog_text_slider owl-carousel">
							<div class="item">
								<div class="blog_text">
									<div class="cat">
										<a class="cat_btn" href="#">Gadgets</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
									</div>
									<a href="#"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
									<a class="blog_btn" href="#">Read More</a>
								</div>
							</div>
							<div class="item">
								<div class="blog_text">
									<div class="cat">
										<a class="cat_btn" href="#">Gadgets</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
									</div>
									<a href="#"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
									<a class="blog_btn" href="#">Read More</a>
								</div>
							</div>
							<div class="item">
								<div class="blog_text">
									<div class="cat">
										<a class="cat_btn" href="#">Gadgets</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
									</div>
									<a href="#"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
									<a class="blog_btn" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
        	</div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!-- Blog Area -->
        @yield('content')
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Us</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>Stay updated with our latest trends</p>		
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">Instagram Feed</h6>
                            <ul class="list instafeed d-flex flex-wrap">
                                <li><img src="/img/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="/img/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="/img/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="/img/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="/img/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="/img/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="/img/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="/img/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>	
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget f_social_wd">
                            <h6 class="footer_title">Follow Us</h6>
                            <p>Let us be social</p>
                            <div class="f_social">
                            	<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>						
                </div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-12 footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/blog/jquery-3.2.1.min.js"></script>
        <script src="js/blog/popper.js"></script>
        <script src="js/blog/bootstrap.min.js"></script>
        <script src="js/blog/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        <script src="js/blog/jquery.ajaxchimp.min.js"></script>
        <script src="js/blog/mail-script.js"></script>
        <script src="js/blog/theme.js"></script>
    </body>
</html>