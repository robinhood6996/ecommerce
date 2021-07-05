@extends('admin.admin_layouts')

@section('admin_content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">

    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">Product Section</span>
      </nav>
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">New Product Add</h6>
          <div>
           <a href="{{ route('all.product') }}" class="btn btn-success btn-sm" style="float: right;">All Product</a>
          </div>
          <p class="mg-b-20 mg-sm-b-30">New product add form</p>
          <form action="{{ route('store.product')}}" method="post" enctype="multipart/form-data">
          	@csrf
       
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_name" readonly value="{{ $product->product_name }}" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_code" readonly value="{{ $product->product_code }}" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Quantity <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_quantity" readonly value="{{ $product->product_quantity }}" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" name="subcategory_id">
                    <option value="{{ $product->category_name }}" selected aria-readonly="true">{{ $product->category_name }}</option>
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" name="subcategory_id">
                    <option value="{{ $product->subcategory_name }}" selected aria-readonly="true">{{ $product->subcategory_name }}</option>
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" name="subcategory_id">
                    <option value="{{ $product->brand_name }}" selected aria-readonly="true">{{ $product->brand_name }}</option>
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label><br>
                  <input class="form-control" type="text" name="product_size" id="size" data-role="tagsinput" value="{{ $product->product_size }}" readonly>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label><br>
                  <input class="form-control lg-4" type="text" name="product_color" data-role="tagsinput" id="color" value="{{ $product->product_color }}" readonly>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Selling Price <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="selling_price"  placeholder="Selling Price" value="{{ $product->selling_price }}" readonly>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
              	<div class="form-group">
                  <label class="form-control-label">Product Details<span class="tx-danger">*</span></label>
                   <textarea class="form-control" id="summernote" name="product_details" readonly>
                    {{ $product->product_details }}
                   </textarea>
                </div>	
              </div>
              <div class="col-lg-12">
              	<div class="form-group">
                  <label class="form-control-label">Video Link<span class="tx-danger">*</span></label>
                   <input class="form-control" placeholder="video link" name="video_link" value="{{ $product->video_link }}" readonly>
                </div>	
              </div>

              <div class="col-lg-4">
              	<label>Image One (Main Thumbnail)<span class="tx-danger">*</span></label>
              	<label class="custom-file">
      				  {{-- <input type="file" id="file" class="custom-file-input" name="image_one" onchange="readURL(this);" required="" accept="image"> --}}
      				  
      				  <img src="{{ URL::to($product->image_one) }}" style="height: 100px; width:100px;">
      				</label>
              </div>
              <div class="col-lg-4">
              	<label>Image Two <span class="tx-danger">*</span></label>
              	<label class="custom-file">
                    <img src="{{ URL::to($product->image_two) }}" style="height: 100px; width:100px;">
      				</label>
              </div>
              <div class="col-lg-4">
              	<label>Image Three <span class="tx-danger">*</span></label>
              	<label class="custom-file">
                    <img src="{{ URL::to($product->image_three) }}" style="height: 100px; width:100px;">
      				</label>
              </div>
            </div><!-- row -->
            <br><hr>
            <div class="row">
            	<div class="col-lg-4">
					@if( $product->main_slider == 1)
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-warning">Inactive</span>
                    @endif
					  <span>Main Slider</span>
            	</div>
                <div class="col-lg-4">
					@if( $product->hot_deal == 1)
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-warning">Inactive</span>
                    @endif
					  <span>Hot Deal</span>
            	</div>
                <div class="col-lg-4">
					@if( $product->best_rated == 1)
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-warning">Inactive</span>
                    @endif
					  <span>Best Rated</span>
            	</div>
                <div class="col-lg-4">
					@if( $product->trend == 1)
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-warning">Inactive</span>
                    @endif
					  <span>Trend Product</span>
					</label>
            	</div>
            	<div class="col-lg-4">
					@if( $product->mid_slider == 1)
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-warning">Inactive</span>
                    @endif
					  <span>Mid Slider</span>
					</label>
            	</div>
                <div class="col-lg-4">
					@if( $product->hot_new == 1)
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-warning">Inactive</span>
                    @endif
      					  <span>Hot New</span>
      					</label>
            	</div>

                <div class="col-lg-4">
					@if( $product->buyone_getone == 1)
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-warning">Inactive</span>
                    @endif
                  <span>Buy One Get One</span>
                </label>
              </div>

            </div>

            <br><br><hr>
            
          </div><!-- form-layout -->
          </form>
        </div><!-- card -->
       
      </div><!-- sl-pagebody --> 
    </div><!-- sl-mainpanel -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>


<script type="text/javascript">
	  $(document).ready(function() {
         $('select[name="category_id"]').on('change', function(){
             var category_id = $(this).val();
             if(category_id) {
                 $.ajax({
                     url: "{{  url('/get/subcategory/') }}/"+category_id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                        var d =$('select[name="subcategory_id"]').empty();
                           $.each(data, function(key, value){

                               $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name + '</option>');

                           });
  
                     },
                    
                 });
             } else {
                 alert('danger');
             }

         });
     });

</script>


<script type="text/javascript">
	function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
<script type="text/javascript">
	function readURL1(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#two')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
<script type="text/javascript">
	function readURL2(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#three')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
<script>
  $(document).ready(function() {
  $('#summernote').summernote();
});
</script>

@endsection
