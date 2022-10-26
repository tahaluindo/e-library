@extends('admin.layouts.layout')

@section('content')

<div class="right_col" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                    <h3>Transaksi</h3>
              </div>
              <div class="x_content">
                  <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Peminjam</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Jatuh Tempo</th>
                                        <th>Tanggal Kembali</th>
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
                                        <td>{{ $item->pengguna->name }}</td>
                                        <td>{{ $item->tanggal_pinjam }}</td>
                                        <td>{{ $item->jatuh_tempo }}</td>
                                        <td>{{ $item->tanggal_kembali }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->denda }}</td>
                                        <td>{{ $item->keterangan }}</td>
                                        <td>
                                            <a href="/update-transaksi/{{$item->id}}">
                                                <button class="btn btn-sm btn-success">
                                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                            <a href="/detail-transaksi/{{$item->id}}">
                                                <button class="btn btn-sm btn-warning">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                            <a href="/update-status/{{$item->id}}">
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fa fa-save" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
