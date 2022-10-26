<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookOnline extends Model
{
    use HasFactory;

    public function online_genre()
    {
        return $this->belongsTo(Genre::class, 'id_genre', 'id');
    }

    protected $guarded = [];
}

