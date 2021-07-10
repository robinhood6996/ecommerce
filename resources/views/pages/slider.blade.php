
	<!-- Banner -->
@php
	$banner = DB::table('products')->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name')->where('main_slider',1)->orderBY('id','DESC')->first();
@endphp
	<div class="banner">
		<div class="banner_background" style="background-image:url({{  asset('public/frontend/images/banner_background.jpg')}})"></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="banner_product_image"><img src="{{ asset($banner->image_one )}}" alt=""></div>
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
						<h1 class="banner_text">{{ $banner->product_name }}</h1>
						<div class="banner_price">
					    @if ($banner->discount_price == NULL)
						<h2> ${{ $banner->selling_price }} </h2>
						@else
						<span>${{ $banner->selling_price }}</span>${{ $banner->discount_price }}
						@endif
					    </div>
						<div class="banner_product_name">{{ $banner->brand_name }}</div>
						<div class="button banner_button"><a href="#">Shop Now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>