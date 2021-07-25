<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('public/backend/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/rickshaw/rickshaw.min.css" rel="stylesheet')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/starlight.css')}}">
    
    <link href="{{ asset('public/backend/sweetalert/sweetalert.css')}}" rel="stylesheet">
    <link href="{{ asset('public/backend/toastr/toastr.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  </head>

  <body>

   @guest

   @else
    <!-- ########## START: LEFT PANEL ########## -->
 <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
 <div class="sl-sideleft">
   <div class="input-group input-group-search">
     <input type="search" name="search" class="form-control" placeholder="Search">
     <span class="input-group-btn">
       <button class="btn"><i class="fa fa-search"></i></button>
     </span><!-- input-group-btn -->
   </div><!-- input-group -->

   <label class="sidebar-label">Navigation</label>
   <div class="sl-sideleft-menu">
     <a href="{{ url('admin/home')}}" class="sl-menu-link active">
       <div class="sl-menu-item">
         <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
         <span class="menu-item-label">Dashboard</span>
       </div><!-- menu-item -->
     </a><!-- sl-menu-link -->
     {{-- <a href="widgets.html" class="sl-menu-link">
       <div class="sl-menu-item">
         <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
         <span class="menu-item-label">Category</span>
       </div><!-- menu-item --> --}}
     </a><!-- sl-menu-link -->
     <a href="#" class="sl-menu-link">
       <div class="sl-menu-item">
         <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
         <span class="menu-item-label">Category</span>
         <i class="menu-item-arrow fa fa-angle-down"></i>
       </div><!-- menu-item -->
     </a><!-- sl-menu-link -->
     <ul class="sl-menu-sub nav flex-column">
       <li class="nav-item"><a href="{{ route('categories')}}" class="nav-link">Category</a></li>
       <li class="nav-item"><a href="{{ route('sub.categories')}}" class="nav-link">Sub-Category</a></li>
       <li class="nav-item"><a href="{{ route('brands')}}" class="nav-link">Brands</a></li>
       
     </ul>
     <a href="#" class="sl-menu-link">
       <div class="sl-menu-item">
         <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
         <span class="menu-item-label">Coupon</span>
         <i class="menu-item-arrow fa fa-angle-down"></i>
       </div><!-- menu-item -->
     </a><!-- sl-menu-link -->
     <ul class="sl-menu-sub nav flex-column">
       <li class="nav-item"><a href="{{ route('coupons') }}" class="nav-link">All Coupon</a></li>
      
     </ul>
     <a href="#" class="sl-menu-link">
       <div class="sl-menu-item">
         <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
         <span class="menu-item-label">Products</span>
         <i class="menu-item-arrow fa fa-angle-down"></i>
       </div><!-- menu-item -->
     </a><!-- sl-menu-link -->
     <ul class="sl-menu-sub nav flex-column">
       <li class="nav-item"><a href="{{ route('add.product') }}" class="nav-link">Add Product</a></li>
       <li class="nav-item"><a href="{{ route('all.product') }}" class="nav-link">All Products</a></li>
      
     </ul>
     <a href="#" class="sl-menu-link">
       <div class="sl-menu-item">
         <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
         <span class="menu-item-label">Posts</span>
         <i class="menu-item-arrow fa fa-angle-down"></i>
       </div><!-- menu-item -->
     </a><!-- sl-menu-link -->
     <ul class="sl-menu-sub nav flex-column">
      <li class="nav-item"><a href="{{ route('index.post')}}" class="nav-link">All Post</a></li>
       <li class="nav-item"><a href="{{ route('index.category')}}" class="nav-link">Post Category</a></li>
      
     </ul>
     <a href="#" class="sl-menu-link">
       <div class="sl-menu-item">
         <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
         <span class="menu-item-label">Orders</span>
         <i class="menu-item-arrow fa fa-angle-down"></i>
       </div><!-- menu-item -->
     </a><!-- sl-menu-link -->
     <ul class="sl-menu-sub nav flex-column">
       <li class="nav-item"><a href="{{ route('admin.neworders')}}" class="nav-link">New Orders</a></li>
       <li class="nav-item"><a href="{{ route('admin.paid.orders')}}" class="nav-link">Payment Completed Orders</a></li>
       <li class="nav-item"><a href="{{ route('admin.processing.orders')}}" class="nav-link">Processing Orders</a></li>
       <li class="nav-item"><a href="{{ route('admin.delivered.orders')}}" class="nav-link">Delivered Orders</a></li>
        <li class="nav-item"><a href="{{ route('admin.cancel.orders')}}" class="nav-link">Canceled Orders</a></li>
     </ul>
     <a href="mailbox.html" class="sl-menu-link">
       <div class="sl-menu-item">
         <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
         <span class="menu-item-label">Mailbox</span>
       </div><!-- menu-item -->
     </a><!-- sl-menu-link -->
     <a href="#" class="sl-menu-link">
       <div class="sl-menu-item">
         <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
         <span class="menu-item-label">Others</span>
         <i class="menu-item-arrow fa fa-angle-down"></i>
       </div><!-- menu-item -->
     </a><!-- sl-menu-link -->
     <ul class="sl-menu-sub nav flex-column">
       <li class="nav-item"><a href=" {{ route('admin.newletters') }} " class="nav-link">Newsletter</a></li>
       <li class="nav-item"><a href="{{route('admin.seo')}}" class="nav-link">SEO Setting</a></li>
       <li class="nav-item"><a href="page-signup.html" class="nav-link">Signup Page</a></li>
       <li class="nav-item"><a href="page-notfound.html" class="nav-link">404 Page Not Found</a></li>
     </ul>
   </div><!-- sl-sideleft-menu -->

   <br>
 </div><!-- sl-sideleft -->
 <!-- ########## END: LEFT PANEL ########## -->

 <!-- ########## START: HEAD PANEL ########## -->
 <div class="sl-header">
   <div class="sl-header-left">
     <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
     <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
   </div><!-- sl-header-left -->
   <div class="sl-header-right">
     <nav class="nav">
       <div class="dropdown">
         <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
           <span class="logged-name">Jane<span class="hidden-md-down"> Doe</span></span>
           <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">
         </a>
         <div class="dropdown-menu dropdown-menu-header wd-200">
           <ul class="list-unstyled user-profile-nav">
             <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
             <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
             {{-- {{ route('admin.passoword.change')}} --}}
             
             <li> <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               {{ __('Logout') }} <i class="icon ion-power"></i></a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
           </ul>
         </div><!-- dropdown-menu -->
       </div><!-- dropdown -->
     </nav>
     <div class="navicon-right">
       <a id="btnRightMenu" href="" class="pos-relative">
         <i class="icon ion-ios-bell-outline"></i>
         <!-- start: if statement -->
         <span class="square-8 bg-danger"></span>
         <!-- end: if statement -->
       </a>
     </div><!-- navicon-right -->
   </div><!-- sl-header-right -->
 </div><!-- sl-header -->
 <!-- ########## END: HEAD PANEL ########## -->

 <!-- ########## START: RIGHT PANEL ########## -->
 <div class="sl-sideright">
   <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
     <li class="nav-item">
       <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
     </li>
   </ul><!-- sidebar-tabs -->

   <!-- Tab panes -->
   <div class="tab-content">
     <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
       <div class="media-list">
         <!-- loop starts here -->
         <a href="" class="media-list-link">
           <div class="media">
             <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
             <div class="media-body">
               <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
               <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
               <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
             </div>
           </div><!-- media -->
         </a>
         <!-- loop ends here -->
         <a href="" class="media-list-link">
           <div class="media">
             <img src="../img/img4.jpg" class="wd-40 rounded-circle" alt="">
             <div class="media-body">
               <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
               <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
               <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
             </div>
           </div><!-- media -->
         </a>
         <a href="" class="media-list-link">
           <div class="media">
             <img src="../img/img7.jpg" class="wd-40 rounded-circle" alt="">
             <div class="media-body">
               <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p>
               <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
               <p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
             </div>
           </div><!-- media -->
         </a>
         <a href="" class="media-list-link">
           <div class="media">
             <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
             <div class="media-body">
               <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p>
               <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>

               <p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
             </div>
           </div><!-- media -->
         </a>
         <a href="" class="media-list-link">
           <div class="media">
             <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
             <div class="media-body">
               <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
               <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
               <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
             </div>
           </div><!-- media -->
         </a>
       </div><!-- media-list -->
       <div class="pd-15">
         <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
       </div>
     </div><!-- #messages -->

     <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
       <div class="media-list">
         <!-- loop starts here -->
         <a href="" class="media-list-link read">
           <div class="media pd-x-20 pd-y-15">
             <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
             <div class="media-body">
               <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
               <span class="tx-12">October 03, 2017 8:45am</span>
             </div>
           </div><!-- media -->
         </a>
         <!-- loop ends here -->
         <a href="" class="media-list-link read">
           <div class="media pd-x-20 pd-y-15">
             <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
             <div class="media-body">
               <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
               <span class="tx-12">October 02, 2017 12:44am</span>
             </div>
           </div><!-- media -->
         </a>
         <a href="" class="media-list-link read">
           <div class="media pd-x-20 pd-y-15">
             <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
             <div class="media-body">
               <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
               <span class="tx-12">October 01, 2017 10:20pm</span>
             </div>
           </div><!-- media -->
         </a>
         <a href="" class="media-list-link read">
           <div class="media pd-x-20 pd-y-15">
             <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
             <div class="media-body">
               <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
               <span class="tx-12">October 01, 2017 6:08pm</span>
             </div>
           </div><!-- media -->
         </a>
         <a href="" class="media-list-link read">
           <div class="media pd-x-20 pd-y-15">
             <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
             <div class="media-body">
               <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 12 others in a post.</p>
               <span class="tx-12">September 27, 2017 6:45am</span>
             </div>
           </div><!-- media -->
         </a>
         <a href="" class="media-list-link read">
           <div class="media pd-x-20 pd-y-15">
             <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
             <div class="media-body">
               <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
               <span class="tx-12">September 28, 2017 11:30pm</span>
             </div>
           </div><!-- media -->
         </a>
         <a href="" class="media-list-link read">
           <div class="media pd-x-20 pd-y-15">
             <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
             <div class="media-body">
               <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Great Pyramid</strong></p>
               <span class="tx-12">September 26, 2017 11:01am</span>
             </div>
           </div><!-- media -->
         </a>
         <a href="" class="media-list-link read">
           <div class="media pd-x-20 pd-y-15">
             <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
             <div class="media-body">
               <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
               <span class="tx-12">September 23, 2017 9:19pm</span>
             </div>
           </div><!-- media -->
         </a>
       </div><!-- media-list -->
     </div><!-- #notifications -->

   </div><!-- tab-content -->
 </div><!-- sl-sideright -->
 <!-- ########## END: RIGHT PANEL ########## --->
   @endguest

