<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Http\Controllers\Controller;

class GenreController extends Controller
{
    public function index() {
        $data = [
            'data' => Genre::all(),
            
        ];
        return view('admin.pages.genre.dataGenre', $data);
    }

    public function formGenre() {
        $data = [
            'action' => '/insertgenre'
        ];
        return view('admin.pages.genre.formGenre', $data);
    }


    //form
    public function create() {
        $data = [
            'data' => Genre::all()
        ];
        return view('admin.pages.genre.formGenre', $data);
    }

    public function insertgenre(Request $request) {
        Genre::create($request->only('nama_genre'));
        return redirect()->route('add-genre');
    }

    //form
    public function update($id) {
        $data = [
            'data' => Genre::find($id),
            'action' => '/updategenre/' . $id,
         ];
         return view('admin.pages.genre.formGenre',$data);
    }

    public function updateuser(Request $request, $id) {
        Genre::where('id', $id)->update($request->only('nama_genre'));
        return redirect()->route('add-genre');
    }

    public function delete($id) {
        Genre::where('id', $id)->delete();
        return redirect()->route('add-genre');
    }
}
