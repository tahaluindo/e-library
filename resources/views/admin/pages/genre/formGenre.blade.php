@extends('admin.layouts.layout')

@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                    <h3>Data Genre</h3>
              </div>
              <div class="x_content">
                  <div class="row">
                      <div class="col-sm-12">
                        <form method="POST" action="{{$action}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm border-ra" name="id"  id="id" {{ isset($data) ? $data->id : '' }} hidden readonly>
                            <div class="form-group" >
                                <label for="Nama">Nama</label>
                                <input type="text" class="form-control form-control-sm" name="nama_genre" id="Nama" required value="{{ isset($data) ? $data->nama_genre : '' }}">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>

                            <a href="/datagenre">
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
