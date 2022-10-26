<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    public function pengguna() {
        return $this->belongsTo(User::class, 'id_user');
    }


    public function pinjam() {
        return $this->hasMany(Pinjam::class, 'id_peminjaman');
    }

    protected $guarded = [];
}
