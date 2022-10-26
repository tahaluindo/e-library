@extends('user.layouts.top-bar')

@section('content')

<!-- Content -->

<div class="container">
    <!-- Shop Page Area Start -->
    <div class="blog-widget ptb-50" >
        <div class="blog-search">
            <form class="news-form" action="/search" method="GET" enctype="">
                @csrf
                <input type="search" name="search" placeholder="Search.....">
                <button type="submit">
                    <i class="ion-ios-search-strong"></i>
                </button>
            </form>
        </div>
    </div>
        <div class="shop-page-area pb-100">
            <div class="container">
                <h2>Silahkan Pilih Buku </h2>
                <div class="row flex-row-reverse">
                    <div class="col-lg-12">
                        <div class="grid-list-product-wrapper">
                            <div class="product-grid product-view pb-20">
                                <div class="row">
                                    @foreach ($buku as $bookview)
                                    <div class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                        <div class="product-wrapper">
                                            <div class="product-img">
                                                <a href="/detailbukuuser/{{$bookview->id}}">
                                                    <img alt="" src="{{asset('images/book_colection/' . $bookview->foto_buku)}}">
                                                </a>
                                                <div class="product-action">
                                                    <a class="action-wishlist" href="#" title="Wishlist">
														<i class="ion-android-favorite-outline"></i>
													</a>
                                                </div>
                                            </div>
                                            <div class="product-content text-left">
												<div class="product-hover-style">
													<div class="product-title">
														<h4>
															<a href="/detailbukuuser/{{$bookview->id}}">{{$bookview->nama_buku}}</a>
														</h4>
													</div>
                                                    <div class="cart-hover">
                                                        <h4><a href="/detailbukuuser/{{$bookview->id}}">Lihat Detail</a></h4>
                                                    </div>
												</div>
												<div class="product-price-wrapper">
													<span>{{ $bookview->penulis_buku }}</span>
												</div>
											</div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Shop Page Area End -->

</div>

@endsection

