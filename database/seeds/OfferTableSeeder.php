<?php

use Illuminate\Database\Seeder;

class OfferTableSeeder extends Seeder
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
            "name":"Ingeniero Agrónomo",
            "center":"Centro de Ciencias Agropeciarias",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_agropecuarias/ing_agronomo.pdf",
            "campus":0
          },
          {
            "id":2,
            "name":"Ingeniería Agroindustrial",
            "center":"Centro de Ciencias Agropeciarias",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_agropecuarias/ing_agroindustrial.pdf",
            "campus":0
          },
          {
            "id":3,
            "name":"Medicina Veterinaria y Zootécnia",
            "center":"Centro de Ciencias Agropeciarias",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_agropecuarias/medico_veterinario_zootecnista.pdf",
            "campus":0
          },
          {
            "id":4,
            "name":"Licenciatura en Artes ",
            "center":"Centro de las Artes y la Cultura",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/artes_y_cultura/artes_cinematograficas.pdf",
            "campus":0
          },
          {
            "id":5,
            "name":"Licenciatura en Artes Escénicas: Actuación",
            "center":"Centro de las Artes y la Cultura",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/artes_y_cultura/lic_artes_escenicas.pdf",
            "campus":0
          },
          {
            "id":6,
            "name":"Licenciatura en Ciencias del Arte y Gestión Cultural",
            "center":"Centro de las Artes y la Cultura",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/artes_y_cultura/lic_en_ciencias_del_arte_gestion_cultural.pdf",
            "campus":0
          },
          {
            "id":7,
            "name":"Licenciatura en Letras Hispánicas",
            "center":"Centro de las Artes y la Cultura",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/artes_y_cultura/lic_letras_hispanicas.pdf",
            "campus":0
          },
          {
            "id":8,
            "name":"Licenciatura en Música",
            "center":"Centro de las Artes y la Cultura",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/artes_y_cultura/lic_en_musica.pdf",
            "campus":0
          },
          {
            "id":9,
            "name":"Licenciatura en Biología",
            "center":"Centro de Ciencias Básicas",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_basicas/biologia.pdf",
            "campus":0
          },
          {
            "id":10,
            "name":"Licenciatura en Biotecnología",
            "center":"Centro de Ciencias Básicas",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_basicas/lic_en_biotecnologia.pdf",
            "campus":0
          },
          {
            "id":11,
            "name":"Ingeniero Bioquímico",
            "center":"Centro de Ciencias Básicas",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_basicas/ing_bioquimico.pdf",
            "campus":0
          },
          {
            "id":12,
            "name":"Ingeniero en Electrónica",
            "center":"Centro de Ciencias Básicas",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_basicas/ing_electronica.pdf",
            "campus":0
          },
          {
            "id":13,
            "name":"Ingeniero en Computación Inteligente",
            "center":"Centro de Ciencias Básicas",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_basicas/ing_computacion_inteligente.pdf",
            "campus":0
          },
          {
            "id":14,
            "name":"Ingeniero en Sistemas Computaciones, la más chida de todas :D",
            "center":"Centro de Ciencias Básicas\n",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_basicas/ing_sist_computacionales.pdf",
            "campus":0
          },
          {
            "id":15,
            "name":"Ingeniero Industrial Estadístico",
            "center":"Centro de Ciencias Básicas",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_basicas/ing_industrial_estadistico.pdf",
            "campus":0
          },
          {
            "id":16,
            "name":"Lic. en Análisis Químico-Biológicos",
            "center":"Centro de Ciencias Básicas",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_basicas/lic_analisis_quimico_biologico.pdf",
            "campus":0
          },
          {
            "id":17,
            "name":"Lic. en Ciencias Ambientales",
            "center":"Centro de Ciencias Básicas",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_basicas/lic_ciencias_ambientales.pdf",
            "campus":0
          },
          {
            "id":18,
            "name":"Lic. en Matemáticas Aplicadas",
            "center":"Centro de Ciencias Básicas",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_basicas/lic_matematicas_aplicadas.pdf",
            "campus":0
          },
          {
            "id":19,
            "name":"Licenciatura en Informática y Tecnologías Computacionales",
            "center":"Centro de Ciencias Básicas",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_basicas/lic_tecnologias_informacion.pdf",
            "campus":0
          },
          {
            "id":20,
            "name":"Arquitectura",
            "center":"Cento de Ciencias del Diseño y de la Construcción",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_dis_const/arquitectura.pdf",
            "campus":0
          },
          {
            "id":21,
            "name":"Diseño Gráfico",
            "center":"Cento de Ciencias del Diseño y de la Construcción",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_dis_const/lic_dis_grafico.pdf",
            "campus":0
          },
          {
            "id":22,
            "name":"Diseño Industrial",
            "center":"Cento de Ciencias del Diseño y de la Construcción",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_dis_const/lic_dis_industrial.pdf",
            "campus":0
          },
          {
            "id":23,
            "name":"Diseño de Interiores",
            "center":"Cento de Ciencias del Diseño y de la Construcción",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_dis_const/lic_dis_interiores.pdf",
            "campus":0
          },
          {
            "id":24,
            "name":"Diseño de Moda en Indumentaria y Textiles",
            "center":"Cento de Ciencias del Diseño y de la Construcción",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_dis_const/lic_dis_moda_indumentaria_textiles.pdf",
            "campus":0
          },
          {
            "id":25,
            "name":"Ing. Civil / Civil Engineering",
            "center":"Cento de Ciencias del Diseño y de la Construcción",
            "url":"http://www.uaa.mx/centros/ccdc/catalogo/civil_curriculum.pdf",
            "campus":0
          },
          {
            "id":26,
            "name":"Urbanismo",
            "center":"Cento de Ciencias del Diseño y de la Construcción",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_dis_const/lic_urbanismo.pdf",
            "campus":0
          },
          {
            "id":27,
            "name":"Lic. en Administración de Empresas",
            "center":"Centro de Ciencias Económicas y Administrativas",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/cencias_economicas_administrativas/lic_administracion_empresas.pdf",
            "campus":0
          },
          {
            "id":28,
            "name":"Lic. en Administración Financiera",
            "center":"Centro de Ciencias Económicas y Administrativas",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/cencias_economicas_administrativas/lic_admon_financiera.pdf",
            "campus":0
          },
          {
            "id":29,
            "name":"Lic. en Administración de la Producción y Servicios",
            "center":"Centro de Ciencias Económicas y Administrativas",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/cencias_economicas_administrativas/lic_admon_produccion_y_serv.pdf",
            "campus":0
          },
          {
            "id":30,
            "name":"Contador Público",
            "center":"Centro de Ciencias Económicas y AdministrativasCentro de Ciencias Ecpnómicas y Administrativas\n",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/cencias_economicas_administrativas/contador_publico.pdf",
            "campus":0
          },
          {
            "id":31,
            "name":"Licenciatura en Comercio Internacional",
            "center":"Centro de Ciencias Económicas y Administrativas",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/cencias_economicas_administrativas/lic_comercio_internacional.pdf",
            "campus":0
          },
          {
            "id":32,
            "name":"Lic. en Economía",
            "center":"Centro de Ciencias Económicas y AdministrativasCentro de Ciencias Ecpnómicas y Administrativas\n",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/cencias_economicas_administrativas/lic_economia.pdf",
            "campus":0
          },
          {
            "id":33,
            "name":"Lic. en Gestión Turística",
            "center":"Centro de Ciencias Económicas y Administrativas",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/cencias_economicas_administrativas/lic_gestion_turistica.pdf",
            "campus":0
          },
          {
            "id":34,
            "name":"Lic. en Mercadotecnia",
            "center":"Centro de Ciencias Económicas y Administrativas",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/cencias_economicas_administrativas/lic_mercadotecnia.pdf",
            "campus":0
          },
          {
            "id":35,
            "name":"Lic. en Relaciones Industriales",
            "center":"Centro de Ciencias Económicas y Administrativas",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/cencias_economicas_administrativas/lic_relaciones_ind.pdf",
            "campus":0
          },
          {
            "id":36,
            "name":"Licenciatura en Agronegocios",
            "center":"Centro de Ciencias Empresariales",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_empresariales/lic_agronegocios.pdf",
            "campus":1
          },
          {
            "id":37,
            "name":"Licenciatura en Comercio Electrónico",
            "center":"Centro de Ciencias Empresariales",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_empresariales/comercio_electronico.pdf",
            "campus":1
          },
          {
            "id":38,
            "name":"Lic. en Logística Empresarial",
            "center":"Centro de Ciencias Empresariales",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_empresariales/logistica_empresarial.pdf",
            "campus":1
          },
          {
            "id":39,
            "name":"Lic. en Admón. y Gestión Fiscal de Pymes",
            "center":"Centro de Ciencias Empresariales",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_empresariales/pymes.pdf",
            "campus":1
          },
          {
            "id":40,
            "name":"Ingeniería Automotriz",
            "center":"Centro de Ciencias de la Ingeniería",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_de_la_ingenieria/ing_automotriz.pdf",
            "campus":1
          },
          {
            "id":41,
            "name":"Ingeniería Biomédica",
            "center":"Centro de Ciencias de la Ingeniería",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_de_la_ingenieria/ing_biomedica.pdf",
            "campus":1
          },
          {
            "id":42,
            "name":"Ingeniería Robótica",
            "center":"Centro de Ciencias de la Ingeniería\n",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_de_la_ingenieria/ing_robotica.pdf",
            "campus":1
          },
          {
            "id":43,
            "name":"Ingeniería en Diseño Mecánico",
            "center":"Centro de Ciencias de la Ingeniería",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_de_la_ingenieria/dis_mecanico.pdf",
            "campus":1
          },
          {
            "id":44,
            "name":"Ingeniería en Energías Renovables",
            "center":"Centro de Ciencias de la Ingeniería",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_de_la_ingenieria/energias_renovables.pdf",
            "campus":1
          },
          {
            "id":45,
            "name":"Ingeniería en Manufactura y Automatización Industrial",
            "center":"Centro de Ciencias de la Ingeniería",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_de_la_ingenieria/ing_manufactura_auto_ind.pdf",
            "campus":1
          },
          {
            "id":46,
            "name":"Lic. en Cultura Física y Deporte",
            "center":"Centro de Ciencias de la Salud",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_biomedicas/lic_cultura_fisica_y_deporte.pdf",
            "campus":0
          },
          {
            "id":47,
            "name":"Lic. en Enfermería",
            "center":"Centro de Ciencias de la Salud",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_biomedicas/lic_en_enfermeria.pdf",
            "campus":0
          },
          {
            "id":48,
            "name":"Lic. en Nutrición",
            "center":"Centro de Ciencias de la Salud\n",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_biomedicas/lic_nutricion.pdf",
            "campus":0
          },
          {
            "id":49,
            "name":"Lic. en Optometría",
            "center":"Centro de Ciencias de la Salud",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_biomedicas/lic_optometria.pdf",
            "campus":0
          },
          {
            "id":50,
            "name":"Lic. en Salud Pública",
            "center":"Centro de Ciencias de la Salud",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_biomedicas/lic_salud_publica.pdf",
            "campus":0
          },
          {
            "id":51,
            "name":"Lic. en Terapia Física",
            "center":"Centro de Ciencias de la Salud",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_biomedicas/lic_en_terapia_fisica.pdf",
            "campus":0
          },
          {
            "id":52,
            "name":"Médico Cirujano",
            "center":"Centro de Ciencias de la Salud",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_biomedicas/medico_cirujano.pdf",
            "campus":0
          },
          {
            "id":53,
            "name":"Médico Estomatólogo",
            "center":"Centro de Ciencias de la Salud",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_biomedicas/medico_estomatologo.pdf",
            "campus":0
          },
          {
            "id":54,
            "name":"Lic. en Asesoría Psicopedagógica",
            "center":"Centro de Ciencias Sociales y Humanidades",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_sociales_humanidades/lic_asesoria_psicopedagogica.pdf",
            "campus":0
          },
          {
            "id":55,
            "name":"Lic. en Ciencias Políticas y Administración Pública",
            "center":"Centro de Ciencias Sociales y Humanidades",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_sociales_humanidades/lic_ciencias_politicas.pdf",
            "campus":0
          },
          {
            "id":56,
            "name":"Lic. en Comunicación e Información",
            "center":"Centro de Ciencias Sociales y Humanidades",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_sociales_humanidades/lic_comunicacion_informacion.pdf",
            "campus":0
          },
          {
            "id":57,
            "name":"Lic. en Comunicación Organizacional",
            "center":"Centro de Ciencias Sociales y Humanidades",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_sociales_humanidades/lic_comunicacion_org.pdf",
            "campus":0
          },
          {
            "id":58,
            "name":"Lic. en Derecho",
            "center":"Centro de Ciencias Sociales y Humanidades",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_sociales_humanidades/lic_derecho.pdf",
            "campus":0
          },
          {
            "id":59,
            "name":"Licenciatura en Docencia de Francés y Español como Lenguas Extranjeras",
            "center":"Centro de Ciencias Sociales y Humanidades",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_sociales_humanidades/docencia_frances_espanol.pdf",
            "campus":0
          },
          {
            "id":60,
            "name":"Lic. en Enseñanza del Inglés",
            "center":"Centro de Ciencias Sociales y Humanidades",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_sociales_humanidades/lic_ens_ingles.pdf",
            "campus":0
          },
          {
            "id":61,
            "name":"Lic. en Filosofía",
            "center":"Centro de Ciencias Sociales y Humanidades",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_sociales_humanidades/lic_filosofia.pdf",
            "campus":0
          },
          {
            "id":62,
            "name":"Lic. en Historia",
            "center":"Centro de Ciencias Sociales y Humanidades",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_sociales_humanidades/lic_historia.pdf",
            "campus":0
          },
          {
            "id":63,
            "name":"Lic. en Psicología",
            "center":"Centro de Ciencias Sociales y Humanidades",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_sociales_humanidades/lic_psicologia.pdf",
            "campus":0
          },
          {
            "id":64,
            "name":"Lic. en Sociología",
            "center":"Centro de Ciencias Sociales y Humanidades",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_sociales_humanidades/lic_sociologia.pdf",
            "campus":0
          },
          {
            "id":65,
            "name":"Lic. en Trabajo Social",
            "center":"Centro de Ciencias Sociales y Humanidades",
            "url":"http://www.uaa.mx/direcciones/dgdp/catalogo/ciencias_sociales_humanidades/lic_trabajo_social.pdf",
            "campus":0
          }
        ]');

        foreach ($data as $item) {
            DB::table('offers')->insert([
               'name' => $item->name,
                'educative_center' => $item->center,
                'url' => $item->url,
                'campus' => $item->campus?'Sur':'Central',
            ]);
        }

    }
}
