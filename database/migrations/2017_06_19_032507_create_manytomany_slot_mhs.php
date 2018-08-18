<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManytomanySlotMhs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slot_mhs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_slot')->unsigned();
            $table->foreign('id_slot')->references('id')->on('slot');
            $table->integer('id_mahasiswa')->unsigned();
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswa');
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
        Schema::dropIfExists('slot_mhs');
    }
}
