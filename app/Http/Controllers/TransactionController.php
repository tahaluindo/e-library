<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use App\Models\Peminjaman;
use App\Models\DetailBuku;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index() {
        $data = [
            'user' => User::all(),
            'data'  => Peminjaman::all(),
        ];
        return view('admin.pages.transaksi.pengembalian', $data);
    }

    public function formTransaksi() {
        $data = [
            'user' => User::all(),
            'book' => DetailBuku::all(),
            'action' => route('insert-transaksi')
        ];
        return view('admin.pages.transaksi.form-transaksi', $data);
    }

    public function addTransaction(Request $request) {
        $peminjaman = Peminjaman::create([
            'id_user' => $request->id_user,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'jatuh_tempo' => $request->jatuh_tempo,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => 'borrow',
            'denda' => $request->denda,
            'keterangan' => $request->keterangan,
        ]);

        $pinjam = Pinjam::create([
            'id_peminjaman' => $peminjaman->id,
            'id_buku' => $request->id_buku,
        ]);
        return redirect()->route('admin.transaksi');
    }

    public function updateTransaksi($id) {
        $data = [
            'data' => Peminjaman::findOrFail($id),
            'action' => route('Update-transaction', $id)
        ];
        return view('admin.pages.transaksi.update-transaksi', $data);

    }

    public function updatetransaction(Request $request, $id) {
        Peminjaman::where('id', $id)->update([
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'jatuh_tempo'  => $request->jatuh_tempo,
            'tanggal_kembali'  => $request->tanggal_kembali,
            'status' => 'borrow',
            'denda' => $request->denda,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('admin.transaksi');
    }

    public function detailTransaksi($id) {
        $data = [
            'data' => Pinjam::where(['id_peminjaman' => $id])->get(),

        ];
        return view('admin.pages.transaksi.detail-transaksi', $data);
    }
    public function history() {
        $data = [
            'transaction' => User::where(['id' => Auth::user()->id])->first(),
            'data'  => Peminjaman::where(['id_user' => Auth::user()->id])->get(),
        ];

        return view('user.pages.history.history',$data);
    }

    public function success($id) {
        try {
            $status = Peminjaman::findOrFail($id);
            $status->update([
                'status' => 'return'
            ]);

            return redirect()->route('admin.transaksi');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage);
        }
    }

    public function checkout() {
        $transaction = Peminjaman::where(['id_user' => Auth::user()->id, 'status' => 'pending'])->update([
            'status' => 'waiting',
        ]);
        return redirect('/history');
    }

}
