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
        <h5>Newsletter Table</h5>

      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Newsletter List</h6>
        <div>
            <a href="#" class="btn btn-sm btn-warning mb-2" style="float: right;" id="delete">All Delete</a>
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
                <th class="wd-15p">email</th>
                <th class="wd-15p">Registerd At</th>
                <th class="wd-20p">Action</th>

              </tr>
            </thead>
            <tbody>
            @foreach ($newsletter as $row)
              <tr>
                <td><input type="checkbox"> {{ $row->id }}  </td>
                <td> {{ $row->email }}  </td>
                <td> {{ \Carbon\Carbon::parse($row->created_at)->diffForhumans()  }}  </td>
                <td>
 
                    <a href=" {{ URL::to('delete/sub/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->
    </div><!-- sl-pagebody -->


@endsection