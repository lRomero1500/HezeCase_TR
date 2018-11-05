<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgrgaEstadoTareaIdATrTareas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tr_tareas', function (Blueprint $table) {
            $table->unsignedInteger('estado_tarea_id');
            $table->foreign('estado_tarea_id')->references('id')->on('tr_estados_tareas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tr_tareas', function (Blueprint $table) {
            $table->dropForeign('tr_tareas_estado_tarea_id_foreign');
            $table->dropColumn('estado_tarea_id');
        });
    }
}
