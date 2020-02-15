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
            // $table->unsignedInteger('id_kamar');
            // $table->foreign('id_kamar')->references('id')->on('kamars')->onDelete('cascade');
            // $table->unsignedInteger('id_parkir');
            // $table->foreign('id_parkir')->references('id')->on('parkirs')->onDelete('cascade');
            $table->string('nama');
            $table->text('alamat');
            $table->string('harga');
            $table->string('luas_kamar');
            $table->string('gambar')->nullable();
            $table->string('telepon');
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
