@extends('user.layouts.top-bar')

@section('content')

<!-- shopping-cart-area start -->
        <div class="cart-main-area ptb-50">
            <div class="container">
                <h3 class="page-title text-center">Favorite</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table align="center">
                                    <thead>
                                        <tr>

                                            <th>No</th>
                                            <th>Image</th>
                                            <th>Nama Buku</th>
                                            <th>Penulis Buku</th>
                                            <th>Genre</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                        <tr>
                                            <td>1</td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="{{asset('images/book_colection/'. $item->favorite->foto_buku) }}" width="60px" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{$item->favorite->nama_buku}}</a></td>
                                            <td class="product-price-cart"><span class="amount">{{$item->favorite->penulis_buku}}</span></td>
                                            <td class="product-price-cart"><span class="amount">{{$item->favorite->genre}}</span></td>
                                            <td class="product-remove">
                                                <a href="{{route('remove-from-favorite', $item->id)}}">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <div class="pt-10 text-center">
                            <a href="/dashboard">
                                <button class="btn btn-sm btn-primary">Kembali</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
