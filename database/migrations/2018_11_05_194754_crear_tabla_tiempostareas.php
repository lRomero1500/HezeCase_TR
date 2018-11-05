<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTiempostareas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_tiempostareas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tarea_id');
            $table->foreign('tarea_id')->references('id')->on('tr_tareas');
            $table->unsignedBigInteger('usuario_id')->comment('usuario que inicia la tarea');
            $table->foreign('usuario_id')->references('id_Usuarios')->on('cotz_usuarios');
            $table->string('comentario_inicio')->comment('comentario de novedad antes de iniciar la tarea');
            $table->string('comentario_fin')->comment('comentario de novedades al finalizar la tarea');
            $table->dateTime('fechainicio')->comment('fecha y hora en la que inicia la tarea');
            $table->dateTime('fechaHoraFin')->comment('fecha y hora de finalizacion de la tarea');
            $table->bigInteger('tiempoTranscurrido')->comment('diferencia en horas entre fecha inicio y fecha fin de la tarea');
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
        Schema::dropIfExists('tr_tiempostareas');
    }
}
