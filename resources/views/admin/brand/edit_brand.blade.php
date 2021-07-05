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
        <h5>Brand Update</h5>
   
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Brand Update</h6>
         @if($errors->any())
           <div class="alert alert-danger">
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
           @endif

           <form method="post" action="{{ url('update/brand/'.$brand->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
          <div class="form-group">
           <label for="exampleInputEmail1">Category</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$brand->brand_name}}" name="brand_name" required>
           </div>
           <div class="form-group">
            <label for="exampleInputEmail1">Brand Image</label>
             <input type="file" class="form-control"  name="brand_logo">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Old Image</label>
                <img src="{{ URL::to($brand->brand_logo)}}" height="60px" width="100px" alt="">
                 <input type="hidden" class="form-control" value="{{$brand->brand_logo}}" name="old_logo">
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