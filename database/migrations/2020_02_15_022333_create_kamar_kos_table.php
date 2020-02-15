<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKamarKosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamar_kos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_kamar');
            $table->foreign('id_kamar')->references('id')->on('kamars')->onDelete('cascade');
            $table->unsignedInteger('id_kos');
            $table->foreign('id_kos')->references('id')->on('kos')->onDelete('cascade');
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
        Schema::dropIfExists('kamar_kos');
    }
}
