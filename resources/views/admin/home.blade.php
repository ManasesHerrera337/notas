@extends('layouts.app')

@section('content')



    <!-- content -->
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
           
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">

            
                <div class="row">
            
                    <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Recent Orders</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Image</th>
                                                <th class="border-0">Product Name</th>
                                                <th class="border-0">Product Id</th>
                                                <th class="border-0">Quantity</th>
                                                <th class="border-0">Price</th>
                                                <th class="border-0">Order Time</th>
                                                <th class="border-0">Customer</th>
                                                <th class="border-0">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="m-r-10"><img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                                                </td>
                                                <td>Product #1 </td>
                                                <td>id000001 </td>
                                                <td>20</td>
                                                <td>$80.00</td>
                                                <td>27-08-2018 01:22:12</td>
                                                <td>Patricia J. King </td>
                                                <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <div class="m-r-10"><img src="assets/images/product-pic-2.jpg" alt="user" class="rounded" width="45"></div>
                                                </td>
                                                <td>Product #2 </td>
                                                <td>id000002 </td>
                                                <td>12</td>
                                                <td>$180.00</td>
                                                <td>25-08-2018 21:12:56</td>
                                                <td>Rachel J. Wicker </td>
                                                <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <div class="m-r-10"><img src="assets/images/product-pic-3.jpg" alt="user" class="rounded" width="45"></div>
                                                </td>
                                                <td>Product #3 </td>
                                                <td>id000003 </td>
                                                <td>23</td>
                                                <td>$820.00</td>
                                                <td>24-08-2018 14:12:77</td>
                                                <td>Michael K. Ledford </td>
                                                <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <div class="m-r-10"><img src="assets/images/product-pic-4.jpg" alt="user" class="rounded" width="45"></div>
                                                </td>
                                                <td>Product #4 </td>
                                                <td>id000004 </td>
                                                <td>34</td>
                                                <td>$340.00</td>
                                                <td>23-08-2018 09:12:35</td>
                                                <td>Michael K. Ledford </td>
                                                <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                            </tr>
                                            <tr>
                                                <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end recent orders  -->
                </div>
                <div class="row">
            
                    <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Recent Orders</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Image</th>
                                                <th class="border-0">Product Name</th>
                                                <th class="border-0">Product Id</th>
                                                <th class="border-0">Quantity</th>
                                                <th class="border-0">Price</th>
                                                <th class="border-0">Order Time</th>
                                                <th class="border-0">Customer</th>
                                                <th class="border-0">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="m-r-10"><img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                                                </td>
                                                <td>Product #1 </td>
                                                <td>id000001 </td>
                                                <td>20</td>
                                                <td>$80.00</td>
                                                <td>27-08-2018 01:22:12</td>
                                                <td>Patricia J. King </td>
                                                <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <div class="m-r-10"><img src="assets/images/product-pic-2.jpg" alt="user" class="rounded" width="45"></div>
                                                </td>
                                                <td>Product #2 </td>
                                                <td>id000002 </td>
                                                <td>12</td>
                                                <td>$180.00</td>
                                                <td>25-08-2018 21:12:56</td>
                                                <td>Rachel J. Wicker </td>
                                                <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <div class="m-r-10"><img src="assets/images/product-pic-3.jpg" alt="user" class="rounded" width="45"></div>
                                                </td>
                                                <td>Product #3 </td>
                                                <td>id000003 </td>
                                                <td>23</td>
                                                <td>$820.00</td>
                                                <td>24-08-2018 14:12:77</td>
                                                <td>Michael K. Ledford </td>
                                                <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <div class="m-r-10"><img src="assets/images/product-pic-4.jpg" alt="user" class="rounded" width="45"></div>
                                                </td>
                                                <td>Product #4 </td>
                                                <td>id000004 </td>
                                                <td>34</td>
                                                <td>$340.00</td>
                                                <td>23-08-2018 09:12:35</td>
                                                <td>Michael K. Ledford </td>
                                                <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                            </tr>
                                            <tr>
                                                <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end recent orders  -->
                </div>
                
                

              
                
        </div>
    </div>
    <!--end content -->

@endsection


@section('scripts')
    <!-- chart chartist js -->
      <!-- <script src="{{ asset('assets/vendor/charts/chartist-bundle/chartist.min.js') }}"></script> -->
      
      <!-- sparkline js -->
     <!--  <script src="{{ asset('assets/vendor/charts/sparkline/jquery.sparkline.js') }}"></script> -->
      <!-- morris js -->
      <!-- <script src="{{ asset('assets/vendor/charts/morris-bundle/raphael.min.js') }}"></script> -->
      <!-- <script src="{{ asset('assets/vendor/charts/morris-bundle/morris.js') }}"></script> -->
      <!-- chart c3 js -->
      <!-- <script src="{{ asset('assets/vendor/charts/c3charts/c3.min.js') }}"></script> -->
      <!-- <script src="{{ asset('assets/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script> -->
     <!--  <script src="{{ asset('assets/vendor/charts/c3charts/C3chartjs.js') }}"></script> -->
     <!--  <script src="{{ asset('assets/libs/js/dashboard-ecommerce.js') }}"></script> -->
@endsection
