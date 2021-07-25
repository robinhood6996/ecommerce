@extends('layouts.app')

@section('content')
@include('pages.menubar')
   @php
	 $shipping = DB::table('settings')->first();
	 $charge = $shipping->shipping_charge;  
   @endphp
	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="cart_container">
						<div class="cart_title">Checkout</div>
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
								@endforeach
							</ul>
						</div>
						   
						<!-- Order Total -->
						{{-- <div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Order Total:</div>
								<div class="order_total_amount">${{ Cart::Subtotal() }}</div><br>
                                <div class="order_total_title">Shipping Charge:</div>
								<div class="order_total_amount">$10</div><br>
                                 <div class="order_total_title">Tax:</div>
								<div class="order_total_amount">$10</div><br><br>
                                   <div class="order_total_title">Total:</div>
								<div class="order_total_amount">$228</div>
							</div>
						</div> --}}

                            @if(Session::has('coupon'))
                            @else
                            <div class="order_total_content text-md-left" style="border: 1px solid gray; padding:20px">
							<h5>Apply Coupon Code</h5>
                            <form action="{{ route('apply.coupon')}}" method="POST">
                                @csrf
                                <div class="form-group col-lg-4" >
                                   <input type="text" name="coupon" class="form-control" placeholder="Coupon Code" id="">
                                </div>
                                 <button type="submit" class="btn btn-danger ">Apply</button>
                            </form>
							</div>
                            @endif
					</div>
					<ul class="list-group col-lg-4" style="float: right; margin-top:10px">
							  @if(Session::has('coupon'))
							       <li class="list-group-item">Subtotal :  <span style="float: right;"> $ {{ Session::get('coupon')['balance'] }}</span> </li>
							        <li class="list-group-item">Coupon : ({{   Session::get('coupon')['name'] }}) <a href="{{route('remove.coupon')}}" class="btn btn-danger btn-sm">x</a> <span style="float: right;"> $  {{ Session::get('coupon')['discount'] }} </span> </li>
							  	@else
							  	  <li class="list-group-item">Subtotal :  <span style="float: right;"> $ {{ Cart::Subtotal() }}</span> </li>
							  	@endif
							  


							  <li class="list-group-item">Shipping Charge: <span style="float: right;"> $ {{ $charge }}</span></li>
							  <li class="list-group-item">Vat :  <span style="float: right;"> 0</span></li>
							  @if(Session::has('coupon'))
							  <li class="list-group-item">Total:  <span style="float: right;"> $ {{ Session::get('coupon')['balance'] + $charge }}</span> </li>
							  @else
							       <li class="list-group-item">Total:  <span style="float: right;">$ {{ Cart::Subtotal() + $charge }} </span> </li>
							  @endif
						</ul>
				</div>
			</div>
            	
		</div>
	</div> 
           <div class="cart_buttons">
							<a href="{{route('show.cart')}}" class="button cart_button_clear">Back</a>
							<a href="{{route('payment.step')}}" class="button cart_button_checkout">Confirm Order</a>
						</div>
@endsection