@extends('layouts.app')

@section('content')
@include('pages.menubar')


      	   <div class="card pd-20  container">
         <div class="row">
            
         	<div class="col-md-6">
                  <a class="btn btn-sm btn-info my-3" href="{{route('home')}}">Back to Profile</a>
         	    <div class="card">
         	        <div class="card-header"><strong>Order</strong> Details</div>

         	        <div class="card-body">
         	    	<table class="table table-striped table-sm" cellspacing="0" width="100%">
         	    		 <tr>
         	    		 	<th>Name: </th>
         	    		 	<th>{{ $order->name }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Phone: </th>
         	    		 	<th>{{ $order->phone }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Payment Method: </th>
         	    		 	<th>{{ $order->payment_type }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Payment ID: </th>
         	    		 	<th>{{ $order->payment_id }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Total :</th>
         	    		 	<th>{{ $order->total }} $</th>
         	    		 </tr>
         	    		  <tr>
         	    		 	<th>Month : </th>
         	    		 	<th>
         	    		 		  {{ $order->month }}
         	    		 	</th>
         	    		 </tr>
         	    		  <tr>
         	    		 	<th>Date: </th>
         	    		 	<th>{{ $order->date }}</th>
         	    		 </tr>
         	    	</table>  

         	        </div>
         	    </div>
         	</div>
         	<div class="col-md-6">
                 <div class=""></div>
         	    <div class="card">
         	        <div class="card-header"><strong>Shipping</strong> Details</div>

         	        <div class="card-body">
         	    	<table class="table">
         	    		 <tr>
         	    		 	<th>Name: </th>
         	    		 	<th>{{ $shipping->ship_name }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Phone: </th>
         	    		 	<th>{{ $shipping->ship_phone }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Email: </th>
         	    		 	<th>{{ $shipping->ship_email }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Address: </th>
         	    		 	<th>{{ $shipping->ship_address }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>City :</th>
         	    		 	<th>{{ $shipping->ship_city }}</th>
         	    		 </tr>
         	    		  <tr>
         	    		 	<th>Status : </th>
         	    		 	<th>
         	    		 		    @if($order->status == 0)
         	    		 		     <span class="badge badge-warning">Pending</span>
         	    		 		    @elseif($order->status == 1)
         	    		 		    <span class="badge badge-info">Payment Accept</span>
         	    		 		    @elseif($order->status == 2) 
         	    		 		     <span class="badge badge-info">Progress </span>
         	    		 		     @elseif($order->status == 3)  
         	    		 		     <span class="badge badge-success">Delevered </span>
         	    		 		     @else
         	    		 		     <span class="badge badge-danger">Cancel </span>
         	    		 		     @endif
         	    		 	</th>
         	    		 </tr>
         	    		  
         	    	</table>  

         	        </div>
         	    </div>
         	</div>
         </div>
          
         <div class="row">
         	<div class="card pd-20 pd-sm-40 col-lg-12">
         	  <h6 class="card-body-title">Product Details </h6>
         	  <br>
         	  <div class="table-wrapper">
         	    <table  class="table display responsive nowrap">
         	      <thead>
         	        <tr>
         	          <th class="wd-15p">Product ID</th>
         	          <th class="wd-15p">Product Name</th>
         	          <th class="wd-15p">Image</th>
         	          <th class="wd-15p">Color </th>
         	          <th class="wd-15p">Size</th>
         	          <th class="wd-15p">Quantity</th>
         	          <th class="wd-15p">Unit Price</th>
         	          <th class="wd-20p">Total</th>
         	        </tr>
         	      </thead>
         	      <tbody>
         	        @foreach($details as $row)
         	        <tr>
         	          <td>{{ $row->product_code }}</td>
         	          <td>{{ $row->product_name }}</td>
         	          <td><img src="{{ URL::to($row->image_one) }}" height="50px;" width="50px;"></td>
         	          <td>{{ $row->color }}</td>
         	          <td>{{ $row->size }}</td>
         	          <td>{{ $row->quantity }}</td>
         	          <td>
         	          	{{ $row->unit_price }} $
         	          	
         	          </td>
         	          <td>
         	          {{ $row->total_price }} $
         	          	
         	          </td>
         	         
         	        </tr>
         	        @endforeach
         	      </tbody>
         	    </table>
         	  </div><!-- table-wrapper -->
         	</div><!-- card -->
         </div>
       	

       	  @if($order->status == 0)
              <a href="{{ url('admin/payment/accept/'.$order->id) }}" class="btn btn-info">Payment Accept</a><br>
              <a href="{{ url('admin/payment/cancel/'.$order->id) }}" class="btn btn-danger" id="delete">Cancel Order</a>
          @elseif($order->status == 1)
              <a href="{{ url('admin/delevery/progress/'.$order->id) }}" class="btn btn-info">Sent this order to processing</a><br>
                <a href="{{ url('admin/payment/cancel/'.$order->id) }}" class="btn btn-danger" id="delete">Cancel Order</a>
              <strong> Payment Already Checked and pass here for delevery request</strong>
          @elseif($order->status == 2)
               <a href="{{ url('admin/delevery/done/'.$order->id) }}" class="btn btn-success">Order select as delivered</a><br>
                 <a href="{{ url('admin/payment/cancel/'.$order->id) }}" class="btn btn-danger" id="delete">Cancel Order</a>
               <strong> Payment Already done your product are Delivered successfully</strong>
          @elseif($order->status == 4)
            <strong class="text-danger">This order are not valid its canceled</strong>
            @else
             <strong class="text-success">This product are succesfully delevered</strong>
            @endif


             </div>

@endsection
