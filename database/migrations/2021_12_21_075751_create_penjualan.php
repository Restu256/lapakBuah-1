<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions_jual', function (Blueprint $table) {
            $table->id();
            $table->string('faktur_penjualan');
            $table->integer('user_id');
            $table->integer('booking_id');
            $table->integer('invoice_no');
            $table->string('service_code');
            $table->string('parcel_total_weight');
            $table->integer('shipper');
            $table->string('kurir');
            $table->integer('ongkir');
            $table->datetime('waktu_transaksi');
            $table->string('proses');
            $table->integer('driver_id')->nullable();
            $table->string('no_kendaraan')->nullable();
            $table->string('voucher_id')->nullable();
            $table->string('grand_total');
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
        Schema::dropIfExists('penjualan');
    }
}
