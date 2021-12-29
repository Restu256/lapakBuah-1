<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id();
            $table->integer('faktur_pembelian');
            $table->integer('id_supplier');
            $table->integer('products_id');
            $table->integer('ongkir');
            $table->integer('jumlah');
            $table->integer('total_harga');
            $table->datetime('waktu_transaksi');
            $table->string('proses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelian');
    }
}
