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
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->id();
            $table->integer('nopinjam');
            $table->date('tglpinjam');
            $table->unsignedBigInteger('noanggota');
            $table->unsignedBigInteger('nobuku');
            $table->integer('jmlbuku');
            $table->date('tglkembali');
            $table->enum('status',['1','2']);
            $table->unsignedBigInteger('nopetugas');
            $table->timestamps();
            $table->foreign('noanggota')->references('id')->on('anggotas');
            $table->foreign('nobuku')->references('id')->on('bukus');
            $table->foreign('nopetugas')->references('id')->on('petugas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjamans');
    }
};
