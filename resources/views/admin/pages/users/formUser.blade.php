{{--  @extends('admin.layouts.layout')

@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                    <h3>Data Anggota</h3>
              </div>
              <div class="x_content">
                  <div class="row">
                      <div class="col-sm-12">
                        <form method="POST" action="{{$action}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm border-ra" name="id"  id="id" {{ isset($updateuser) ? $updateuser->id : '' }} hidden readonly>
                            </div>
                            <div class="form-group" >
                                <label for="nama_anggota">Nama</label>
                                <input type="text" class="form-control form-control-sm" name="nama_anggota" id="nama_anggota" required value="{{ isset($updateuser) ? $updateuser->nama_anggota : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <input type="text" class="form-control form-control-sm" name="jenis_kelamin" id="jenis_kelamin" required value="{{ isset($updateuser) ? $updateuser->jenis_kelamin : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control form-control-sm" name="alamat" id="alamat" required value="{{ isset($updateuser) ? $updateuser->alamat : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control form-control-sm" name="email" id="email" required value="{{ isset($updateuser) ? $updateuser->email : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="nomor">No. Hp</label>
                                <input type="text" class="form-control form-control-sm" name="nomor" id="nomor" required value="{{ isset($updateuser) ? $updateuser->nomor : '' }}">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>

                            <a href="/datauser">
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


@endsection  --}}
