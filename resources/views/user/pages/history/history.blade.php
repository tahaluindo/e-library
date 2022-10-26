@extends('user.layouts.top-bar')

@section('content')

<!-- shopping-cart-area start -->
        <div class="cart-main-area ptb-50">
            <div class="container">
                <h3 class="page-title text-center">History</h3>
                <div class="row center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table align="center">
                                    <thead>
                                        <tr>
                                            <th>No.</th>

                                            <th>Tanggal Pinjam</th>
                                            <th>Jatuh Tempo</th>
                                            <th>Tanggal Di Kembalikan</th>
                                            <th>Status</th>
                                            <th>Denda</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->tanggal_pinjam }}</td>
                                            <td>{{ $item->jatuh_tempo }}</td>
                                            <td>{{ $item->tanggal_kembali }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->denda }}</td>
                                            <td>{{ $item->keterangan }}</td>
                                            <td>
                                                <a href="{{ route('cancel-order', $item->id)}}">
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
