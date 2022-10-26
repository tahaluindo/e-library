<?php

use App\Models\DetailBuku;
use App\Models\Genre;

function getGenre() {
    return Genre::all();
}
