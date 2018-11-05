<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgrgaEstadoProyectoIdATrProyectos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tr_proyectos', function (Blueprint $table) {
            $table->unsignedInteger('estado_proyecto_id');
            $table->foreign('estado_proyecto_id')->references('id')->on('tr_estados_proyectos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tr_proyectos', function (Blueprint $table) {
            $table->dropForeign('tr_proyectos_estado_proyecto_id_foreign');
            $table->dropColumn('estado_proyecto_id');
        });
    }
}
