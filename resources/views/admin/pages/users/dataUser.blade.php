@extends('admin.layouts.layout')

@section('content')
      <div class="right_col" role="main">
        <div class="">
          <div class="row">
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
                                    <th>Role</th>
                                    <th>Username</th>
                                    <th>email</th>
                                    <th>Password</th>
                                    <th>Opsi</th>
                                </tr>
                                </thead>
                                 <tbody>
                                     @foreach ($dataUser as $users)

                                     <tr>
                                         <td>{{ $loop->iteration }}</td>
                                         <td>{{$users->role->name}}</td>
                                         <td>{{$users->name}}</td>
                                         <td>{{$users->email}}</td>
                                         <td>{{$users->password}}</td>
                                         <td >
                                            <a href="/deleteuser/{{$users->id}}" onclick="return confirm('Hapus?');">
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>

                                    @endforeach
                                    </tbody>
                            </table>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
