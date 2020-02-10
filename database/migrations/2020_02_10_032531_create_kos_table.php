<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_fasilitas_kamar');
            $table->foreign('id_fasilitas_kamar')->references('id')->on('kamars')->onDelete('cascade');
            $table->unsignedInteger('id_fasilitas_parkir');
            $table->foreign('id_fasilitas_parkir')->references('id')->on('parkirs')->onDelete('cascade');
            $table->string('nama');
            $table->text('alamat');
            $table->integer('harga');
            $table->integer('luas_kamar');
            $table->string('gambar');
            $table->integer('telepon');
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
        Schema::dropIfExists('kos');
    }
}
