<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DetailBuku;
use App\Models\Favorit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class FavoriteController extends Controller
{
    public function index() {
        // dd(Auth::user()->id);
        $favorite = Favorit::where(['id_user' => Auth::user()->id,])->first();
        $data = [
            'data' => $favorite->book()->with('favorite')->get() ?? [],
        ];
        return view('user.pages.favorite.Favorit', $data);
    }

    public function addToFavorite($id) {
        try {

            $favorite = Favorite::where(['id_user' => Auth::user()->id]);

            $product = DetailBuku::find($id);
            $check = Pinjam::where(['id_user' => $favorite->id, 'id_buku' => $product->id]);

            if ($check->count() <= 0) {
                Pinjam::create([
                    'id_user' => $favorite->id,
                    'id_buku' => $product->id,
                ]);
            }

            return response()->json([
                'message' => 'Data telah ditambahkan'
            ]);
            // return redirect()->back();
        } catch (Exception $e) {
            return response()->json([
                'message' => $e-> getMessage()
            ], 500);
        }
    }

    public function removeFromBigCart($id) {
        try {
            Favorite::findOrFail($id)->delete();

            return redirect()->back();
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }
    
}
