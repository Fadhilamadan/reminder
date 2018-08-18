<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignToKerjapraktek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kerja_praktek', function (Blueprint $table) {
            $table->integer('mahasiswa_satu_id')->unsigned()->nullable();
            $table->foreign('mahasiswa_satu_id')->references('id')->on('mahasiswa');
            $table->integer('mahasiswa_dua_id')->unsigned()->nullable();
            $table->foreign('mahasiswa_dua_id')->references('id')->on('mahasiswa');
            $table->integer('dosen_pembimbing_id')->unsigned();
            $table->foreign('dosen_pembimbing_id')->references('id')->on('dosen');
            $table->integer('periode_id')->unsigned();
            $table->foreign('periode_id')->references('id')->on('periode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kerja_praktek', function (Blueprint $table) {
            $table->dropForeign('kerja_praktek_periode_id_foreign');
            $table->dropColumn('periode_id');
            $table->dropForeign('kerja_praktek_dosen_pembimbing_id_foreign');
            $table->dropColumn('dosen_pembimbing_id');
            $table->dropForeign('kerja_praktek_mahasiswa_dua_id_foreign');
            $table->dropColumn('mahasiswa_dua_id');
            $table->dropForeign('kerja_praktek_mahasiswa_satu_id_foreign');
            $table->dropColumn('mahasiswa_satu_id');
        });
    }
}
