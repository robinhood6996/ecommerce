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
        <h5>Category Table</h5>
   
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Category List</h6>
        <div>
            <a href="#" class="btn btn-sm btn-warning mb-2" style="float: right;" data-toggle="modal" data-target="#exampleModal"> Add New</a>
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
                <th class="wd-15p">ID</th>
                <th class="wd-15p">category_name_en</th>
                <th class="wd-20p">category_name_bn</th>
                <th class="wd-20p">Action</th>
             
              </tr>
            </thead>
            <tbody>
            @foreach($category as $row)
              <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->category_name_en }}</td>
                <td>{{ $row->category_name_bn }}</td>
                <td>
                    <a href="{{ URL::to('edit/post/category/'.$row->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                    <a href=" {{ URL::to('delete/post/category/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                </td>
                </td>
               
              </tr>
              @endforeach   
            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->
    </div><!-- sl-pagebody -->


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
                 <form method="post" action="{{ route('store.post.category')}}">
                     @csrf
                 <div class="modal-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Category Name En</label>
                     <input type="text" class="form-control" placeholder="Category Name English" name="category_name_en">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name BN</label>
                         <input type="text" class="form-control"placeholder="Category Name Bangla" name="category_name_bn">
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                      </div>
                       </form>
    </div>
  </div>
@endsection