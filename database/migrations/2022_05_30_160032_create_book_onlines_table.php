<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_onlines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_genre');
            $table->string('foto_buku');
            $table->string('nama_buku');
            $table->string('penulis_buku');
            $table->string('jumlah_halaman');
            $table->text('deskripsi');
            $table->text('file_book');
            $table->timestamps();
            $table->foreign('id_genre')->references('id')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_onlines');
    }
};
