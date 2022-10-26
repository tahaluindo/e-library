<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\DetailBuku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;

class BookController extends Controller
{
    public function buku() {
        $buku = [
            Genre::all(),
            'genre' => Genre::all(),
            'buku' => DetailBuku::all()
        ];
        return view('admin.pages.book.dataBuku', $buku);
    }

    public function detailBuku($id) {
        $detail = [
            Genre::all(),
            'genre' => Genre::all(),
            'detail' => DetailBuku::find($id)
        ];
        return view('admin.pages.book.detailBuku', $detail);
    }

    //form insert
    public function formBuku() {
        $data = [
            'genre' => Genre::all(),
            'action' => '/insertbuku'
        ];
        return view('admin.pages.book.formBuku', $data);
    }

    //fungsi insert
    public function insertBook(Request $request) {

        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png'
        ]);

        if($request->hasFile('file')) {
            $file = $request->file('file');
            $path = public_path('images/book_colection');
            $filename = 'image_'. rand(0, 999999999999) .'_'. rand(0, 999999999999) .'.'. $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }
        $request->merge(['foto_buku' => $filename]);
        DetailBuku::create($request->only(['id_genre','foto_buku','nama_buku','penulis_buku','jumlah_halaman','deskripsi']));
        return redirect('/databuku');
    }

    //form edit
    public function editForm($id) {
        $data = [
            'genre' => Genre::all(),
            'buku'  => DetailBuku::find($id),
            'action' => "/updatebuku/$id"
        ];
        return view('admin.pages.book.formBuku', $data);
    }

    //fungsi update
    public function updateBook(Request $request) {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,giff',
        ]);

        $data = DetailBuku::find($request->id);
        if($request->hasFile('file')) {
            $path = public_path('images/book_colection');
            if (file_exists($path. '/' . $data->foto_buku)) {
                File::delete($path. '/' . $data->foto_buku);
            }

            $file = $request->file('file');
            $filename = 'image_'. rand(0, 999999999999) .'_'. rand(0, 999999999999) .'.'. $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }

        $request->merge(['foto_buku' => $filename]);
        DetailBuku::where('id', $request->id)->update($request->only('id_genre','foto_buku','nama_buku','penulis_buku','jumlah_halaman','deskripsi'));
        return redirect('/databuku');
    }

    public function delete($id)
    {
        $data = DetailBuku::findOrFail($id);

        if(file_exists(public_path('images/book_colection' . $data->foto_buku))){
            File::delete(public_path('images/book_colection' . $data->foto_buku));
        }
        $data->delete();
        return redirect('/databuku');
    }
}

