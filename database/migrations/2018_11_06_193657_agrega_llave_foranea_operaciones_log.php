<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregaLlaveForaneaOperacionesLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tr_logs', function (Blueprint $table) {
            $table->unsignedInteger('operaciones_log_id');
            $table->foreign('operaciones_log_id')->references('id')->on('tr_operaciones_logs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tr_logs', function (Blueprint $table) {
            $table->dropForeign('tr_logs_operaciones_log_id_foreign');
        });
    }
}
