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
						<a href="/"><p>www.likeschool.com.br</p></a>
						<p>A missão da Like School é proporcionar o melhor ensino dentro de um ambiente saudável, através de uma equipe feliz, de princípios e comprometida com a educação e o bom relacionamento com alunos e sociedade.</p>
						<div class="social_icon">
							<a href="https://www.facebook.com/like.school.brazil/" target="_blank" title="Like School Facebook" alt="Página do Facebook Like School"><i class="fab fa-facebook"></i></a>
							<a href="https://www.instagram.com/like.school.oficial" target="_blank" title="Like School Instagram" alt="Página do Instagram Like School"><i class="fab fa-instagram"></i></a>
							<a href="https://m.me/like.school.brazil" target="_blank" title="Like School Messenger" alt="Messenger do Facebook Like School"><i class="fab fa-facebook-messenger"></i></a>
							<a href="https://wa.me/5547988624532" target="_blank" title="Like School Whatsapp" alt="Messenger do Whatsapp Like School"><i class="fab fa-whatsapp"></i></a>
						</div>
						<div class="br"></div>
					</aside>
					<aside class="single_sidebar_widget popular_post_widget">
						@if(!isset($popularPosts))
						@else						
						<h3 class="widget_title">Posts Populares</h3>
						@foreach($popularPosts as $post)
						<div class="media post_item">
							
							<div class="media-body">
							<a href="/blog/show/post/{{ $post->id }}"><h3>{{ $post->titulo }}</h3></a>	
								<p>{{ $post->created_at }}</p>
							</div>
						</div>
						@endforeach
						<div class="br"></div>
						@endif
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
								</a>
							</li>
							@endforeach									
							
							@endif
						</ul>
					</aside>
				</div>
			</div>