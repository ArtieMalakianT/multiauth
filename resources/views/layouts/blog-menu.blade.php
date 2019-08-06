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
								@if(isset($categoria->sub))							
								<li class="nav-item submenu dropdown">
									<a href="/blog/filter/{{$categoria->id}}" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $categoria->nome }}</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="/blog/filter/{{$categoria->id}}">Ver todos</a></li>
										@foreach($categoria->sub as $sub)
										<li class="nav-item"><a class="nav-link" href="/blog/search/{{$sub->id}}">{{$sub->nome}}</a></li>
										@endforeach										
									</ul>
								</li>
								@else
								<li class="nav-item"><a class="nav-link" href="/blog/filter/{{$categoria->id}}">{{ $categoria->nome }}</a></li>
								@endif                               
                                @endforeach									
								<li class="nav-item"><a class="nav-link" href="contact.html">Contato</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right header_social ml-auto">
								<li class="nav-item" title="Like School Facebook"><a href="https://www.facebook.com/like.school.brazil/" target="_blank"><i class="fab fa-facebook"></i></a></li>
								<li class="nav-item"  title="Like School Instagram"><a href="https://www.instagram.com/like.school.oficial" target="_blank"><i class="fab fa-instagram"></i></a></li>
								<li class="nav-item"  title="Like School Messenger"><a href="https://m.me/like.school.brazil" target="_blank"><i class="fab fa-facebook-messenger"></i></a></li>
								<li class="nav-item"  title="Like School Whatsapp"><a href="https://wa.me/5547988624532" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
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