<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\BookOnline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;

class BookOnlineController extends Controller
{
    // ONLINE BOOK
    public function index() {
        $data = [
            Genre::all(),
            'genre' => Genre::all(),
            'data' => BookOnline::all()
        ];
        return view('admin.pages.online-book.online', $data);
    }

    public function detailOnline($id) {
        $detail = [
            Genre::all(),
            'genre' => Genre::all(),
            'detail' => BookOnline::find($id)
        ];
        return view('admin.pages.online-book.detailonline', $detail);
    }

     //form insert
     public function formBukuOnline() {
        $data = [
            'genre' => Genre::all(),
            'action' => '/insertbukuonline'
        ];
        return view('admin.pages.online-book.form-online', $data);
    }

    //fungsi insert
    public function insertBookOnline(Request $request) {

        
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,',
            'file_book_online' => 'required|mimes:pdf,word'
        ]);

        if($request->hasFile('file')) {
            $file = $request->file('file');
            $path = public_path('images/book_colection');
            $imagename = 'image_'. rand(0, 999999999999) .'_'. rand(0, 999999999999) .'.'. $file->getClientOriginalExtension();
            $file->move($path, $imagename);
        }

        if($request->hasFile('file_book_online')) {
            $file = $request->file('file_book_online');
            $path = public_path('e_book');
            $filename = 'book_'. rand(0, 999999999999) .'_'. rand(0, 999999999999) .'.'. $file->getClientOriginalName();
            $file->move($path, $filename);
        }
        $request->merge(['foto_buku' => $imagename, 'file_book' => $filename]);
        BookOnline::create($request->only(['id_genre','foto_buku','nama_buku','penulis_buku','jumlah_halaman','deskripsi', 'file_book']));
        return redirect('/buku-online');
    }

    //form edit
    public function editFormOnline($id) {
        $data = [
            'genre' => Genre::all(),
            'data'  => BookOnline::find($id),
            'action' => "/updatebukuonline/$id"
        ];
        return view('admin.pages.online-book.form-online', $data);
    }

    //fungsi update
    public function updateBookOnline(Request $request) {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,giff,pdf',
            'file_book_online' => 'required|mimes:pdf,word'
        ]);

        $data = BookOnline::find($request->id);

        if($request->hasFile('file')) {
            $path = public_path('images/book_colection');
            if (file_exists($path. '/' . $data->foto_buku)) {
                File::delete($path. '/' . $data->foto_buku);
            }

            $file = $request->file('file');
            $imagename = 'image_'. rand(0, 999999999999) .'_'. rand(0, 999999999999) .'.'. $file->getClientOriginalExtension();
            $file->move($path, $imagename);
        }

        if($request->hasFile('file_book_online')) {
            $path = public_path('e_book');
            if (file_exists($path. '/' . $data->file_book)) {
                File::delete($path. '/' . $data->file_book);
            }

            $file = $request->file('file_book_online');
            $filename = 'book_'. rand(0, 999999999999) .'_'. rand(0, 999999999999) .'.'. $file->getClientOriginalName();
            $file->move($path, $filename);
        }

        $request->merge(['foto_buku' => $imagename, 'file_book' => $filename]);
        BookOnline::where('id', $request->id)->update($request->only('id_genre','foto_buku','nama_buku','penulis_buku','jumlah_halaman','deskripsi', 'file_book'));
        return redirect('/buku-online');
    }

    public function deleteOnline($id)
    {
        $data = BookOnline::findOrFail($id);

        if(file_exists(public_path('images/book_colection' . $data->foto_buku))){
            File::delete(public_path('images/book_colection' . $data->foto_buku));
        }
        $data->delete();
        return redirect('/buku-online');
    }

}
