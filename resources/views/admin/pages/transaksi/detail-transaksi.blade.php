@extends('admin.layouts.layout')

@section('content')

<div class="right_col" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Transaksi</h2>
                            <div class="clearfix"></div>
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
                                                    <th>Judul Buku</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$item->product->nama_buku}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <a href="/transaksi">
                                        <button class="btn btn-sm btn-outline-success ml-2">Kembali</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
