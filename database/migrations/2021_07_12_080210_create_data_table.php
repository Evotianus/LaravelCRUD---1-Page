<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('kodebarang', 255)->unique();
            $table->string('nama', 255);
            $table->string('jenis', 255);
            $table->string('merk', 255);
            $table->string('satuan', 255);
            $table->integer('jlh_stok');
            $table->integer('hargajual');
            $table->integer('hargabeli');
            $table->text('ket');
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
        Schema::dropIfExists('data');
    }
}
