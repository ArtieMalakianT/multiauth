<div class="col-lg-4">
				<div class="blog_right_sidebar">
					<aside class="single_sidebar_widget search_widget">
						<div class="input-group">
                            <form action="/blog/search/" method="POST">           
							@csrf                 								
                                <input type="text" class="form-control" placeholder="Pesquisar Posts" name="consulta" id="query"/>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="lnr lnr-magnifier"></i></button>
                                </span>
                            </form>
						</div><!-- /input-group -->
						<div class="br"></div>
					</aside>
					<aside class="single_sidebar_widget author_widget">
						<img class="author_img img-fluid" src="/img/blog/author.jpg" alt="">
						<h4>Like School</h4>
						<a href="https://likeschool.com.br"><p>www.likeschool.com.br</p></a>
						<p>A missão da Like School é proporcionar o melhor ensino dentro de um ambiente saudável, através de uma equipe feliz, de princípios e comprometida com a educação e o bom relacionamento com alunos e sociedade.</p>
						<div class="social_icon">
							<a href="https://www.facebook.com/like.school.brazil/" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/like.school.oficial" target="_blank"><i class="fa fa-instagram"></i></a>
							<a href="https://m.me/like.school.brazil"><i class="fa fa-facebook-square"></i></a>
							<a href="https://wa.me/5547988624532"><i class="fa fa-whatsapp"></i></a>
						</div>
						<div class="br"></div>
					</aside>
					<aside class="single_sidebar_widget popular_post_widget">
						<h3 class="widget_title">Posts Populares</h3>
						<div class="media post_item">
							<img src="/img/blog/popular-post/post1.jpg" alt="post">
							<div class="media-body">
								<a href="blog-details.html"><h3>Space The Final Frontier</h3></a>
								<p>02 Hours ago</p>
							</div>
						</div>
						<div class="media post_item">
							<img src="/img/blog/popular-post/post2.jpg" alt="post">
							<div class="media-body">
								<a href="blog-details.html"><h3>The Amazing Hubble</h3></a>
								<p>02 Hours ago</p>
							</div>
						</div>
						<div class="media post_item">
							<img src="/img/blog/popular-post/post3.jpg" alt="post">
							<div class="media-body">
								<a href="blog-details.html"><h3>Astronomy Or Astrology</h3></a>
								<p>03 Hours ago</p>
							</div>
						</div>
						<div class="media post_item">
							<img src="/img/blog/popular-post/post4.jpg" alt="post">
							<div class="media-body">
								<a href="blog-details.html"><h3>Asteroids telescope</h3></a>
								<p>01 Hours ago</p>
							</div>
						</div>
						<div class="br"></div>
					</aside>
					<aside class="single-sidebar-widget newsletter_widget">
						<h4 class="widget_title">Novidades</h4>
						<div class="form-group d-flex flex-row">
							<div class="input-group">
								<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
							</div>
							<a href="#" class="bbtns"><i class="lnr lnr-arrow-right"></i></a>
						</div>	
						<div class="br"></div>							
					</aside>
					<aside class="single_sidebar_widget post_category_widget">
						<h4 class="widget_title">Sub-Categorias</h4>
						<ul class="list cat-list">
							@if(!isset($cat))

							@else
							@foreach($cat as $value)
							<li>
								<a href="/blog/search/{{$value->id}}" class="d-flex justify-content-between">
									<p>{{$value->nome}}</p>
									<p>{{ $value->id }}</p>
								</a>
							</li>
							@endforeach									
							
							@endif
						</ul>
					</aside>
				</div>
			</div>