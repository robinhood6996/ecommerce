@extends('admin.admin_layouts')

@section('admin_content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">

    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">Seo setting</span>
      </nav>
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Seo Setting Update</h6>
          <form action="{{ route('update.seo' )}}" method="post" enctype="multipart/form-data">
          	@csrf
       
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Meta Title <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="meta_title" value="{{$seo->meta_title}}" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Meta Author:<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="meta_author" value=" {{$seo->meta_author}}" >
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-12">
              	<div class="form-group">
                  <label class="form-control-label">Meta Tag<span class="tx-danger">*</span></label>
                   <textarea class="form-control" id="" name="meta_tag">
                   	  {{$seo->meta_tag}}
                   </textarea>
                </div>	
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                <label class="form-control-label">Meta Description<span class="tx-danger">*</span></label>
                 <textarea class="form-control" id="" name="meta_description">
                       {{$seo->meta_description}}
                 </textarea>
              </div>	
            </div>

               <div class="col-lg-12">
                <div class="form-group">
                <label class="form-control-label">Google Analytics<span class="tx-danger">*</span></label>
                 <textarea class="form-control" id="" name="google_analytics">
                       {{$seo->google_analytics}}
                 </textarea>
              </div>	
            </div>


               <div class="col-lg-12">
                <div class="form-group">
                <label class="form-control-label">Bing Analytics<span class="tx-danger">*</span></label>
                 <textarea class="form-control" id="" name="bing_analytics" >
                     {{$seo->bing_analytics}}
                 </textarea>
                 <input type="hidden" name="id" value="{{$seo->id}}">
              </div>	
            </div>
            </div><!-- row -->
            </div>
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Update </button>
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
