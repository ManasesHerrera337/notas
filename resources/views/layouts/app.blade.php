<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="csrf-token" content="{{ CSRF_TOKEN() }}">
      <title>{{ config('app.name', 'Notas CEF') }}</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
      <link href="{{ asset('assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('assets/libs/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/charts/chartist-bundle/chartist.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/charts/morris-bundle/morris.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/charts/c3charts/c3.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
      <!-- Alerts -->
      <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-confirm-master/css/jquery-confirm.css') }}">
    
  
      @yield('styles')
      
  </head>

  <body>
    
      <!-- ============================================================== -->
      <!-- main wrapper -->
      <!-- ============================================================== -->
      <div class="dashboard-main-wrapper">
          <!-- ============================================================== -->
          <!-- navbar -->
          @include('layouts.app-sidebar')
          <!-- end left sidebar -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- wrapper  -->
          <!-- ============================================================== -->
          <div class="dashboard-wrapper">


            @yield('content')

              <!-- ============================================================== -->
              <!-- footer -->
              <!-- ============================================================== -->
              <div class="footer">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              Copyright © <?php echo date('Y'); ?>. All rights reserved. </a>
                          </div>
                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="text-md-right footer-links d-none d-sm-block">
                                  <!-- <a href="javascript: void(0);">About</a> -->
                                  <!-- <a href="javascript: void(0);">Support</a> -->
                                  <!-- <a href="javascript: void(0);">Contact Us</a> -->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ============================================================== -->
              <!-- end footer -->
              <!-- ============================================================== -->
          </div>
          <!-- ============================================================== -->
          <!-- end wrapper  -->
          <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- end main wrapper  -->
      <!-- ============================================================== -->


  


    <!-- Optional JavaScript -->
      <!-- jquery 3.3.1 -->
      <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
      <!-- bootstap bundle js -->
      <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
      <!-- slimscroll js -->
      <script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
      <!-- main js -->
      <script src="{{ asset('assets/libs/js/main-js.js') }}"></script>
      <!-- Alerts -->
      <script src="{{ asset('assets/vendor/jquery-confirm-master/js/jquery-confirm.js') }}"></script>
      <!-- Alertas grobales -->
      <script src="{{ asset('/js/alerts.js') }}"></script>
     

      @yield('scripts')
  </body>
 
</html>