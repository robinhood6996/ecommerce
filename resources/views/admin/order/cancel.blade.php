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
        <h5>Orders Table</h5>

      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Canceled Orders</h6>
        <div>
            <a href="#" class="btn btn-sm btn-warning mb-2" style="float: right;" data-toggle="modal" data-target="#exampleModal">demo</a>
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
                {{-- <th class="wd-15p">ID</th> --}}
                <th class="wd-15p">Payment Type</th>
                <th class="wd-15p">Transaction ID</th>
                 <th class="wd-20p">Subtotal</th>
                <th class="wd-20p">Shipping</th>
                <th class="wd-20p">Total</th>
                 <th class="wd-20p">Date</th>
                 <th class="wd-20p">Status</th>
                <th class="wd-20p">Action</th>

              </tr>
            </thead>
            <tbody>
            @foreach ($canceled_orders as $row)
              <tr>
                {{-- <td> {{ $row->id }}  </td> --}}
                <td> {{ $row->payment_type }}  </td>
                <td> {{ $row->bln_transaction }}  </td>
                <td> ${{ $row->subtotal }}  </td>
                <td> ${{ $row->shipping }}  </td>
                <td> ${{ $row->total }}  </td>
                <td> {{ $row->date }}  </td>
                <td> <span class="badge badge-error">Canceled</span>  </td>
                <td>
                    <a href="{{ URL::to('admin/view/order/'.$row->id) }}" class="btn btn-sm btn-info">View</a>
                    {{-- <a href=" {{ URL::to('delete/coupon/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a> --}}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->
    </div><!-- sl-pagebody -->

@endsection