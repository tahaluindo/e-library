<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image">


    <title>E-Perpus </title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('vendors/fonts/dropify.ttf')}}">
    <link rel="stylesheet" href="{{ asset('vendors/fonts/dropify.woff')}}">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">


    <!-- bootstrap-progressbar -->
    <link href="{{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <!-- Dropify -->
    <link href="{{ asset('vendors/dropify/dropify.js') }}" rel="stylesheet">
    <link href="{{ asset('vendors/dropify/dropify.min.css') }}" rel="stylesheet">



    <!-- Dropify -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">

<div class="container body">
    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="/home" class="site_title">
                    <img src="{{ asset('images/logo.png') }}" alt="" width="30px" class="mx-auto">
                    <span style="font-family: poppins"> - Perpus</span>
                </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
                <div class="profile_pic">
                <img src="{{asset('images/user.svg')}}" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
                </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" >
                <div class="menu_section">
                <h3>General</h3>
                    <ul class="nav side-menu">
                        <li>
                            <a href="/home">
                                <i class="fa fa-home"></i> Dashboard
                            </a>
                        </li>
                        <li>
                            <a>
                                <i class="fa fa-edit"></i> Data
                                <span class="fa fa-chevron-down"></span>
                            </a>
                            <ul class="nav child_menu">
                                <li><a href="/datagenre">Data Genre</a></li>
                                <li><a href="/datauser">Data User</a></li>
                                <li><a href="/databuku">Data Buku</a></li>
                            </ul>
                        </li>
                        <li>
                            <a>
                                <i class="fa fa-money"></i> Transaksi
                                <span class="fa fa-chevron-down"></span>
                            </a>
                            <ul class="nav child_menu">
                                <li><a href="{{route('admin.transaksi')}}">Transaction</a></li>
                                <li><a href="{{route('form-transaksi')}}">Tambah Transaksi</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('Online-Book')}}">
                                <i class="fa fa-book"></i> Buku Online
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /sidebar menu -->
        </div>
    </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="{{asset('images/user.svg')}}" alt="">{{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="#">Profile</a>
                        <a class="dropdown-item"  href="#">Settings</a>
                        <a class="dropdown-item"  href="#">Help</a>
                        <a class="dropdown-item"  href="/logout">Logout</a>
                        {{--  <form action="/logout" method="post">
                            @csrf
                            <button class="dropdown-item btn btn-light" >
                                <i class="fa fa-sign-out pull-right"></i> Log Out
                            </button>
                        </form>  --}}
                    </div>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

@yield('content')


    </div>
</div>


<!-- jQuery -->
<script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset('vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset('vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Dropify -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Flot plugins -->
<script src="{{asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- Datatables -->
<script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }} "></script>
<script src="{{ asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }} "></script>
<script src="{{ asset('vendors/jszip/dist/jszip.min.js') }} "></script>
<script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js') }} "></script>
<script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js') }} "></script>
<!-- Dropify -->
<script src="{{ asset('vendors/dropify/dropify.js') }} "></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('build/js/custom.min.js')}}"></script>

@yield('script')

</body>
</html>
