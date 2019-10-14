<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->bigIncrements('id_buku');
            $table->string('nama_buku');
            $table->string('author');
            $table->string('penerbit');
            $table->integer('halaman');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
