<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->bigIncrements('id_peminjaman');
            $table->bigInteger('id_buku')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->dateTime('tanggal_peminjaman');
            $table->dateTime('tanggal_pengembalian');
            $table->bigInteger('total_denda');

            $table->foreign('id_buku')->references('id_buku')->on('buku')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
