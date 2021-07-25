@extends('layouts.app')

@section('content')
@include('pages.menubar')
@php
    $order = DB::table('orders')->where('user_id',Auth::id())->get();
   
@endphp
    
    

    <div class="contact_form">
        <div class="container">
            <div class="row">
               <div class="col-8 card">
                 <table class="table table-response">
                   <thead>
                     <tr>
                       <th scope="col">PaymentType</th>
                       <th scope="col">Payment ID</th>
                       <th scope="col">Amount</th>
                       <th scope="col">Date</th>
                        <th scope="col">Status Code</th>
                        <th scope="col">Status </th>
                        <th scope="col">Action</th>
                     </tr>
                   </thead>
                   <tbody>
                   @foreach ($order as $item)
                     <tr>
                       <th class="w-15">{{$item->payment_type}}</th>
                       <td>{{$item->payment_id}}</td>
                       <td>{{$item->total}}</td>
                       <td>{{$item->date}}</td>
                       <td>{{$item->status_code}}</td>
                       <td>
                       	@if($item->status == 0)
                       	 <span class="badge badge-warning">Pending</span>
                       	@elseif($item->status == 1)
                       	<span class="badge badge-info">Payment Accept</span>
                       	@elseif($item->status == 2) 
                       	 <span class="badge badge-info">Progress </span>
                       	 @elseif($item->status == 3)  
                       	 <span class="badge badge-success">Delevered </span>
                       	 @else
                       	 <span class="badge badge-danger">Cancel </span>
                       	 @endif
                       </td>
                       <td>
                         <a href="{{url('view/order/'.$item->id)}}" class="btn btn-sm btn-info">View</a>
                       </td>
                     </tr>
                   @endforeach
                   </tbody>
                 </table>
               </div>
               <div class="col-4">
                 <div class="card" style="width: 18rem;">
                    <img src="https://img.icons8.com/plasticine/100/000000/user.png" class="card-img-top" style="height: 100px; width: 90px; margin-left: 34%;" >
                  <div class="card-body">
                    <h5 class="card-title text-center"></h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="{{ route('password.change')}}"> Password Change </a></li>
                    <li class="list-group-item"><a href=""> Edit Profile </a></li>
                    <li class="list-group-item"><a href=""> Return Order </a></li>
                  </ul>
                  <div class="card-body">
                    <a class="dropdown-item" class="btn btn-danger btn-sm btn-block" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </div>
                </div>
               </div>
            </div>
        </div>
    </div>
@endsection