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
        <h6 class="card-body-title">Post List</h6>
        <div>
            <a href="{{ url('admin/add/post' )}}" class="btn btn-sm btn-warning mb-2" style="float: right;"> Add New</a>
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
                <th class="wd-15p">Post ID</th>
                <th class="wd-15p">Title EN</th>
                <th class="wd-20p">Tibel BN</th>
                <th class="wd-15p">Category</th>
                <th class="wd-15p">Thumbnail</th>
                <th class="wd-20p">Description</th>
                <th class="wd-20p">Date</th>
                <th class="wd-20p">Action</th>
             
              </tr>
            </thead>
            <tbody>
            @foreach($posts as $row)
              <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->title_en }}</td>
                <td>{{ $row->title_bn }}</td>
                <td>{{ $row->category_name_en }}</td>
                <td> <img src="{{ URL::to($row->image) }}" height='80px' alt=""> </td>
                <td>{{ $row->details_en }}</td>
                <td>{{ $row->created_at }}</td>
                <td>
                    <a href="{{ URL::to('edit/post/'.$row->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                    <a href=" {{ URL::to('delete/post/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                    <a href="{{ URL::to('view/post/'.$row->id) }}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
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