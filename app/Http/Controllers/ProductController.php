<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Genre;
use App\Models\DetailBuku;
use App\Models\BookOnline;
use App\Models\Peminjaman;
use App\Models\Pinjam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Exception;

class ProductController extends Controller
{
    public function index() {
        $buku = [
            Genre::all(),
            'genre' => Genre::all(),
            'buku' => DetailBuku::orderBy('created_at','desc')->get(),
            'ebook' => BookOnline::orderBy('created_at','desc')->get(),
            'new_add' => DetailBuku::orderBy('created_at','desc')->take(6)->get(),
            'new_book' => DetailBuku::orderBy('created_at','desc')->take(5)->get()
        ];
        return view('user.pages.dashboard', $buku);
    }

    public function viewall() {
        $buku = [
            Genre::all(),
            'genre' => Genre::all(),
            'buku' => DetailBuku::orderBy('created_at','desc')->get(),
        ];
        return view('user.pages.booking.all-book', $buku);
    }

    public function detailBukuUser($id) {
        $detail = [
            Genre::all(),
            'genre' => Genre::all(),
            'detailuser' => DetailBuku::find($id)
        ];
        return view('user.pages.booking.detail', $detail);
    }

    public function detailBukuOnline($id) {
        $detail = [
            Genre::all(),
            'genre' => Genre::all(),
            'detailbukuonline' => BookOnline::find($id)
        ];
        return view('user.pages.online-book.detail', $detail);
    }

    public function genre($genre) {
        $data = [
            'buku' =>DetailBuku::wherehas('genre', function ($query) use ($genre) {
                $query->where('nama_genre', $genre);
            })->get(),
        ];
        return view('user.pages.booking.all-book', $data);
    }


    public function search(Request $request) {
        if ($request->has('search')) {
            $search = DetailBuku::where('nama_buku','LIKE', '%' . $request->search . '%')->get();
        }
        else {
            $search = DetailBuku::all();
        }

        return view('user.pages.booking.all-book', $search);
    }


    public function viewcart() {
        $transaction = Peminjaman::where(['id_user' => Auth::user()->id, 'status' => 'pending'])->first();
        $data = [
            'count' => !is_null($transaction) ? $transaction->pinjam->count() : 0,
            'data' => !is_null($transaction) ? $transaction->pinjam()->with('product')->get() : [],
        ];
        return view('user.pages.cart.cart', $data);
    }

    //minicart
    public function cart() {
        $transaction = Peminjaman::where(['id_user' => Auth::user()->id, 'status' => 'pending'])->first();
        $data = [
            'count' => !is_null($transaction) ? $transaction->pinjam->count() : 0,
            'data' => !is_null($transaction) ? $transaction->pinjam()->with('product')->get() : [],
        ];

        return response()->json($data);
    }


    public function addToCart($id) {
        // dd(Auth::user()->id);
        try {

            $transaction = Peminjaman::where(['id_user' => Auth::user()->id, 'status' => 'pending']);

            if ($transaction->count() > 0) {
                $transaction = $transaction->first();
            } else {
                $transaction = Peminjaman::create([
                    'id_user' => Auth::user()->id,
                    'status' => 'pending'
                ]);
            }

            $product = DetailBuku::find($id);
            $check = Pinjam::where(['id_peminjaman' => $transaction->id, 'id_buku' => $product->id]);

            if ($check->count() <= 0) {
                Pinjam::create([
                    'id_peminjaman' => $transaction->id,
                    'id_buku' => $product->id,
                ]);
            }

            return response()->json([
                'message' => 'Data telah ditambahkan'
            ]);
            // return redirect()->back();
        } catch (Exception $e) {
            return response()->json([
                'trace' => $e->getTrace(),
                'message' => $e-> getMessage()
            ], 500);
        }
    }


    public function removeFromBigCart($id) {
        try {
            Pinjam::findOrFail($id)->delete();

            // return response()->json([
                // 'message' => 'Data telah dihapus'

                // ]);
                return redirect()->back();
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function removeFromCart($id)
    {
        try {
            Pinjam::findOrFail($id)->delete();

            return response()->json([
                'message' => 'Data telah dihapus'

                ]);
                // return redirect()->back();
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function cancelOrder($id) {
        try {
            Pinjam::where('id_peminjaman', $id)->delete();
            Peminjaman::findOrFail($id)->delete();

            return redirect()->back();
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

}

