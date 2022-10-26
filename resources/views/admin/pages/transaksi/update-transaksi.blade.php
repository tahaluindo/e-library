@extends('admin.layouts.layout')

@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h3>Pengembalian Buku</h3>
                    </div>
                <div class="x_content">
                        <form action="{{$action}}" method="post" enctype="multipart/form-data" width="100%">
                            {{--  {{dd($data->jatuh_tempo)}}  --}}
                            @csrf
                            <div class="form-group">
                                <label for="">Tanggal Pinjam</label>
                                <input type="date" class="form-control form-control-sm" name="tanggal_pinjam" value="{{ isset($data) ? $data->tanggal_pinjam : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="">Jatuh Tempo</label>
                                <input type="date" class="form-control form-control-sm" name="jatuh_tempo" value="{{ isset($data) ? $data->jatuh_tempo : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Kembali</label>
                                <input type="date" class="form-control form-control-sm" name="tanggal_kembali" value="{{ isset($data) ? $data->tanggal_kembali : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="">Denda</label>
                                <input type="text" class="form-control form-control-sm" name="denda" value="{{ isset($data) ? $data->denda : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <textarea class="form-control" name="keterangan" value="{{ isset($data) ? $data->keterangan : '' }}" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                </div>
            </div>
        </div>

@endsection
