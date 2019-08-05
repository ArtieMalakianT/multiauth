@extends('layouts.single-blog')

@section('title')
Like School | Página não disponível
@endsection
@section('content')
      
        <!--================Home Banner Area =================-->        
        <section class="banner_area" style="">
        	<div class="container">
				<div class="row banner_inner">
					<div class="col-lg-5"></div>
					<div class="col-lg-7">
						<div class="banner_content text-center">
							<h2>Post não disponível</h2>							
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
       					     					
                                              
        			</div>
                    @include('layouts.blog-right')
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
@endsection        