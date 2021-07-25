@extends('layouts.app')

@section('content')
@include('pages.menubar')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_styles.css')}}">
@php  
	$setting=DB::table('settings')->first();
	$charge=$setting->shipping_charge;

@endphp
    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 "  style="border-right: 1px solid grey; padding: 20px;">
                    <div class="cart_container">
                    	<div class="contact_form_title text-center">Cart Products</div>
						<div class="cart_items">
							<ul class="cart_list">
							@foreach($cart as $row)
								<li class="cart_item clearfix">
								
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Name</div>
											<div class="cart_item_text">{{ $row->name }}</div>
										</div>
										@if($row->options->color == NULL)
										@else
										<div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Color</div>
											<div class="cart_item_text">
													{{ $row->options->color }}
											</div>
										</div>
										@endif
										@if($row->options->size == NULL)
										@else
										<div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Size</div>
											<div class="cart_item_text">
													{{ $row->options->size }}
											</div>
										</div>
										@endif
										
										

										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Quantity</div>
											{{ $row->qty }}
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Price</div>
											<div class="cart_item_text">${{ $row->price }}</div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Total</div>
											<div class="cart_item_text">${{ $row->price * $row->qty }}</div>
										</div>
										
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						   <br><br><hr>
					
						<ul class="list-group col-lg-8" >
							  @if(Session::has('coupon'))
							       <li class="list-group-item">Subtotal :  <span style="float: right;"> $ {{ Session::get('coupon')['balance'] }}</span> </li>
							        <li class="list-group-item">Coupon : ({{   Session::get('coupon')['name'] }})  <span style="float: right;"> $  {{ Session::get('coupon')['discount'] }} </span> </li>
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

                 <div class="col-lg-5 " style=" padding: 20px;">
                    <div class="contact_form_container">
                        <div class="contact_form_title text-center">Shipping Address</div>

                        <form action="{{ route('payment.process') }}" id="contact_form" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name </label>
                                <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Full Name " name="name" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone </label>
                                <input type="text" class="form-control " name="phone"  aria-describedby="emailHelp" placeholder="Phone "  required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email </label>
                                <input type="text" class="form-control " name="email"   aria-describedby="emailHelp" placeholder="Email " required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="address" name="address" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">City</label>
                                <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="city" name="city" required="">
                            </div>
                            <div class="contact_form_title text-center">Payment By</div>
                           <div class="form-group">
                                <ul class="logos_list " >
                                            <li><input type="radio" name="payment" value="stripe"> <img src="{{ asset('public/frontend/images/mastercard.png') }}" style="width: 20px; height: 20px;"></li>
                                            <li><input type="radio" name="payment" value="paypal"> <img src="{{ asset('public/frontend/images/paypal.png') }}" style="width: 40px;"></li>
                                             <li><input type="radio" name="payment" value="ideal"> <img src="{{ asset('public/frontend/images/mollie.png') }}" style="width: 20px; height: 20px;"></li>
                                 </ul>
                            </div><br>
                            <div class="contact_form_button">
                                <button type="submit" class="btn btn-info">Pay Now</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="panel"></div>
    </div>

@endsection
{{-- $data = array();
            $data['user_id'] = AUth::id();
            $data['payment_id'] = $charge->payment_method;
            $data['paying_ammount'] = $charge->ammount;
            $data['bln_transaction'] =  $charge->balance_transaction;
            $data['stripe_order_id'] =  $charge->metadata->order_id;
            $data['shipping'] = $request->shipping;
            $data['vat']  = $request->vat;
            $data['total'] = $request->total;
            if (Session::has('coupon')) {
                $data['subtotal'] = Session::get('coupon')['balance'];
            } else {
                $data['subtotal'] = Cart::Subtotal();
            } --}}
