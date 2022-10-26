<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;

    public function peminjaman() {
        return $this->belongsTo(Peminjaman::class);
    }

    public function product() {
        return $this->belongsTo(DetailBuku::class, 'id_buku');
    }

    protected $guarded = [];
}
