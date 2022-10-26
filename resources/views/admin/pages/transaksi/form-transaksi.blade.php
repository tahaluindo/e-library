@extends('admin.layouts.layout')

@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h3>Add Transaction</h3>
                    </div>
                <div class="x_content">
                        <form action="{{ $action }}" method="POST" enctype="multipart/form-data" width="100%">
                            @csrf
                            <div class="form-group">
                                <label for="Nama">User</label>
                                <select class="form-control form-control-sm" name="id_user" required>
                                    <option>Pilih User</option>
                                    @foreach ($user as $item)
                                    <option value="{{$item->id}}">
                                        {{$item->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                              <label for="">Judul Buku</label>
                              <select class="form-control form-control-sm" name="id_buku" required>
                                <option>Pilih Buku</option>
                                @foreach ($book as $item)
                                <option value="{{$item->id}}">
                                    {{$item->nama_buku}}
                                </option>

                                @endforeach
                            </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Pinjam</label>
                                <input type="date" class="form-control form-control-sm" name="tanggal_pinjam" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Jatuh Tempo</label>
                                <input type="date" class="form-control form-control-sm" name="jatuh_tempo" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                </div>
            </div>
        </div>

@endsection
