@extends('admin.layouts.layout')

@section('content')
<div class="right_col" role="main">
    <div class="card text-center">
        <div class="card-body">
            <div class="d-flex justify-content-center">
                <div class="card mb-3 mt-3" >
                    <div class="row no-gutters">
                        <div class="d-flex justify-content-start">
                            <div class="col-md-4">
                                <img src="{{ asset('images/book_colection/' . $detail->foto_buku) }}" width="270px" height="340px"  alt="...">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-left">Judul Buku : {{ $detail ->nama_buku }}</h5>
                                <p class="card-text text-left">Genre : {{ $detail ->online_genre->nama_genre }}</p>
                                <p class="card-text text-left">Penulis : {{ $detail ->penulis_buku }}</p>
                                <p class="card-text text-left">Jumlah Halaman : {{ $detail ->jumlah_halaman }}</p>
                                <p class="card-text text-left">Deskripsi : </p>
                                <p class="card-text text-left">
                                    {{ $detail ->deskripsi }}
                                </p>
                                <a href="{{ asset('e_book/' . $detail->file_book) }}">
                                    <p class="card-text text-left">
                                       Lihat Lebih Banyak
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/buku-online">
                <button class="btn btn-sm mr-auto btn-primary">Back</button>
            </a>
        </div>
    </div>
</div>
@endsection
