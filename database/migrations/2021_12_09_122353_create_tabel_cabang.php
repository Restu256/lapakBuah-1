<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelCabang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_cabang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_cabang');
            $table->text('alamat');
            $table->text('address')->nullable();
            $table->integer('provoncies_id')->nullable();
            $table->integer('regencies_id')->nullable();
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
        Schema::dropIfExists('tabel_cabang');
    }
}
