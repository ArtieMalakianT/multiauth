<!--================Header Menu Area =================-->
<header class="header_area">
			<div class="main_menu">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="/blog"><img src="/img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav">
								<li class="nav-item"><a class="nav-link" href="/blog">Home</a></li> 
                                @foreach($categorias as $categoria)
                                <li class="nav-item" title="Filtro de posts"><a class="nav-link" href="/blog/filter/{{$categoria->id}}">{{ $categoria->nome }}</a></li>	
                                @endforeach	
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