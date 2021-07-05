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
        <h5>Post Category Update</h5>
   
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Post Category Update</h6>
         @if($errors->any())
           <div class="alert alert-danger">
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
           @endif

           <form method="post" action="{{ url('update/post/category/'.$category->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">

          <div class="form-group">
           <label for="exampleInputEmail1">Category Name English</label>
            <input type="text" class="form-control" value="{{$category->category_name_en}}" name="category_name_en" >
           </div>

           <div class="form-group">
            <label for="exampleInputEmail1">Category Name English</label>
             <input type="text" class="form-control" value="{{$category->category_name_bn}}" name="category_name_bn" >
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