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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->bigInteger('judul');
            $table->string('pengarang');
            $table->string('halaman');
            $table->string('penerbit');
            $table->bigInteger('tahun_terbit');
            $table->string('stok');
            $table->string('status');
            

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
        //
    }
};
