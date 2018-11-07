<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('desc_logs')->comment('descripcion de operacion');
            $table->unsignedBigInteger('usuario_id');
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
        Schema::dropIfExists('tr_logs');
    }
}
