<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTareas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_tareas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('proyecto_id');
            $table->foreign('proyecto_id')->references('id')->on('tr_proyectos');
            $table->string('nombre_tarea');
            $table->string('desc_tarea');
            $table->date('fecha_est_inicio');
            $table->date('fecha_est_fin');
            $table->bigInteger('cant_horas_asig');
            $table->bigInteger('cant_horas_consum');
            $table->unsignedBigInteger('usuario_id')->comment('usuario que crea la tarea al proyecto');
            $table->foreign('usuario_id')->references('id_Usuarios')->on('cotz_usuarios');
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
        Schema::dropIfExists('tr_tareas');
    }
}
