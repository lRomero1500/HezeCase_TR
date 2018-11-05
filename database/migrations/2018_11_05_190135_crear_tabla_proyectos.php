<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProyectos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_proyectos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_proyecto');
            $table->unsignedBigInteger('usuario_id')->comment('usuario que crea el proyecto');
            $table->foreign('usuario_id')->references('id_Usuarios')->on('cotz_usuarios');
            $table->date('fecha_est_inicio');
            $table->date('fecha_est_fin');
            $table->bigInteger('cant_horas_total_asig');
            $table->bigInteger('cant_horas_total_consum');
            $table->boolean('activo')->comment('estado actvo o inactvo del proyecto');
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
        Schema::dropIfExists('tr_proyectos');
    }
}
