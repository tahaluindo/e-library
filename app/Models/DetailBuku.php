<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBuku extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'id_genre', 'id');
    }

    public function favorite()
    {
        return $this->hasMany(Favorit::class);
    }

}
