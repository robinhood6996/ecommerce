@extends('layouts.app')

@section('content')
@include('pages.menubar')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_styles.css')}}">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@php  
	$setting=DB::table('settings')->first();
	$charge=$setting->shipping_charge;
    $cart = Cart::content();
   $stripe_key = 'pk_test_51JEUoUL1oLmFID3V3CdwUy17psaGUhbldXmD2ZlC0NzHIcFfKe0g6uRrxWSWz7Ioj0sdn4Et9UPdGf9x5XfJ5dQZ00APXyATgk';
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
									     <div class="cart_item_text"> <img src="{{ asset($row->options->image)}}" alt="{{$row->name}}" width="50px" height="50px"></div>
										</div>
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_text">{{ $row->name }}</div>
										</div>&nbsp;&nbsp;&nbsp;
										@if($row->options->color == NULL)
										@else
										<div class="cart_item_color cart_info_col">
									
											<div class="cart_item_text">
													{{ $row->options->color }}
											</div>
										</div>&nbsp;&nbsp;&nbsp;
										@endif
										@if($row->options->size == NULL)
										@else
										<div class="cart_item_color cart_info_col">
											
											<div class="cart_item_text">
													{{ $row->options->size }}
											</div>
										</div>&nbsp;&nbsp;&nbsp;
										@endif
										
										

										<div class="cart_item_quantity cart_info_col">
											
											<div class="cart_item_text">{{ $row->qty }}</div>
										</div>&nbsp;
									
										<div class="cart_item_total cart_info_col"> 
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
                        <div class="contact_form_title text-center">Pay Now</div>

                  
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif
  
                    <form 
                            role="form" 
                            action="{{ route('Payment.complete') }}" 
                            method="post" 
                            class="require-validation"
                            data-cc-on-file="false"
                            data-stripe-publishable-key="{{ 'pk_test_51JEUoUL1oLmFID3V3CdwUy17psaGUhbldXmD2ZlC0NzHIcFfKe0g6uRrxWSWz7Ioj0sdn4Et9UPdGf9x5XfJ5dQZ00APXyATgk' }}"
                            id="payment-form">
                        @csrf
  
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                                  {{-- Extra and From previous page as shipping details --}}
                                    <input type="hidden" name="shipping" value="{{$charge}}">
                                     <input type="hidden" name="vat" value="0">
                                      <input type="hidden" name="total" value="{{ Cart::subtotal() + $charge}}">
                                      <input type="hidden" name="ship_name" value="{{$data['name']}}" >
                                      <input type="hidden" name="ship_phone" value="{{$data['phone']}}" >
                                      <input type="hidden" name="ship_email" value="{{$data['email']}}" >
                                      <input type="hidden" name="ship_address" value="{{$data['address']}}" >
                                      <input type="hidden" name="ship_city" value="{{$data['city']}}" >
                                      <input type="hidden" name="payment_type" value="{{$data['payment']}}" >
                                  
                                     
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
  
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ($100)</button>
                            </div>
                        </div>
                          
                    </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="panel"></div>
    </div>
 
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
<script type="text/javascript">
$(function() {
   
    var $form         = $(".require-validation");
   
    $('form.require-validation').bind('submit', function(e) {
        var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
  
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
   
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
               
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
   
});
</script>


@endsection
