<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableWarehouse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_warehouse', function (Blueprint $table) {
                $table->id();
                $table->string('warehouse_name');
                $table->text('address')->nullable();
                $table->integer('provincies_id')->nullable();
                $table->integer('regencies_id')->nullable();
                $table->bigInteger('district_id')->nullable();
                $table->bigInteger('villages_id')->nullable();
                $table->integer('kode_pos')->nullable();
                $table->string('country')->nullable();
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
        Schema::dropIfExists('table_warehouse');
    }
}
