@extends('layouts.app')

@section('content')
   
	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="cart_container">
						<div class="cart_title">Shopping Cart</div>
                        @foreach ($cart as $row)
						<div class="cart_items">
							<ul class="cart_list">
								<li class="cart_item clearfix">
									<div class="cart_item_image"><img src="{{ asset( $row->options->image)}}" alt=""></div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Name</div>
											<div class="cart_item_text">{{ $row->name }}</div>
										</div>
                                        @if($row->options->color == NULL)
                                        @else
										<div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Color</div>
											<div class="cart_item_text"></span>{{ $row->options->color }}</div>
										</div>
                                        @endif
                                        @if($row->options->color == NULL)
                                        @else
                                        <div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Size</div>
											<div class="cart_item_text"></span>{{ $row->options->size }}</div>
										</div>
                                           @endif
										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Quantity</div><br><br>
                                            <form action="{{route('update.cartitem')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="productId" value="{{ $row->rowId }}">
                                                <input type="number" name="qty" value="{{ $row->qty }}" style="width:60px; height:30px">
                                                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check-square"></i></button>
                                            </form>
										
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Price</div>
											<div class="cart_item_text">${{ $row->price }}</div>
										</div>
                                    
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Total</div>
											<div class="cart_item_text">${{ $row->subtotal }}</div>
										</div>
                                            <div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Action</div><br><br>
											<a href="{{ url('remove/cart/'.$row->rowId)}}" class="btn btn-danger btn-sm">X</a>
										</div>

									</div>
								</li>
							</ul>
						</div>
						   @endforeach
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Order Total:</div>
								<div class="order_total_amount">{{ Cart::total() }}</div>
							</div>
						</div>

						<div class="cart_buttons">
							<button type="button" class="button cart_button_clear">Add to Cart</button>
							<button type="button" class="button cart_button_checkout">Add to Cart</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
@endsection