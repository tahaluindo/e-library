@extends('admin.layouts.layout')

@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                    <h3>Data Buku </h3>
              </div>
              <div class="x_content">
                  <div class="row">
                      <div class="col-sm-12">
                        <form method="POST" action="{{$action}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm border-ra" name="id"  id="id" required value="{{ isset($buku) ? $buku->id : '' }}" hidden readonly>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="file" id="dropify" required>
                            </div>
                            <div class="form-group" >
                                <label for="Nama">Judul buku</label>
                                <input type="text" class="form-control form-control-sm" name="nama_buku" id="nama_buku" required value="{{ isset($buku) ? $buku->nama_buku : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="Nama">Genre</label>
                                <select class="form-control form-control-sm" name="id_genre"  id="id_genre" required>
                                    <option>Pilih Genre</option>
                                    @foreach ($genre as $item)
                                    <option value="{{$item->id}}" {{isset($buku) && $buku->id_genre == $item->id ? 'selected' : ''}}>
                                        {{$item->nama_genre}}
                                    </option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Jabatan">Penulis</label>
                                <input type="text" class="form-control form-control-sm" name="penulis_buku" id="Jabatan" required value="{{ isset($buku) ? $buku->penulis_buku : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="Jabatan">Jumlah Halaman</label>
                                <input type="text" class="form-control form-control-sm" name="jumlah_halaman" id="Jabatan" required value="{{ isset($buku) ? $buku->jumlah_halaman : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="Jabatan">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" value="">{{ isset($buku) ? $buku->deskripsi : '' }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>

                            <a href="/buku">
                                <button type="button" class="btn btn-secondary btn-sm">Close</button>
                            </a>
                        </form>
                      </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>

@endsection

@section('script')

<script>
    $(document).ready(function() {
        $('#dropify').dropify();

    });
</script>

@endsection
