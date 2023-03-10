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
        Schema::create('tabel_pemasukan', function (Blueprint $table) {
            $table->id('id_anggota');
            $table->string('nama');
            $table->string('alamat');
            $table->string('simpanan_pokok');
            $table->string('simpanan_wajib');
            $table->string('simpanan_manasuka');
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
        Schema::dropIfExists('tabel_pemasukan');
    }
};
