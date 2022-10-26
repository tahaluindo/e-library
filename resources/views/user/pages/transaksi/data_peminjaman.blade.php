@extends('user.layouts.top-bar')

@section('content-user')

    <div class="container">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                        <h3>Data Pengguna</h3>
                </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Buku</th>
                                        <th>Nama Buku</th>
                                        <th>Nama Anggota</th>
                                        <th>Nama Petugas</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datapengembalian as $pengembalian)

                                    <tr>
                                        <td>{{$pengembalian['no']}}</td>
                                        <td>{{$pengembalian['kodeBuku']}}</td>
                                        <td>{{$pengembalian['namaBuku']}}</td>
                                        <td>{{$pengembalian['namaAnggota']}}</td>
                                        <td>{{$pengembalian['namaPetugas']}}</td>
                                        <td>{{$pengembalian['tanggalPinjam']}}</td>
                                        <td>{{$pengembalian['tanggalKembali']}}</td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
