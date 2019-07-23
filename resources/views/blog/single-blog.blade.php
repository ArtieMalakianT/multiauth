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
       						<h3>{{ $post->descricao }}</h3>
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
										    @if($post->author->perfil)
												<img src="{{Storage::url($post->author->perfil)}}" title="Autor" style="width: 40px; height:40px;">
											@else
												<img src="/assets/dist/img/user-standard.png" title="Autor" style="width: 40px; height:40px;">
											@endif       					
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
                    @include('layouts.blog-right')
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
@endsection        
        