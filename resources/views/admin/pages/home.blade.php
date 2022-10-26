@extends('admin.layouts.layout')

@section('content')

  <!-- page content -->
    <div class="right_col" role="main">
    <!-- top tiles -->
      <div class="row">
        <div class="animated flipInY col-lg-2 col-md-2 col-sm-6  ">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-user"></i>
            </div>
            <div class="count">{{ $countuser}}</div>
            <h4>Data Penguna</h4>
          </div>
        </div>

        <div class="animated flipInY col-lg-2 col-md-2 col-sm-6  ">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-book"></i>
            </div>
            <div class="count">{{ $countbuku }}</div>
            <h4>Judul buku</h4>
          </div>
        </div>

        <div class="animated flipInY col-lg-2 col-md-2 col-sm-6  ">
            <div class="tile-stats">
                <div class="icon"><i class="fab fa-album-collection"></i>
                </div>
                <div class="count">{{ $countgenre }}</div>
                <h4>Data Genre</h4>
            </div>
        </div>

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-caret-square-o-left"></i>
            </div>
            <div class="count">{{$countbukuonline}}</div>
            <h4>Buku Online</h4>
          </div>
        </div>

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-check-square-o"></i>
            </div>
            <div class="count">{{ $countpinjam }}
            </div>
            <h4>Dipinjam</h4>
          </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Galery Buku</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </li>
                <li>
                    <a class="close-link">
                        <i class="fa fa-close"></i>
                    </a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="row">
                  @foreach ($data as $item)

                <div class="col-md-55">
                  <div class="">
                    <div class="image view view-first">
                      <img style="width: 100%; display: block;" src="{{asset('images/book_colection/' . $item->foto_buku)}}" alt="image" />
                    </div>
                    <div class="caption">
                      <h4>{{$item->nama_buku}}</h4>
                    </div>
                  </div>
                </div>

                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>


    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Galery Buku Online</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </li>
                <li>
                    <a class="close-link">
                        <i class="fa fa-close"></i>
                    </a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="row">
                @foreach ($online as $item)

                <div class="col-md-55">
                    <div class="">
                        <div class="image view view-first">
                      <img style="width: 100%; display: block;" src="{{asset('images/book_colection/' . $item->foto_buku)}}" alt="image" />
                    </div>
                    <div class="caption">
                      <h4>{{$item->nama_buku}}</h4>
                    </div>
                </div>
                </div>
                @endforeach
            </div>
            </div>
          </div>
        </div>
      </div>
</div>
  <!-- /page content -->



@endsection
