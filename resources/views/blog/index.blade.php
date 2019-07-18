@extends('layouts.blog')
@section('title')
Blog Like School
@endsection

@section('content')

<!--================Blog Area =================-->
<section class="blog_area p_120">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="blog_left_sidebar">																			
					<div class="row">												
						@foreach($paginatePosts as $post)
						<div class="col-md-6">
							<article class="blog_style1 small">
								<div class="blog_img">
									<?php $url = Storage::url($post->capa) ?>
									<img class="img-fluid" src="{{ $url }}" alt="">
								</div>
								<div class="blog_text">
									<div class="blog_text_inner">
										<div class="cat">
											<a href="#"><i class="fa fa-user" aria-hidden="true"></i> {{ $post->author->name }}</a>
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $post->created_at }}</a>
											<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
										</div>
										<a href="single-blog.html"><h4>{{ $post->titulo }}</h4></a>	
										<?php $dec = utf8_decode($post->conteudo); ?>									
										<p>{{ Storage::get("post/".$dec) }}</p>
										<a class="blog_btn" href="#">Ler mais...</a>
									</div>
								</div>
							</article>
						</div>	
						@endforeach
					</div>
					
					
					
					<nav class="blog-pagination justify-content-center d-flex">
						{!! $paginatePosts->links() !!}
					</nav>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="blog_right_sidebar">
					<aside class="single_sidebar_widget search_widget">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search Posts">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
							</span>
						</div><!-- /input-group -->
						<div class="br"></div>
					</aside>
					<aside class="single_sidebar_widget author_widget">
						<img class="author_img img-fluid" src="img/blog/author.png" alt="">
						<h4>Charlie Barber</h4>
						<p>Senior blog writer</p>
						<p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.</p>
						<div class="social_icon">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-github"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
						<div class="br"></div>
					</aside>
					<aside class="single_sidebar_widget popular_post_widget">
						<h3 class="widget_title">Popular Posts</h3>
						<div class="media post_item">
							<img src="img/blog/popular-post/post1.jpg" alt="post">
							<div class="media-body">
								<a href="blog-details.html"><h3>Space The Final Frontier</h3></a>
								<p>02 Hours ago</p>
							</div>
						</div>
						<div class="media post_item">
							<img src="img/blog/popular-post/post2.jpg" alt="post">
							<div class="media-body">
								<a href="blog-details.html"><h3>The Amazing Hubble</h3></a>
								<p>02 Hours ago</p>
							</div>
						</div>
						<div class="media post_item">
							<img src="img/blog/popular-post/post3.jpg" alt="post">
							<div class="media-body">
								<a href="blog-details.html"><h3>Astronomy Or Astrology</h3></a>
								<p>03 Hours ago</p>
							</div>
						</div>
						<div class="media post_item">
							<img src="img/blog/popular-post/post4.jpg" alt="post">
							<div class="media-body">
								<a href="blog-details.html"><h3>Asteroids telescope</h3></a>
								<p>01 Hours ago</p>
							</div>
						</div>
						<div class="br"></div>
					</aside>
					<aside class="single-sidebar-widget newsletter_widget">
						<h4 class="widget_title">Newsletter</h4>
						<div class="form-group d-flex flex-row">
							<div class="input-group">
								<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
							</div>
							<a href="#" class="bbtns"><i class="lnr lnr-arrow-right"></i></a>
						</div>	
						<div class="br"></div>							
					</aside>
					<aside class="single_sidebar_widget post_category_widget">
						<h4 class="widget_title">Post Catgories</h4>
						<ul class="list cat-list">
							<li>
								<a href="#" class="d-flex justify-content-between">
									<p>Technology</p>
									<p>37</p>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex justify-content-between">
									<p>Lifestyle</p>
									<p>24</p>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex justify-content-between">
									<p>Fashion</p>
									<p>59</p>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex justify-content-between">
									<p>Art</p>
									<p>29</p>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex justify-content-between">
									<p>Food</p>
									<p>15</p>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex justify-content-between">
									<p>Architecture</p>
									<p>09</p>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex justify-content-between">
									<p>Adventure</p>
									<p>44</p>
								</a>
							</li>															
						</ul>
					</aside>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================Blog Area =================-->

@endsection