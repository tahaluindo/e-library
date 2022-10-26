<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{csrf_token()}}">
<meta name="base_url" content="{{asset('images/book_colection')}}">

<link rel="icon" href="{{asset('images/logo.png')}}" type="image">

<title>E-Perpus </title>

<!-- all css here -->
<link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/chosen.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

</head>

<body>

    <!-- header start -->
    <header class="header-area gray-bg clearfix" style="background-color: #BDF2D5;">
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="logo">
                            <a href="index.html">
                                <img alt="" src="{{asset('images/icon.png')}}" width="140px">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-6">
                        <div class="header-bottom-right">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li class="top-hover"><a href="/dashboard">Home</a>
                                        </li>
                                        <li class="top-hover"><a href="#">Category</a>
                                            <ul class="submenu">
                                                <li><a href="/all-book">All</a></li>
                                                @foreach (getGenre() as $genre)

                                                <li><a href="{{ route('genre', $genre->nama_genre)}}">{{$genre->nama_genre}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-currency">
                                <span class="digit">{{ Auth::user()->name }}<i class="ti-angle-down"></i></span>
                                <div class="dollar-submenu">
                                    <ul>
                                        <li><a href="/dashboard">Home</a></li>
                                        <li><a href="/favorite">Favorite</a></li>
                                        <li><a href="#">Setting</a></li>
                                        <li><a href="/history">History</a></li>
                                        <li><a href="{{route('logout')}}">Log Out</a></li>
                                    </ul>
                                </div>
                            </div>
                                <div class="header-cart">
                                    <a href="#">
                                        <div class="cart-icon">
                                            <i class="ti-shopping-cart"></i>
                                        </div>
                                    </a>
                                    <div class="shopping-cart-content" data-url="{{route('getDataCart')}}">
                                        <ul class="minicart-list">
                                        </ul>
                                        <div class="shopping-cart-total">
                                            <h4>Total : <span class="shop-total cartCount d-none"> </span></h4>
                                        </div>
                                        <div class="shopping-cart-btn">
                                            <a href="/cart">view cart</a>
                                            <a href="{{route('history')}}">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Responsive area -->
                <div class="mobile-menu-area">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="#">HOME</a></li>
                                <li><a href="#">Category</a>
                                    <ul>
                                        <li><a href="/all-book">All</a></li>
                                        @foreach (getGenre() as $genre)
                                        <li><a href="{{ route('genre', $genre->nama_genre)}}">{{$genre->nama_genre}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- End Responsive area -->
            </div>
        </div>
    </header>
    <!-- header end -->


            @yield('content')

			<!-- Footer style Start -->
			<footer class="footer-area pt-75 gray-bg-3" style="background-color: #BDF2D5;">
				<div class="footer-top gray-bg-3 pb-35" style="background-color: #BDF2D5;">
					<div class="container ">
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="footer-widget mb-40">
									<div class="footer-title mb-25">
										<h4>E-Perpus</h4>
									</div>
									<div class="footer-content">
										<ul>
											<li><a href="#">Dashborad</a></li>
											<li><a href="#">Category</a></li>
											<li><a href="#">Favorite</a></li>
											<li><a href="#">History</a></li>
											<li><a href="#">Setting</a></li>
											<li><a href="#">LogOut</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="footer-widget mb-40">
									<div class="footer-title mb-25">
										<h4>Information</h4>
									</div>
									<div class="footer-content">
										<ul>
											<li><a href="#">E-Perpus</a></li>
											<li><a href="#">Delivery Information</a></li>
											<li><a href="#">Privacy Policy</a></li>
											<li><a href="#">Terms & Conditions</a></li>
											<li><a href="#">Customer Service</a></li>
											<li><a href="#">Return Policy</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="footer-widget mb-40">
									<div class="footer-title mb-25">
										<h4>Quick Links</h4>
									</div>
									<div class="footer-content">
										<ul>
											<li><a href="#">Support Center</a></li>
											<li><a href="#">Term & Conditions</a></li>
											<li><a href="#">Shipping</a></li>
											<li><a href="#">Privacy Policy</a></li>
											<li><a href="#">Help</a></li>
											<li><a href="#">FAQS</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="footer-widget footer-widget-red footer-black-color mb-40">
									<div class="footer-title mb-25">
										<h4>Contact Us</h4>
									</div>
									<div class="footer-about">
										<p>Rogojampi, Banyuwangi, Jawa Timur, Indonesia</p>
										<div class="footer-contact mt-20">
											<ul>
												<li>(+62) 8570 7811 627</li>
												<li>(+62) 8579 0840 454</li>
											</ul>
										</div>
										<div class="footer-contact mt-20">
											<ul>
												<li>eperpus@gmail.com</li>
												<li>eperpus.id@gmail.com</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- Footer style End -->

		</div>

<script src="{{asset('assets/js/vendor/jquery-1.12.0.min.js')}}"></script>
<script src="{{asset('assets/js/popper.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/ajax-mail.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
