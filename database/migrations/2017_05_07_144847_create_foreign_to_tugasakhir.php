<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignToTugasakhir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tugas_akhir', function (Blueprint $table) {
            $table->integer('dosen_satu_id')->unsigned();
            $table->foreign('dosen_satu_id')->references('id')->on('dosen');
            $table->integer('dosen_dua_id')->unsigned();
            $table->foreign('dosen_dua_id')->references('id')->on('dosen');
            $table->integer('mahasiswa_id')->unsigned();
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
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
        Schema::table('tugas_akhir', function (Blueprint $table) {
            $table->dropForeign('tugas_akhir_periode_id_foreign');
            $table->dropColumn('periode_id');
            $table->dropForeign('tugas_akhir_mahasiswa_id_foreign');
            $table->dropColumn('mahasiswa_id');
            $table->dropForeign('tugas_akhir_dosen_dua_id_foreign');
            $table->dropColumn('dosen_dua_id');
            $table->dropForeign('tugas_akhir_dosen_satu_id_foreign');
            $table->dropColumn('dosen_satu_id');
        });
    }
}
