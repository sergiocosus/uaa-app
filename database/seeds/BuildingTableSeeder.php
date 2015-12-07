<?php

use Illuminate\Database\Seeder;

class BuildingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buildings = json_decode('[
            {
                "name": "1",
                "latitude": "21.91358",
                "longitude": "-102.3139033"
            },
            {
                "name": "1A",
                "latitude": "21.9126107",
                "longitude": "-102.3124888"
            },
            {
                "name": "1B",
                "latitude": "21.9124566",
                "longitude": "-102.31507"
            },
            {
                "name": "2",
                "latitude": "21.9140716",
                "longitude": "-102.314275"
            },
            {
                "name": "3",
                "latitude": "21.9142333",
                "longitude": "-102.3140749"
            },
            {
                "name": "4",
                "latitude": "21.9146816",
                "longitude": "-102.3139016"
            },
            {
                "name": "5",
                "latitude": "21.9147016",
                "longitude": "-102.3140783"
            },
            {
                "name": "6",
                "latitude": "21.9156933",
                "longitude": "-102.3141033"
            },
            {
                "name": "6A",
                "latitude": "21.9151683",
                "longitude": "-102.3143316"
            },
            {
                "name": "7",
                "latitude": "21.915115",
                "longitude": "-102.3151983"
            },
            {
                "name": "8",
                "latitude": "21.9155966",
                "longitude": "-102.3143783"
            },
            {
                "name": "8A",
                "latitude": "21.9157883",
                "longitude": "-102.3140883"
            },
            {
                "name": "9",
                "latitude": "21.914295",
                "longitude": "-102.3145383"
            },
            {
                "name": "10",
                "latitude": "21.9145483",
                "longitude": "-102.3149566"
            },
            {
                "name": "11",
                "latitude": "21.9146633",
                "longitude": "-102.3143666"
            },
            {
                "name": "12",
                "latitude": "21.9153833",
                "longitude": "-102.3149833"
            },
            {
                "name": "13",
                "latitude": "21.91554",
                "longitude": "-102.3144899"
            },
            {
                "name": "14",
                "latitude": "21.915975",
                "longitude": "-102.3151716"
            },
            {
                "name": "15",
                "latitude": "21.9151399",
                "longitude": "-102.3158983"
            },
            {
                "name": "16",
                "latitude": "21.91554",
                "longitude": "-102.3155566"
            },
            {
                "name": "17",
                "latitude": "21.9158616",
                "longitude": "-102.3155683"
            },
            {
                "name": "18",
                "latitude": "21.9148366",
                "longitude": "-102.3156216"
            },
            {
                "name": "19",
                "latitude": "21.9152283",
                "longitude": "-102.3159433"
            },
            {
                "name": "20",
                "latitude": "21.9156266",
                "longitude": "-102.3164433"
            },
            {
                "name": "21",
                "latitude": "21.9156733",
                "longitude": "-102.3157866283"
            },
            {
                "name": "22",
                "latitude": "21.9157566",
                "longitude": "-102.3166016"
            },
            {
                "name": "24",
                "latitude": "21.9152216",
                "longitude": "-102.3169"
            },
            {
                "name": "25",
                "latitude": "21.9154416",
                "longitude": "-102.3168766"
            },
            {
                "name": "26",
                "latitude": "21.91519",
                "longitude": "-102.3171833"
            },
            {
                "name": "27",
                "latitude": "21.9151933",
                "longitude": "-102.31709"
            },
            {
                "name": "28",
                "latitude": "21.915075",
                "longitude": "-102.3170333"
            },
            {
                "name": "29",
                "latitude": "21.9148849",
                "longitude": "-102.3173283"
            },
            {
                "name": "30",
                "latitude": "21.9143649",
                "longitude": "-102.3167699"
            },
            {
                "name": "31",
                "latitude": "21.9141483",
                "longitude": "-102.3165733"
            },
            {
                "name": "32",
                "latitude": "21.9155416",
                "longitude": "-102.3168266"
            },
            {
                "name": "33",
                "latitude": "21.914645",
                "longitude": "-102.3177099"
            },
            {
                "name": "34",
                "latitude": "21.9154816",
                "longitude": "-102.3176933"
            },
            {
                "name": "35",
                "latitude": "21.9149666",
                "longitude": "-102.3173149"
            },
            {
                "name": "36",
                "latitude": "21.9147716",
                "longitude": "-102.3173016"
            },
            {
                "name": "37",
                "latitude": "21.9142299",
                "longitude": "-102.3171266"
            },
            {
                "name": "38",
                "latitude": "21.9137349",
                "longitude": "-102.31724"
            },
            {
                "name": "39",
                "latitude": "21.9136716",
                "longitude": "-102.3162666"
            },
            {
                "name": "40",
                "latitude": "21.9152216",
                "longitude": "-102.31779"
            },
            {
                "name": "42",
                "latitude": "21.9151749",
                "longitude": "-102.317915"
            },
            {
                "name": "43",
                "latitude": "21.9145766",
                "longitude": "-102.3179083"
            },
            {
                "name": "44",
                "latitude": "21.9140466",
                "longitude": "-102.316825"
            },
            {
                "name": "45",
                "latitude": "21.9144716",
                "longitude": "-102.3177066"
            },
            {
                "name": "46",
                "latitude": "21.9137649",
                "longitude": "-102.3173099"
            },
            {
                "name": "47",
                "latitude": "21.9132533",
                "longitude": "-102.317395"
            },
            {
                "name": "48",
                "latitude": "21.9134166",
                "longitude": "-102.3173483"
            },
            {
                "name": "49",
                "latitude": "21.9131116",
                "longitude": "-102.3173"
            },
            {
                "name": "50",
                "latitude": "21.9129983",
                "longitude": "-102.3174016"
            },
            {
                "name": "51",
                "latitude": "21.9128516",
                "longitude": "-102.317235"
            },
            {
                "name": "52",
                "latitude": "21.9130983",
                "longitude": "-102.316935"
            },
            {
                "name": "53",
                "latitude": "21.9134266",
                "longitude": "-102.316375"
            },
            {
                "name": "54",
                "latitude": "21.9121133",
                "longitude": "-102.3153466"
            },
            {
                "name": "55",
                "latitude": "21.9135183",
                "longitude": "-102.3157933"
            },
            {
                "name": "56",
                "latitude": "21.9128416",
                "longitude": "-102.3154383"
            },
            {
                "name": "57",
                "latitude": "21.91259",
                "longitude": "-102.31646"
            },
            {
                "name": "58",
                "latitude": "21.912875",
                "longitude": "-102.3165816"
            },
            {
                "name": "59",
                "latitude": "21.9125616",
                "longitude": "-102.3169933"
            },
            {
                "name": "62",
                "latitude": "21.912305",
                "longitude": "-102.3147666"
            },
            {
                "name": "biblioteca",
                "latitude": "21.9128266",
                "longitude": "-102.3144583"
            },
            {
                "name": "221 (polivalente)",
                "latitude": "21.9115338",
                "longitude": "-102.3125019"
            },
            {
                "name": "214(DAFI)",
                "latitude": "21.9115917",
                "longitude": "-102.3141417"
            },
            {
                "name": "211 (CAADI)",
                "latitude": "21.9113865",
                "longitude": "-102.3142735"
            },
            {
                "name": "205",
                "latitude": "21.9114577",
                "longitude": "-102.3152088"
            },
            {
                "name": "209 (Alberca)",
                "latitude": "21.9114577",
                "longitude": "-102.3152088"
            },
            {
                "name": "TV UAA (206)",
                "latitude": "21.9111139",
                "longitude": "-102.3150553"
            },
            {
                "name": "207",
                "latitude": "21.9103253",
                "longitude": "-102.3153762"
            },
            {
                "name": "204-b",
                "latitude": "21.9103999",
                "longitude": "-102.3160186"
            },
            {
                "name": "204",
                "latitude": "21.910542",
                "longitude": "-102.3162775"
            },
            {
                "name": "203",
                "latitude": "21.9107219",
                "longitude": "-102.3165182"
            },
            {
                "name": "202",
                "latitude": "21.911038",
                "longitude": "-102.3162444"
            },
            {
                "name": "213",
                "latitude": "21.9110195",
                "longitude": "-102.3144851"
            },
            {
                "name": "212",
                "latitude": "21.9108106",
                "longitude": "-102.3144992"
            },
            {
                "name": "Cancha",
                "latitude": "21.9112805",
                "longitude": "-102.3143876"
            },
            {
                "name": "222",
                "latitude": "21.9114947",
                "longitude": "-102.312551"
            },
            {
                "name": "223",
                "latitude": "21.9110784",
                "longitude": "-102.3123403"
            },
            {
                "name": "Salon Usos Multiples (219)",
                "latitude": "21.9106818",
                "longitude": "-102.3125488"
            }
        ]',true);

        DB::table('buildings')->insert($buildings);
    }
}
