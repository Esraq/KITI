<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KITI</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
	<!-- BOOTSTRAP STYLES-->
  <link href="{{url('/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{url('/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{url('/assets/css/custom.css')}}" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>



   <style>
* {
  box-sizing: border-box;
}
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}
#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}
#myTable tr {
  border-bottom: 1px solid #ddd;
}
#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin_dashboard">KITI</a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> {{ Auth::user()->name }}&nbsp <a href="../logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">


           
                  
                <li>
                        <a  href="#"><i class="fa fa-desktop fa-3x"></i>Robot</a>

                        <ul class="nav nav-second-level">
                        <li>
                                <a href="{{url('/location')}}">Robot Location</a>
                            </li>

                            <li>
                                <a href="{{url('/control_panel')}}">Control Panel</a>
                            </li>
                           </ul>

                           <li>



                    <li>
                        <a  href="#"><i class="fa fa-dashboard fa-3x"></i>Order</a>
                        <ul class="nav nav-second-level">


                            <li>
                                <a href="{{url('/pending_order')}}">Pending Order</a>
                            </li>


                            <li>
                                <a href="{{url('/admin_order_accept_list')}}">Accepted Order</a>
                            </li>

                            <li>
                                <a href="{{url('/admin_order_cancel_list')}}">Cancelled Order</a>
                            </li>


                            </ul>
                    </li>


                 
                       <li>

                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>Settings<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <li>
                                        <a href="{{url('/change-password')}}">Change Password</a>
                                    </li>

                                    <li>
                                        <a href="/user_list">User List</a>
                                    </li>

                                   

                       


                                </ul>

                            </li>
                        </ul>
                      </li>
                  <li  >
                    </li>


                     




            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                    @yield('content')

                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />

    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->

    <script src="{{asset('/assets/js/jquery-1.10.2.js')}}"></script>

      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{asset('/assets/js/jquery.metisMenu.js')}}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{asset('/assets/js/custom.js')}}"></script>


</body>
</html>