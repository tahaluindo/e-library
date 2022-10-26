@extends('admin.layouts.layout')

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h3>Data Buku</h3>
                </div>
                <a href="/formbuku">
                    <button class="btn btn-sm btn-outline-success mr-auto col-sm-2" style="width: 100px;">Tambah
                        <i class="fa fa-plus"></i>
                    </button>
                </a>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="card-box table-responsive">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" >
                            <thead>
                            <tr>
                                <th width="10px">No.</th>
                                <th width="50px">Image</th>
                                <th width="50px">Genre</th>
                                <th width="50px">Nama</th>
                                <th width="50px">Penulis</th>
                                <th width="50px">Jumlah Halaman</th>
                                {{--  <th width="840px">Deskripsi</th>  --}}
                                <th width="50px">Opsi</th>

                            </tr>
                        </thead>
                                <tbody>
                                    @foreach ($buku as $listBuku)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ asset('images/book_colection/' . $listBuku->foto_buku)}}" width="50px" height="80" alt=""></td>
                                        <td>{{ $listBuku->genre->nama_genre}}</td>
                                        <td>{{ $listBuku->nama_buku }}</td>
                                        <td>{{ $listBuku->penulis_buku }}</td>
                                        <td>{{ $listBuku->jumlah_halaman }}</td>
                                        <td>
                                            <a href="/updatebuku/{{$listBuku->id}}">
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                            <a href="/deletebuku/{{$listBuku->id}}" onclick="return confirm('Hapus?');">
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                            </a>
                                            <a href="/detailbuku/{{$listBuku->id}}">
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                        </table>
                        <hr>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')


@endsection