@yield('admin_content')



    
<script src="{{ asset('public/backend/lib/jquery/jquery.js')}}"></script>
<script src="{{ asset('public/backend/lib/popper.js/popper.js')}}"></script>
<script src="{{ asset('public/backend/lib/bootstrap/bootstrap.js')}}"></script>

<script src="{{ asset('public/backend/lib/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{ asset('public/backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
<script src="{{ asset('public/backend/lib/highlightjs/highlight.pack.js')}}"></script>
<script src="{{ asset('public/backend/lib/datatables/jquery.dataTables.js')}}"></script>
<script src="{{ asset('public/backend/lib/datatables-responsive/dataTables.responsive.js')}}"></script>
<script src="{{ asset('public/backend/lib/select2/js/select2.min.js')}}"></script>
<script src="{{ asset('public/backend/js/summernote-bs4.min.js')}}"></script>
<script src="{{ asset('public/backend/js/medium-editor.js')}}"></script>






{{-- Datatable --}}
<script>
  $(function(){
    'use strict';

    $('#datatable1').DataTable({
      responsive: true,
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ items/page',
      }
    });

    $('#datatable2').DataTable({
      bLengthChange: false,
      searching: false,
      responsive: true
    });

    // Select2
    $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

  });
</script>





    <script src="{{ asset('public/backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('public/backend/lib/d3/d3.js')}}"></script>
    <script src="{{ asset('public/backend/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{ asset('public/backend/lib/chart.js/Chart.js')}}"></script>
    <script src="{{ asset('public/backend/lib/Flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('public/backend/lib/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('public/backend/lib/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('public/backend/lib/flot-spline/jquery.flot.spline.js')}}"></script>

    <script src="{{ asset('public/backend/js/starlight.js')}}"></script>
    <script src="{{ asset('public/backend/js/ResizeSensor.js')}}"></script>
    <script src="{{ asset('public/backend/js/dashboard.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

    


    
  </body>
</html>
