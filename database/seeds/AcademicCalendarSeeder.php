<?php

use Illuminate\Database\Seeder;

class AcademicCalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode('[
          {
            "id":1,
            "fecha_inicio":"2015-11-30 17:31:35",
            "fecha_fin":"2015-12-11 00:00:02",
            "nombre":"Periodo de examenes",
            "esExamen":0
          },
          {
            "id":2,
            "fecha_inicio":"2015-12-04 00:00:00",
            "fecha_fin":"2015-12-08 09:37:30",
            "nombre":"Periodo Sistemas Electrónicos",
            "esExamen":1
          },
          {
            "id":3,
            "fecha_inicio":"2016-01-11 00:00:00",
            "fecha_fin":"2016-01-19 00:00:00",
            "nombre":"Registro y Pago de Carga Académica",
            "esExamen":0
          },
          {
            "id":4,
            "fecha_inicio":"2015-12-06 00:00:00",
            "fecha_fin":"2015-12-06 00:00:00",
            "nombre":"Inicio",
            "esExamen":0
          },
          {
            "id":5,
            "fecha_inicio":"2016-06-04 00:00:00",
            "fecha_fin":"2016-06-04 00:00:00",
            "nombre":"Clausura",
            "esExamen":0
          },
          {
            "id":6,
            "fecha_inicio":"2016-06-06 00:00:00",
            "fecha_fin":"2016-06-18 00:00:00",
            "nombre":"Exámenes ordinarios",
            "esExamen":0
          },
          {
            "id":7,
            "fecha_inicio":"2016-06-27 00:00:00",
            "fecha_fin":"2016-06-27 00:00:00",
            "nombre":"Entrega de resultados",
            "esExamen":0
          },
          {
            "id":8,
            "fecha_inicio":"2016-06-27 00:00:00",
            "fecha_fin":"2016-07-01 00:00:00",
            "nombre":"Solicitud de exámenes extraordinarios",
            "esExamen":0
          },
          {
            "id":9,
            "fecha_inicio":"2016-07-25 00:00:00",
            "fecha_fin":"2016-08-02 00:00:00",
            "nombre":"Aplicación de exámenes extraordinarios",
            "esExamen":0
          },
          {
            "id":10,
            "fecha_inicio":"2016-08-11 00:00:00",
            "fecha_fin":"2016-08-11 00:00:00",
            "nombre":"Entrega de resultados de exámenes extraordinarios",
            "esExamen":0
          },
          {
            "id":11,
            "fecha_inicio":"2016-04-04 00:00:00",
            "fecha_fin":"2016-04-08 00:00:00",
            "nombre":"Pre registro admisión",
            "esExamen":0
          },
          {
            "id":12,
            "fecha_inicio":"2016-04-11 00:00:00",
            "fecha_fin":"2016-04-15 00:00:00",
            "nombre":"Entrega de documentos admisión",
            "esExamen":0
          },
          {
            "id":13,
            "fecha_inicio":"2016-05-21 00:00:00",
            "fecha_fin":"2016-05-21 00:00:00",
            "nombre":"Aplicación de examen de admisión UAA",
            "esExamen":0
          },
          {
            "id":14,
            "fecha_inicio":"2016-06-18 00:00:00",
            "fecha_fin":"2016-06-18 00:00:00",
            "nombre":"Publicación de aceptados",
            "esExamen":0
          },
          {
            "id":15,
            "fecha_inicio":"2016-07-18 00:00:00",
            "fecha_fin":"2016-07-22 00:00:00",
            "nombre":"Inscripciones",
            "esExamen":0
          },
          {
            "id":16,
            "fecha_inicio":"2015-12-02 00:00:00",
            "fecha_fin":"2015-12-10 00:00:00",
            "nombre":"Periodo Matemáticas",
            "esExamen":1
          },
          {
            "id":17,
            "fecha_inicio":"2015-12-01 00:00:00",
            "fecha_fin":"2015-12-11 00:00:00",
            "nombre":"Periodo Finanzas",
            "esExamen":1
          },
          {
            "id":18,
            "fecha_inicio":"2015-12-20 00:00:00",
            "fecha_fin":"2015-12-10 00:00:00",
            "nombre":"Periodo Física",
            "esExamen":1
          }
        ]');

        foreach ($data as $item) {
            if(!$item->esExamen) {
                DB::table('academic_calendars')->insert([
                    'name' => $item->nombre,
                    'begin_at' => $item->fecha_inicio,
                    'end_at' => $item->fecha_fin,
                ]);
            }
        }
    }
}
