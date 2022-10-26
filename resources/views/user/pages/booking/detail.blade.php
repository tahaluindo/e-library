@extends('user.layouts.top-bar')

@section('content')

<!-- Product Deatils Area Start -->
<div class="product-details pt-100 pb-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="product-details-img">
                    <img class="zoompro" src="{{asset('images/book_colection/' . $detailuser->foto_buku)}}"/>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="product-details-content">
                    <h4>{{ $detailuser ->nama_buku }}</h4>
                    <div class="rating-review">
                        <div class="pro-dec-rating">
                            <i class="ion-android-star-outline theme-star"></i>
                            <i class="ion-android-star-outline theme-star"></i>
                            <i class="ion-android-star-outline theme-star"></i>
                            <i class="ion-android-star-outline theme-star"></i>
                            <i class="ion-android-star-outline"></i>
                        </div>
                    </div>
                    <div class="in-stock">
                        <p>Nama Penulis : <span>{{$detailuser ->penulis_buku }}</span></p>
                        <p>Jumlah Halaman : <span>{{$detailuser ->jumlah_halaman }}</span></p>
                        <p>Genre : <span></span>{{$detailuser ->genre->nama_genre }}</p>
                        <p>Deskripsi : </p>
                    </div>
                    <p>{{$detailuser->deskripsi}}</p>
                    <div class="quality-add-to-cart">
                        <div class="">
                            <a title="" class="add-to-cart" href="{{ route('add-to-cart', $detailuser->id)}}">
                                <button type="submit" class="btn btn-sm btn-success btn-outline-success ">Pinjam
                                </button>
                            </a>
                            <a title="Add to favorite" href="#">
                                <button type="submit" class="btn btn-sm btn-success btn-outline-success">
                                    <i class="fa fa-heart-o"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="pro-dec-categories">
                        <ul>
                            <li class="categories-title">Categories:</li>
                            <li><a href="/all-book">All</a></li> |
                            @foreach (getGenre() as $genre)
                                <li><a href="{{ route('genre', $genre->nama_genre)}}">{{$genre->nama_genre}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="pro-dec-categories">
                        <ul>
                            <li class="categories-title">Tags: </li>
                            <li><a href="#">E-Book </a></li> |
                            <li><a href="#">E-Library </a></li> |
                            <li><a href="#">Github </a></li> |
                            <li><a href="#">Laravel  </a></li> |
                            <li><a href="#">Javascript </a></li> |
                            <li><a href="#">Vue Js </a></li>
                        </ul>
                    </div>
                    <div class="pro-dec-social">
                        <ul>
                            <li><a href="#"><i class="ion-social-twitter"></i> Tweet</a></li>
                            <li><a href="#"><i class="ion-social-facebook"></i> Share</a></li>
                            <li><a href="#"><i class="ion-social-googleplus-outline"></i> Google+</a></li>
                            <li><a href="#"><i class="ion-social-pinterest"></i> Pinterest</a></li>
                            <li><a href="#"><i class="fa fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- product -->
        <div class="product-area pb-100">
            <div class="container">
                <div class="product-top-bar section-border mb-35">
                    <div class="section-title-wrap">
                        <h4 class="section-title section-bg-white">Recomended for you</h4>
                    </div>
                </div>
                <div class="featured-product-active hot-flower owl-carousel product-nav">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="">
                                <img alt="" src="{{asset('images/book_colection/KKN.jpg')}}">
                            </a>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Add To Favorite">
                                    <i class="ion-android-favorite-outline"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-left">
                            <div class="product-hover-style">
                                <div class="product-title">
                                    <h4>
                                        <a href="/detail">KKN Di Desa Penari</a>
                                    </h4>
                                </div>
                                <div class="cart-hover">
                                    <h4><a href="/detail">Lihat Detail</a></h4>
                                </div>
                            </div>
                            <div class="product-price-wrapper">
                                <span>Simpleman</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
