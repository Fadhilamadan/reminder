<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignToSlot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('slot', function (Blueprint $table) {
            $table->integer('mahasiswa_id')->unsigned()->nullable();
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
            $table->integer('dosen_id')->unsigned()->nullable();
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
        Schema::table('slot', function (Blueprint $table) {
            $table->dropForeign('slot_dosen_id_foreign');
            $table->dropColumn('dosen_id');
            $table->dropForeign('slot_mahasiswa_id_foreign');
            $table->dropColumn('mahasiswa_id');
        });
    }
}
