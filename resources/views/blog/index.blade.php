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
										</div>
										<a href="/blog/show/post/{{ $post->id }}"><h4>{{ $post->titulo }}</h4></a>								
										<p>{{ $post->descricao }}</p>
										<a class="blog_btn" href="/blog/show/post/{{ $post->id }}">Ler mais...</a>
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
			@include('layouts.blog-right')
		</div>
	</div>
</section>
<!--================Blog Area =================-->

@endsection