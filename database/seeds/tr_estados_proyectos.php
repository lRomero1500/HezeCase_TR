<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tr_estados_proyectos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tr_estados_proyectos')->insert([
            'nombre_estado'=>'Creado'
        ]);
        DB::table('tr_estados_tareas')->insert([
            'nombre_estado'=>'Creado'
        ]);
        DB::table('tr_operaciones_logs')->insert([
           ['nombre_operacion'=>'Crea'],
           ['nombre_operacion'=>'Actualiza'],
           ['nombre_operacion'=>'Elimina']
        ]);
    }
}
