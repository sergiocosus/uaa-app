<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            [
                'name' => 'Programación de dispositivos móviles',
            ],
            [
                'name' => 'Ingeniería de Software',
            ],
            [
                'name' => 'Legislación en informática',
            ],
            [
                'name' => 'Administración de Operaciones',
            ],
            [
                'name' => 'Bases de datos distribuidas',
            ],
            [
                'name' => 'Programación de interfaces',
            ],
            [
                'name' => 'Seminario de Sistemas computacionales',
            ],
            [
                'name' => 'Sistemas Avanzados',
            ],
            [
                'name' => 'Cálculo Diferencial',
            ],
            [
                'name' => 'Cálculo Integral',
            ],
            [
                'name' => 'Calculo Vectorial',
            ],
            [
                'name' => 'Programación I',
            ],
            [
                'name' => 'Programación II',
            ],
            [
                'name' => 'Programación III',
            ],
            [
                'name' => 'Programación de Sistemas',
            ],
            [
                'name' => 'Física I',
            ],
            [
                'name' => 'Física II',
            ],

        ]);
    }
}
