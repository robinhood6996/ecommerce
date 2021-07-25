@extends('layouts.app')
@section('content')
@include('pages.menubar')
<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Technological Blog</h2>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_posts d-flex flex-row align-items-start justify-content-between">
						@foreach ($blogs as $blog)
                            <div class="blog_post">
							<div class="blog_image" style="background-image:url({{asset($blog->image)}})"></div>
                            @if(session()->get('lang') == 'bangla')
							<div class="blog_text">{{$blog->title_bn}}</div>
                            @else  
                            <div class="blog_text">{{$blog->title_en}}</div>
                            @endif
							<div class="blog_button"><a href="blog_single.html">Continue Reading</a></div>
						</div>
                        @endforeach
						<!-- Blog post -->
					

						
						
					</div>
				</div>
					
			</div>
		</div>
	</div>
    @endsection