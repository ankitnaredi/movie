<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{asset('/public/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('/public/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('/public/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('/public/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('/public/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('/public/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('/public/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('/public/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('/public/css/vertical-layout-light/style.css')}}">
  <link rel="stylesheet" href="{{asset('/public/css/fontawesome/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('/public/css/custom.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('/public/images/favicon.png')}}" />

	<title>@yield('title')</title>



</head>
<body>
    <div class="container-scroller">
    	 @include('layouts.admin.top')
         <div class="container-fluid page-body-wrapper">
            	@include('layouts.admin.sidebar')
                <div class="main-panel">
        			<div class="content-wrapper">
              @if(Session::has('message'))
                <div class="successmsg">
                    <h4>{{ Session::get('message') }}</h4>
                </div>
              
            @endif
                    	@yield('content')
                    </div>
                    <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
          </div>
        </footer>
                </div>
         </div>
    </div>
      <!-- plugins:js -->
	  <script src="{{asset('public/vendors/js/vendor.bundle.base.js')}}"></script>
      <script src="{{asset('public/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  	  <script src="{{asset('public/vendors/progressbar.js/progressbar.min.js')}}"></script>
      <!-- endinject -->
      <script src="{{asset('public/js/dashboard.js')}}"></script>
      <script src="{{asset('public/js/common.js')}}"></script>
</body>
</html>
