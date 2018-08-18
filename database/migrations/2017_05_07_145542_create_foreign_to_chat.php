<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignToChat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chat', function (Blueprint $table) {
            $table->integer('mahasiswa_id')->unsigned();
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
            $table->integer('dosen_id')->unsigned();
            $table->foreign('dosen_id')->references('id')->on('dosen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chat', function (Blueprint $table) {
            $table->dropForeign('chat_dosen_id_foreign');
            $table->dropColumn('dosen_id');
            $table->dropForeign('chat_mahasiswa_id_foreign');
            $table->dropColumn('mahasiswa_id');
        });
    }
}
