@extends('layouts.app')

@section('content')
   
	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="cart_container">
						<div class="cart_title">Your Wishlist</div>
                        @foreach ($wishlist as $row)
						<div class="cart_items">
							<ul class="cart_list">
								<li class="cart_item clearfix">
									<div class="cart_item_image"><img src="{{ asset( $row->image_one)}}" alt=""></div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Name</div>
											<div class="cart_item_text">{{ $row->product_name }}</div>
										</div>
                                        @if($row->product_color == NULL)
                                        @else
										<div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Color</div>
											<div class="cart_item_text"></span>{{ $row->product_color }}</div>
										</div>
                                        @endif
                                        @if($row->product_size == NULL)
                                        @else
                                        <div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Size</div>
											<div class="cart_item_text"></span>{{ $row->product_size }}</div>
										</div>
                                           @endif
                                    
                                            <div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Action</div><br><br>
                                            <a href="{{ route('show.cart')}}" class="btn btn-danger btn-sm">Back</a>
											<a href="#" class="btn btn-danger btn-sm">Add Cart</a>
										</div>

									</div>
								</li>
							</ul>
						</div>
						   @endforeach
					</div>
				</div>
			</div>
		</div>
	</div> 
@endsection