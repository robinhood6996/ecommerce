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
        <h5>Products Table</h5>
   
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Products List</h6>
        <div>
            <a href="{{ route('add.product' )}}" class="btn btn-sm btn-warning mb-2" style="float: right;"> Add New</a>
        </div>
         @if($errors->any())
           <div class="alert alert-danger">
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
           @endif
        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">Product ID</th>
                <th class="wd-15p">Product Name</th>
                <th class="wd-15p">Product Image</th>
                <th class="wd-20p">Category</th>
                <th class="wd-20p">Brand</th>
                <th class="wd-20p">Status</th>
                <th class="wd-20p">Date</th>
                <th class="wd-20p">Action</th>
             
              </tr>
            </thead>
            <tbody>
            @foreach($products as $row)
              <tr>
                <td>{{ $row->product_code }}</td>
                <td>{{ $row->product_name }}</td>
                <td> <img src="{{ URL::to($row->image_one) }}" height='80px' alt=""> </td>
                <td>{{ $row->category_name }}</td>
                <td>{{ $row->brand_name }}</td>
                <td>
                   @if ($row->status == 1)
                       <span class="badge badge-success">Active</span>
                    @else
                       <span class="badge badge-danger">Inactive</span>
                   @endif
                </td>
                <td>{{ $row->created_at }}</td>
                <td>
                    <a href="{{ URL::to('edit/product/'.$row->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                    <a href=" {{ URL::to('delete/product/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                    <a href="{{ URL::to('view/product/'.$row->id) }}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                    @if ($row->status == 1)
                    <a href=" {{ URL::to('inactive/product/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-thumbs-down" title="Inactive"></i></a>
                    @else
                    <a href=" {{ URL::to('active/product/'.$row->id) }}" class="btn btn-sm btn-success" id="delete"><i class="fa fa-thumbs-up" title="Active"></i></a>
                    @endif
                </td>
                </td>
               
              </tr>
              @endforeach   
            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->
    </div><!-- sl-pagebody -->
@endsection