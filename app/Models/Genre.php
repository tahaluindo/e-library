<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public function detailbook()
    {
        return $this->hasMany(DetailBuku::class);
    }

    public function onlinebook()
    {
        return $this->hasMany(BookOnline::class);
    }


    protected $guarded = [];
}

