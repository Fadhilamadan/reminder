<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatakuliahMahasiswaPeriode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliah_periode_mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matakuliah_id')->unsigned()->nullable();
            $table->foreign('matakuliah_id')->references('id')->on('matakuliah')->onDelete('cascade');
            $table->integer('mahasiswa_id')->unsigned()->nullable();
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa')->onDelete('cascade');
            $table->integer('periode_id')->unsigned()->nullable();
            $table->foreign('periode_id')->references('id')->on('periode')->onDelete('cascade');
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
        Schema::dropIfExists('matakuliah_periode_mahasiswa');
    }
}
