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
            $table->integer('no_buku');
            $table->string('judul','75');
            $table->date('tahun_buku');
            $table->unsignedBigInteger('idkategori');
            $table->string('deskripsi','100');
            $table->integer('stok');
            $table->string('namapenerbit','100');
            $table->timestamps();
            $table->foreign('idkategori')->references('id')->on('kategoris');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukus');
    }
};
