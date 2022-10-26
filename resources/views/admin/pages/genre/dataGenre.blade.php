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
                            <div class="card-box table-responsive">
                            <table id="datatable-responsive" class="table table-striped table-bordered table-sm dt-responsive nowrap" style="width:100%" >
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>ID</th>
                                    <th>Nama Genre</th>
                                    <th>Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $genre)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$genre->id}}</td>
                                        <td>{{$genre->nama_genre}}</td>
                                        <td class="text-center">
                                            <a href="/updategenre/{{$genre->id}}">
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </button>
                                            </a>

                                           <a href="/deletegenre/{{$genre->id}}" onclick="return confirm('Hapus?');">
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                       </td>
                                   </tr>
                                   @endforeach
                                </tbody>
                            </table>
                            <hr>
                            <a href="/formgenre">
                                <button class="btn btn-outline-success btn-sm ml-3 col-sm-2">Tambah
                                    <i class="fa fa-plus" ></i>
                                </button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
