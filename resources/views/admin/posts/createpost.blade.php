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
          <h6 class="card-body-title">New Post Add</h6>
          <div>
           <a href="" class="btn btn-success btn-sm" style="float: right;">All Post</a>
          </div>
          <p class="mg-b-20 mg-sm-b-30">New Post Add Form</p>
          <form action="{{ route('store.post' )}}" method="post" enctype="multipart/form-data">
          	@csrf
       
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Post Title English: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title_en"  >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Post Title Bangla :<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title_bn"  >
                </div>
              </div><!-- col-4 -->
             
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose Category" name="category_id">
                    <option label="Choose Category"></option>
                    @foreach($category as $row)
                    <option value="{{ $row->id }}">{{ $row->category_name_en }}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
              	<div class="form-group">
                  <label class="form-control-label">Description English<span class="tx-danger">*</span></label>
                   <textarea class="form-control" id="summernote" name="details_en">
                   	
                   </textarea>
                </div>	
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                <label class="form-control-label">Description Bangla<span class="tx-danger">*</span></label>
                 <textarea class="form-control" id="summernote2" name="details_bn">
                     
                 </textarea>
              </div>	
            </div>

              <div class="col-lg-6">
              	<label>Image One (Main Thumbnail)<span class="tx-danger">*</span></label>
              	<label class="custom-file">
      				  <input type="file" id="file" class="custom-file-input" name="image" onchange="readURL(this);" required="" accept="image">
      				  <span class="custom-file-control"></span>
      				</label>
                      <img src="#" id="one">
              </div>
            </div><!-- row -->
            <br><hr>
            </div>
            <br><br><hr>
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Submit </button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>
        </div><!-- card -->
       
      </div><!-- sl-pagebody --> 
    </div><!-- sl-mainpanel -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script type="text/javascript">
	function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(200)
                  .height(150);
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
<script>
    $(document).ready(function() {
    $('#summernote2').summernote();
  });
  </script>

@endsection
