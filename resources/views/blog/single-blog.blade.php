@extends('layouts.single-blog')

@section('title')
Like School | {{ $post->titulo }}
@endsection

@section('content')      
        <!--================Home Banner Area =================-->
        <?php $background = Storage::url("/$post->capa"); ?>
        <section class="banner_area" style="background: url({{$background}}) no-repeat; background-size:cover;">
        	<div class="container">
				<div class="row banner_inner">
					<div class="col-lg-5"></div>
					<div class="col-lg-7">
						<div class="banner_content text-center">
							<h2>{{ $post->titulo }}</h2>
							<div class="page_link">
								<a href="index.html">Home</a>
								<a href="single-blog.html">Post Details</a>
							</div>
						</div>
					</div>
				</div>
        	</div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Blog Area =================-->
    <section class="blog_area p_120 single-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
       					<div class="main_blog_details">
       						<img class="img-fluid" src="/img/blog/news-blog.jpg" alt="">
       						<a href="#"><h4>{{ $post->descricao }}</h4></a>
       						<div class="user_details">
       							<div class="float-left">
       								<a href="#">Lifestyle</a>
       								<a href="#">Gadget</a>
       							</div>
       							<div class="float-right">
       								<div class="media">
       									<div class="media-body">
       										<h5>{{ $post->author->name }}</h5>
       										<p>{{ $post->created_at }}</p>
       									</div>
       									<div class="d-flex">
       										<img src="/img/blog/user-img.jpg" title="Autor" style="width: 40px; height:40px;">
       									</div>
       								</div>
       							</div>
                               </div>
                            <p><?php echo Storage::Get("/post/$post->conteudo") ?></p>
       						<div class="news_d_footer">
      							<div class="news_socail ml-auto">
                                  <div class="fb-share-button" data-href="http://localhost:8080/blog/show/post/{{ $post->id }}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8080%2Fblog%2Fshow%2Fpost%2F1&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartilhar</a></div>									
								</div>
      						</div>
       					</div>       					
                        <div class="comments-area">                            
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                <div class="fb-comments" data-href="http://localhost:8080/blog/show/post/{{ $post->id }}" data-width="" data-numposts="10"></div>
                                </div>
                            </div>	
                            <div class="comment-list left-padding">
                               
                            </div>	                                                                                                                                				
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
                                <img class="author_img img-fluid" src="/img/blog/author.png" alt="">
                                <h4>Charlie Barber</h4>
                                <p>Senior blog writer</p>
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-github"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                                <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.</p>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Popular Posts</h3>
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
                            <aside class="single_sidebar_widget"> 
                                <a href="#"><img class="img-fluid" src="/img/blog/add.jpg" alt=""></a>
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
                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title">Tag Clouds</h4>
                                <ul class="list">
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Architecture</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Adventure</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
@endsection        
        