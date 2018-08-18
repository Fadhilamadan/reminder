<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateForeignkeySlot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('slot', function (Blueprint $table) {
            $table->integer('jenis_konsul_id')->unsigned();
            $table->foreign('jenis_konsul_id')->references('id')->on('jenis_konsul');
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
            $table->dropForeign('slot_jenis_konsul_id_foreign');
            $table->dropColumn('jenis_konsul_id');
        });
    }
}
