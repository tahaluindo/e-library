<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Genre;
use App\Models\DetailBuku;
use App\Models\Peminjaman;
use App\Models\Pinjam;
use App\Models\BookOnline;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home() {
        $data = [
            'countgenre' => Genre::get()->count(),
            'countbuku' => DetailBuku::get()->count(),
            'countuser' => User::get()->count(),
            'countpinjam' => Pinjam::get()->count(),
            'countbukuonline' => BookOnline::get()->count(),
            'genre' => Genre::all(),
            'data' => DetailBuku::all(),
            'online' => BookOnline::all()
        ];
        return view('admin.pages.home', $data);
    }

}
