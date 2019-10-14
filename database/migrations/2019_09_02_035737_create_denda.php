<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denda', function (Blueprint $table) {
            $table->bigIncrements('id_denda');
            $table->bigInteger('id_peminjaman')->unsigned();
            $table->bigInteger('total_denda');

            $table->foreign('id_peminjaman')->references('id_peminjaman')->on('peminjaman')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denda');
    }
}
