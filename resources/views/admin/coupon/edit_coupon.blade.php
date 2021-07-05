@extends('admin.admin_layouts')

@section('admin_content')

  <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Starlight</a>
      <a class="breadcrumb-item" href="index.html">Tables</a>
      <span class="breadcrumb-item active">Data Table</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Coupon Update</h5>
   
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Coupon Update</h6>
         @if($errors->any())
           <div class="alert alert-danger">
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
           @endif

           <form method="post" action="{{ url('update/coupon/'.$coupon->id)}}">
            @csrf
        <div class="modal-body">
          <div class="form-group">
           <label for="exampleInputEmail1">Coupon Code</label>
            <input type="text" class="form-control" value="{{$coupon->coupon}}" name="coupon">
           </div>

           <div class="form-group">
            <label for="exampleInputEmail1">Coupon Discount (%)</label>
             <input type="text" class="form-control" value="{{$coupon->discount}}" name="discount">
            </div>

           </div>
           <div class="modal-footer">
           <button type="submit" class="btn btn-primary">Update</button>
           </div>
             </div>
              </form>

        <div class="table-wrapper">
          

      </div><!-- card -->
    </div><!-- sl-pagebody -->


@endsection