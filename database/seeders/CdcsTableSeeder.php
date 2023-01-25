<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdcsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('cdcs')->delete();
        
        DB::table('cdcs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CLI CC PALMETO PLAZA L1-71',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI MZL EXITO FUNDADORES',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CENTRO CARRERA 9',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIR VENTAS NACIONALES NORTE',
                'boss_id' => '',
                'regional_id' => 12,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y YAH YPL CASANARE YOPAL',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG ALAMOS INDUSTRIAL',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BAQ EXITO SAN FRANCISCO',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BEL CC PLAZA FABRICATO BELLO',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI MDR CC CASA BLANCA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y NDS CUC CLL12',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP SGM SOGAMOSO CLL 13',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP FSG CENTRO CLL 8',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG KENNEDY CLL 37 SUR',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BGA CC CARACOLI',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CUC CC JARDIN PLAZA L-74',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC SAN RAFAEL',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            16 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP SBN MAYORCA ETAPA 2 L-2021',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            17 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI CTG EXITO SAN DIEGO',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            18 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG NUESTRO BOGOTA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            19 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y BOG CIUDAD MONTE',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            20 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI VUP CC MAYALES',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            21 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC TINTAL PLAZA L-119',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            22 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y BOG CALIMA L-B-051-053-055-057',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            23 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y BOG CALLE 93 DELIVERIES',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            24 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP DTM CC LIBERTADORES L-102',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            25 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'CTZ BOG CANAL TRADICIONAL',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            26 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MDE CC ARKADIA L-318',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            27 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG GAITANA CRA 126A',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            28 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YAHAD BOG MEGAAMERICAS',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            29 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIR VENTAS NACIONALES CENTRO',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            30 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BGA CC ACROPOLIS L-156-157',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            31 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP TNJ CC VIVA TUNJA L-128',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            32 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'ESTABILIDAD LABORAL VENTA NACIONAL',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            33 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CLD CALDAS CRA 49',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            34 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC GRAN PLAZA ENSUEÑO L-158',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            35 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI VUP EXITO VALLEDUPAR CENTRO',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            36 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC MILENIO L-130',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            37 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CLI CC COSMOCENTRO L-2G',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            38 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP IPI CENTRO CRA 5',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            39 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BAQ EXITO MURILLO BARRANQUILLA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            40 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI PSO CC UNICO PASTO',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            41 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BEL CC PUERTA DEL NORTE',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            42 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI EXITO ANT MEDELLIN MOLINOS',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            43 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI VUP AEROP ALFONSO LOPEZ',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            44 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'ESTABILIDAD LABORAL RETAIL LILI',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            45 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG CC PLAZA DE LAS AMERICAS L-10-37',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            46 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y BUC CLL36',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            47 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CHAPINERO CLL 60',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            48 => 
            array (
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG CC GRAN PLAZA ENSUEÑO L-159',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            49 => 
            array (
                'id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI SBN MAYORCA ETAPA 1 L-3237',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            50 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG CC GRAN PLAZA BOSA',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            51 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CLI SANTIAGO PLAZA CALI',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            52 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI EXITO ANT MED BELEN',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            53 => 
            array (
                'id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI CUC CC JARDIN PLAZA',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            54 => 
            array (
                'id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MDR CC CASA BLANCA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            55 => 
            array (
                'id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI SMR CC ARRECIFE',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            56 => 
            array (
                'id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO OCCIDENTE',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            57 => 
            array (
                'id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CLI LUNA CLL 13',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            58 => 
            array (
                'id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BGA EXITO LA ROSITA',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            59 => 
            array (
                'id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP SMR CC ZAZUE L-1-21',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            60 => 
            array (
                'id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI CTG CARIBE PLAZA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            61 => 
            array (
                'id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LILI&YOI YAHAD EXITO ANT MED LA 70',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            62 => 
            array (
                'id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI CTG EXITO CARTAGENA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            63 => 
            array (
                'id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC PLAZA IMPERIAL L-1-167',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            64 => 
            array (
                'id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MDE CC DE MODA OUTLET L-N-106',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            65 => 
            array (
                'id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC LA FLORESTA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            66 => 
            array (
                'id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP SOL CC NUESTRO ATLANTICO L-1013',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            67 => 
            array (
                'id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y YAH SAD SAN ANDRES',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            68 => 
            array (
                'id' => 69,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG VENECIA CRA 53',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            69 => 
            array (
                'id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP FLA CC GRAN PLAZA FLORENCIA',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            70 => 
            array (
                'id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LILI&YOI YAHAD BOG CC CONNECTA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            71 => 
            array (
                'id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP PSO CC IDEMA L-60',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            72 => 
            array (
                'id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y BOG FONTIBON',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            73 => 
            array (
                'id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP PLM CC LLANO GRANDE',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            74 => 
            array (
                'id' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIR VENTAS NACIONALES SUR',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            75 => 
            array (
                'id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YAHAD MED MAYORCA OUTLET',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            76 => 
            array (
                'id' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC PLAZA CENTRAL L-3-67-3-68',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            77 => 
            array (
                'id' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CLI CC LIMONAR L-134-135',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            78 => 
            array (
                'id' => 79,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP SCJ VIVA SINCELEJO',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            79 => 
            array (
                'id' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'ESTABILIDAD LABORAL RETAIL LILI',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            80 => 
            array (
                'id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC UNICENTRO DE OCCIDENTE L-130',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            81 => 
            array (
                'id' => 82,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI SCJ EXITO VIVA SINCELEJO',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            82 => 
            array (
                'id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LILI&YOI SCH YAHAD VENTURA SOACHA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            83 => 
            array (
                'id' => 84,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LILI&YOI YAHAD BOG RESTREPO CLL16',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            84 => 
            array (
                'id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YAHAD BOG FLORESTA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            85 => 
            array (
                'id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MDE CC VIVA LAURELES L-140',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            86 => 
            array (
                'id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI CARPA EVENTO VIL',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            87 => 
            array (
                'id' => 88,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG GALAN BOGOTA',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            88 => 
            array (
                'id' => 89,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BAQ CC PORTAL DEL PRADO L-1-97-98',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            89 => 
            array (
                'id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP SCH CC GRAN PLAZA SOACHA L-1-113',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            90 => 
            array (
                'id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'CEDI CANAIMA',
                'boss_id' => '',
                'regional_id' => 4,
            ),
            91 => 
            array (
                'id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CLI VALLE DE LILI',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            92 => 
            array (
                'id' => 93,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI CUC EXITO SAN MATEO',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            93 => 
            array (
                'id' => 94,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MTR CC ALAMEDAS L-A-191',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            94 => 
            array (
                'id' => 95,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP IPI ESTRELLA PRINCIPAL',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            95 => 
            array (
                'id' => 96,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI PSO EXITO PANAMERICANA',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            96 => 
            array (
                'id' => 97,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MDE LA PLAYA CLL 52',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            97 => 
            array (
                'id' => 98,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YAHAD UNICO CALI',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            98 => 
            array (
                'id' => 99,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG CHAPINERO CR13 - 63',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            99 => 
            array (
                'id' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC FACTORY L-1-38',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            100 => 
            array (
                'id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CHI LA LIBERTAD L-106-107',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            101 => 
            array (
                'id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO SUBA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            102 => 
            array (
                'id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC HAYUELOS JUMBO L-2001',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            103 => 
            array (
                'id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BAQ EXITO PANORAMA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            104 => 
            array (
                'id' => 105,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CLI CC UNICO L-509',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            105 => 
            array (
                'id' => 106,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG GALERIAS CLL 53 L-102',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            106 => 
            array (
                'id' => 107,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BAQ CC UNICO L-73',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            107 => 
            array (
                'id' => 108,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LILI&YOI YAHAD ANT MED CLL33',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            108 => 
            array (
                'id' => 109,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y YAH ZPQ ZIPAQUIRA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            109 => 
            array (
                'id' => 110,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BGA CC CARACOLI L336',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            110 => 
            array (
                'id' => 111,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP IBE CC MULTICENTRO L-2-34',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            111 => 
            array (
                'id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC HAYUELOS L-1-103',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            112 => 
            array (
                'id' => 113,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP SMR CC BUENAVISTA L-107',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            113 => 
            array (
                'id' => 114,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y YAH BOG TOBERIN',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            114 => 
            array (
                'id' => 115,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI ENV EXITO VIVA ENVIGADO',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            115 => 
            array (
                'id' => 116,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI CUC AEROPUERTO CAMILO DAZA',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            116 => 
            array (
                'id' => 117,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI CTG EXITO LA CASTELLANA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            117 => 
            array (
                'id' => 118,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC HEROES',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            118 => 
            array (
                'id' => 119,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO LAS NIEVES',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            119 => 
            array (
                'id' => 120,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC PLAZA DE LAS AMERICAS',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            120 => 
            array (
                'id' => 121,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI ARM EXITO UNICENTRO',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            121 => 
            array (
                'id' => 122,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP DQB CC UNICO L-32',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            122 => 
            array (
                'id' => 123,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CLI CC UNICO L-12C',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            123 => 
            array (
                'id' => 124,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CARPA AMERICAS PROM',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            124 => 
            array (
                'id' => 125,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI SMR EXITO BUENAVISTA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            125 => 
            array (
                'id' => 126,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI CUN CHIA EXITO FONTANAR',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            126 => 
            array (
                'id' => 127,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y YAH MDR MADRID',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            127 => 
            array (
                'id' => 128,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIR CCIAL ZONA NORTE RETAIL',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            128 => 
            array (
                'id' => 129,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP PTL CC SAN ANTONIO PLAZA L-182-183',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            129 => 
            array (
                'id' => 130,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BAQ CC UNICO BARRANQUILLA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            130 => 
            array (
                'id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BAQ CC METROPOLITANO L-203',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            131 => 
            array (
                'id' => 132,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BAQ VIVA BARRANQUILLA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            132 => 
            array (
                'id' => 133,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG CC PLAZA CENTRAL L-1-65',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            133 => 
            array (
                'id' => 134,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO AMERICAS',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            134 => 
            array (
                'id' => 135,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO FONTIBON',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            135 => 
            array (
                'id' => 136,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI PPN EXITO PANAMERICANA',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            136 => 
            array (
                'id' => 137,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOY DUITAMA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            137 => 
            array (
                'id' => 138,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MZL CC FUNDADORES L-308',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            138 => 
            array (
                'id' => 139,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC METROPOLIS L-120-A',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            139 => 
            array (
                'id' => 140,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CUC CC VENTURA PLAZA L-1-24',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            140 => 
            array (
                'id' => 141,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO FLORESTA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            141 => 
            array (
                'id' => 142,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LILI&YOI YAHAAD ATL BRQ CC PASEO',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            142 => 
            array (
                'id' => 143,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI CLI EXITO SIMON BOLIVAR',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            143 => 
            array (
                'id' => 144,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP SNT CC POBLADO PLAZA L-20-21',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            144 => 
            array (
                'id' => 145,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI RCH EXITO VIVA WAAJIRA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            145 => 
            array (
                'id' => 146,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP RCH CC VIVA WAAJIRA L-108',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            146 => 
            array (
                'id' => 147,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG CC PLAZA CENTRAL L-1-65',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            147 => 
            array (
                'id' => 148,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LILI&YOI BAQ YAHAD',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            148 => 
            array (
                'id' => 149,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BJA EXITO BARRANCABERMEJA',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            149 => 
            array (
                'id' => 150,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'ESTABILIDAD LABORAL RETAIL YOI',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            150 => 
            array (
                'id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP PSO CENTRO CLL 18',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            151 => 
            array (
                'id' => 152,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP PLM CC UNICENTRO L-1-51',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            152 => 
            array (
                'id' => 153,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI MDE CC PREMIUN PLAZA',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            153 => 
            array (
                'id' => 154,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CTG CC NAO L-28',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            154 => 
            array (
                'id' => 155,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIR VENTAS NACIONALES NORTE',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            155 => 
            array (
                'id' => 156,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BGA EXITO ORIENTAL CACIQUE',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            156 => 
            array (
                'id' => 157,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO CALLE 80',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            157 => 
            array (
                'id' => 158,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP PSO PLAZA DE NARIÑO',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            158 => 
            array (
                'id' => 159,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIR CCIAL ZONA CENTRO RETAIL',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            159 => 
            array (
                'id' => 160,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG SAN ANDRESITO SAN JOSE',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            160 => 
            array (
                'id' => 161,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI IPI CC GRAN PLAZA IPIALES L-206',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            161 => 
            array (
                'id' => 162,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'ESTABILIDAD LABORAL RETAIL LILI',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            162 => 
            array (
                'id' => 163,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP ANT ITAGUI OUT',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            163 => 
            array (
                'id' => 164,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG RESTREPO CLL 18 SUR',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            164 => 
            array (
                'id' => 165,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BAQ CENTRO CLL 37',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            165 => 
            array (
                'id' => 166,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP VIL CC UNICENTRO',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            166 => 
            array (
                'id' => 167,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP PSO CC UNICO L-26',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            167 => 
            array (
                'id' => 168,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIR VENTAS NACIONALES CENTRO',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            168 => 
            array (
                'id' => 169,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CLI CC NORTE L-17',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            169 => 
            array (
                'id' => 170,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI EXITO SANTA MARTA CENTRO',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            170 => 
            array (
                'id' => 171,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LILI&YOI YAHAAD CDB MON CLL13',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            171 => 
            array (
                'id' => 172,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y YAH ITA ITAGUI',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            172 => 
            array (
                'id' => 173,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI CTG EXITO MATUNA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            173 => 
            array (
                'id' => 174,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CHI CC FONTANAR',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            174 => 
            array (
                'id' => 175,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y YAHAAD OUTLET AV 68',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            175 => 
            array (
                'id' => 176,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BGA CC CACIQUE L-384-A',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            176 => 
            array (
                'id' => 177,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CASTILLA BOGOTA',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            177 => 
            array (
                'id' => 178,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC EL EDEN',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            178 => 
            array (
                'id' => 179,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP SCH SOACHA COMPARTIR',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            179 => 
            array (
                'id' => 180,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI SMR AEROP SIMON',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            180 => 
            array (
                'id' => 181,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO NUEVO KENNEDY',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            181 => 
            array (
                'id' => 182,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP VUP CC GUATAPURI',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            182 => 
            array (
                'id' => 183,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI SCJ CC GUACARI',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            183 => 
            array (
                'id' => 184,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y YAH BGA CRA 33 BUCARAMANGA',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            184 => 
            array (
                'id' => 185,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MDE CC MALL GUAYABAL L-04',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            185 => 
            array (
                'id' => 186,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP NVA CC UNICO L-29',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            186 => 
            array (
                'id' => 187,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CTG CC LA CASTELLANA L-93-94',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            187 => 
            array (
                'id' => 188,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP NVA CC SAN PEDRO',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            188 => 
            array (
                'id' => 189,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI MDE EXITO UNICENTRO',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            189 => 
            array (
                'id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI CLI EXITO CHIPICHAPE',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            190 => 
            array (
                'id' => 191,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MDE CC PREMIUM PLAZA L-2302',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            191 => 
            array (
                'id' => 192,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CLI CENTRO CLL 13 L-1-101-E',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            192 => 
            array (
                'id' => 193,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG SAN VICTORINO CRA 10',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            193 => 
            array (
                'id' => 194,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y YAH CLI ROOSEVELT',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            194 => 
            array (
                'id' => 195,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO USME',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            195 => 
            array (
                'id' => 196,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP VLT VILLETA CLL 5',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            196 => 
            array (
                'id' => 197,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BGA CC LA CUESTA L-149-150',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            197 => 
            array (
                'id' => 198,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y YAH IPI IPIALES',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            198 => 
            array (
                'id' => 199,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG CC ATLANTIS L-101-102',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            199 => 
            array (
                'id' => 200,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP PEI CC ARBOLEDA L-132A',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            200 => 
            array (
                'id' => 201,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BGA CC LA CUESTA L-242',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            201 => 
            array (
                'id' => 202,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BGA AEROPUERTO PALONEGRO BUC',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            202 => 
            array (
                'id' => 203,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO VILLA MAYOR',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            203 => 
            array (
                'id' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP GIR CENTRO CRA10',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            204 => 
            array (
                'id' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO GRAN ESTACION',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            205 => 
            array (
                'id' => 206,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LILI&YOI SCH YAHAD VENTURA SOACHA',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            206 => 
            array (
                'id' => 207,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'ESTABILIDAD LABORAL RETAIL YOI',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            207 => 
            array (
                'id' => 208,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BGA CC LA QUINTA',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            208 => 
            array (
                'id' => 209,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG PRADERA CLL 9 L-10',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            209 => 
            array (
                'id' => 210,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG SANTA LIBRADA CRA 14',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            210 => 
            array (
                'id' => 211,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG CC EL EDEN L-1-124',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            211 => 
            array (
                'id' => 212,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC PARQUE COLINA L-320',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            212 => 
            array (
                'id' => 213,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP PEI CENTRO CRA 7',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            213 => 
            array (
                'id' => 214,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG 20 DE JULIO CRA 6',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            214 => 
            array (
                'id' => 215,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG NUESTRO BOGOTA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            215 => 
            array (
                'id' => 216,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG CC PASEO DEL RIO L-245',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            216 => 
            array (
                'id' => 217,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI PEI UNICENTRO PEREIRA',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            217 => 
            array (
                'id' => 218,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CLL 82 CRA 15',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            218 => 
            array (
                'id' => 219,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI CTG CC MALLPLAZA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            219 => 
            array (
                'id' => 220,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BGA CALLE 37',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            220 => 
            array (
                'id' => 221,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP PSO CC UNICENTRO L-151',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            221 => 
            array (
                'id' => 222,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MTR LIA MONTERIA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            222 => 
            array (
                'id' => 223,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP IBE CC LA ESTACION L-2-02',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            223 => 
            array (
                'id' => 224,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CTG CC CARIBE PLAZA L-1-79-80',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            224 => 
            array (
                'id' => 225,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP IBE CC ACQUA L-203-204',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            225 => 
            array (
                'id' => 226,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y YAH CC NOVACENTRO PASTO',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            226 => 
            array (
                'id' => 227,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI IBE EXITO LA ESTACION',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            227 => 
            array (
                'id' => 228,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MET VLL PORFIA',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            228 => 
            array (
                'id' => 229,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG 7 DE AGOSTO CRA 24',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            229 => 
            array (
                'id' => 230,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO COLINA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            230 => 
            array (
                'id' => 231,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG LAS NIEVES CRA 7',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            231 => 
            array (
                'id' => 232,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP GIR CC UNICENTRO L-2-32',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            232 => 
            array (
                'id' => 233,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LILI&YOI YAHAD CAL MZL CC MALLPLAZA',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            233 => 
            array (
                'id' => 234,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI MDE EXITO POBLADO',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            234 => 
            array (
                'id' => 235,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MDE CC AVENTURA L-254',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            235 => 
            array (
                'id' => 236,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y YAHAD GRAN ESTACION BOGOTA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            236 => 
            array (
                'id' => 237,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG CENTRO COMERCIAL TUNAL',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            237 => 
            array (
                'id' => 238,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG MONTEVIDEO CLL 19 L-6',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            238 => 
            array (
                'id' => 239,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BAQ EXITO CALLE 77',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            239 => 
            array (
                'id' => 240,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BAQ PRADO CLL 72 L-9',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            240 => 
            array (
                'id' => 241,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP SOL CC PLAZA DEL SOL L-150',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            241 => 
            array (
                'id' => 242,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CUC CC UNICENTRO L-1-115 A',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            242 => 
            array (
                'id' => 243,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG DIVERPLAZA BOGOTA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            243 => 
            array (
                'id' => 244,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP YPL CC ALCARAVAN L-1-074',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            244 => 
            array (
                'id' => 245,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI CRC CC NUESTRO CARTAGO L-2-66A',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            245 => 
            array (
                'id' => 246,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI FLA CC GRANPZFLORENCIA L-244-245-246',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            246 => 
            array (
                'id' => 247,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC CENTRO MAYOR L-1-129',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            247 => 
            array (
                'id' => 248,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP VIL CC VIVA V/CENCIO L-152',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            248 => 
            array (
                'id' => 249,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIR CCIAL ZONA SUR RETAIL',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            249 => 
            array (
                'id' => 250,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CTG CC SAN FERNANDO L-1-21',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            250 => 
            array (
                'id' => 251,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MDE CC SAN DIEGO L-1551',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            251 => 
            array (
                'id' => 252,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LILIPINK CARPA CC UNICO CALI',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            252 => 
            array (
                'id' => 253,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI CLI EXITO SAN FERNANDO',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            253 => 
            array (
                'id' => 254,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'ESTABILIDAD LABORAL VENTA NACIONAL',
                'boss_id' => '',
                'regional_id' => 12,
            ),
            254 => 
            array (
                'id' => 255,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MDE CC LA CENTRAL L-257',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            255 => 
            array (
                'id' => 256,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'ESTABILIDAD LABORAL RETAIL LILI',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            256 => 
            array (
                'id' => 257,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YAHAD CARPA BOG CANAIMA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            257 => 
            array (
                'id' => 258,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP SMR CC OCEAN MALL',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            258 => 
            array (
                'id' => 259,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP SMR CC ARRECIFE L-104',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            259 => 
            array (
                'id' => 260,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BGA CC MEGAMALL L-20-21',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            260 => 
            array (
                'id' => 261,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP SCH CENTRO L-36 A',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            261 => 
            array (
                'id' => 262,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG QUIRIGUA TRV 94',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            262 => 
            array (
                'id' => 263,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP RNG CC SAN NICOLAS L-3307',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            263 => 
            array (
                'id' => 264,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CTG LA PLAZUELA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            264 => 
            array (
                'id' => 265,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP IPI CC GRAN PLAZA IPIALES L-118',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            265 => 
            array (
                'id' => 266,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI VUP EXITO LAS FLORES',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            266 => 
            array (
                'id' => 267,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG 7 DE AGOSTO CRA 24',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            267 => 
            array (
                'id' => 268,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MDE CENTRO JUNIN',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            268 => 
            array (
                'id' => 269,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BEL BELLO CLL 51',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            269 => 
            array (
                'id' => 270,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG CC PORTAL 80 L-3-003',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            270 => 
            array (
                'id' => 271,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CTG DOLORES',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            271 => 
            array (
                'id' => 272,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP LPT LOS PATIOS AV 10',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            272 => 
            array (
                'id' => 273,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y BOG UNICENTRO L-2-206',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            273 => 
            array (
                'id' => 274,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI CTG EXITO EJECUTIVOS CARTAGENA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            274 => 
            array (
                'id' => 275,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO LA FELICIDAD',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            275 => 
            array (
                'id' => 276,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC CIUDAD TUNAL L-1051',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            276 => 
            array (
                'id' => 277,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI EXITO VLL TULUA EL RETIRO',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            277 => 
            array (
                'id' => 278,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CTG CC MALLPLAZA L-122-123',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            278 => 
            array (
                'id' => 279,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BEL CC PLAZA FABRICATO BELLO',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            279 => 
            array (
                'id' => 280,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CLI CC CHIPICHAPE L-213',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            280 => 
            array (
                'id' => 281,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP YBO CC UNICO L-6',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            281 => 
            array (
                'id' => 282,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI LPT LOS PATIOS',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            282 => 
            array (
                'id' => 283,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI VIL EXITO LA SABANA V/CENCIO',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            283 => 
            array (
                'id' => 284,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP PEI CC UNICENTRO L-B-02',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            284 => 
            array (
                'id' => 285,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP GRA GRANADA CRA 14',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            285 => 
            array (
                'id' => 286,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI MDE EXITO PUERTA DEL NORTE',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            286 => 
            array (
                'id' => 287,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO SALITRE PLAZA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            287 => 
            array (
                'id' => 288,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MDE PALACE',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            288 => 
            array (
                'id' => 289,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI EXITO BOG 20 DE JULIO',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            289 => 
            array (
                'id' => 290,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI ATQ EXITO CAUCASIA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            290 => 
            array (
                'id' => 291,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI MTR CC NUESTRO MONTERÍA L-165',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            291 => 
            array (
                'id' => 292,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI PEI EXITO VICTORIA',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            292 => 
            array (
                'id' => 293,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'ESTABILIDAD LABORAL RETAIL LILI',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            293 => 
            array (
                'id' => 294,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO USME',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            294 => 
            array (
                'id' => 295,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG HIPER AMERICAS CLL 12',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            295 => 
            array (
                'id' => 296,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO CHAPINERO',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            296 => 
            array (
                'id' => 297,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MDE CC SANTAFE L-9100',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            297 => 
            array (
                'id' => 298,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP TUL LA HERRADURA',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            298 => 
            array (
                'id' => 299,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BAQ NUESTRO ATLANTICO BARRANQUILLA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            299 => 
            array (
                'id' => 300,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG FERIAS 2 BOGOTA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            300 => 
            array (
                'id' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CLI CC CALIMA LA 14',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            301 => 
            array (
                'id' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP VIL V/CENCIO CRA 30',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            302 => 
            array (
                'id' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI PEI EXITO PARQUE ARBOLEDA',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            303 => 
            array (
                'id' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI FLA EXITO FLORENCIA CENTRO',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            304 => 
            array (
                'id' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP VUP CENTRO CLL 16 L-4',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            305 => 
            array (
                'id' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP APO CC NUESTRO URABA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            306 => 
            array (
                'id' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO ALAMOS',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            307 => 
            array (
                'id' => 308,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC DIVER PLAZA L-26',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            308 => 
            array (
                'id' => 309,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP PPN CC CAMPANARIO L-125',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            309 => 
            array (
                'id' => 310,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP IBE CENTRO CLL 15',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            310 => 
            array (
                'id' => 311,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CTG CC BOCAGRANDE L-4-5',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            311 => 
            array (
                'id' => 312,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CEJ CC VIVA LA CEJA',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            312 => 
            array (
                'id' => 313,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG SANTA HELENITA AV CLL 68',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            313 => 
            array (
                'id' => 314,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC PASEO DEL RIO L-244',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            314 => 
            array (
                'id' => 315,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP IPI ESTRELLA EXPRESS',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            315 => 
            array (
                'id' => 316,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP APO CC PLAZA DEL RIO L-123',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            316 => 
            array (
                'id' => 317,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI MZL EXITO SANCANCIO',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            317 => 
            array (
                'id' => 318,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC PLAZA CENTRAL L-208',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            318 => 
            array (
                'id' => 319,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP PEI CENTRO CRA 9',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            319 => 
            array (
                'id' => 320,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BGA CC COSMOCENTRO L-101-102-103-104',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            320 => 
            array (
                'id' => 321,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC TREBOLIS',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            321 => 
            array (
                'id' => 322,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BAQ CC UNICO L-107',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            322 => 
            array (
                'id' => 323,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI MDE EXITO COLOMBIA',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            323 => 
            array (
                'id' => 324,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI PSO EXITO PASTO NARIÑO',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            324 => 
            array (
                'id' => 325,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP TNJ CC VIVA TUNJA L-128',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            325 => 
            array (
                'id' => 326,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP NVA CC SANTA LUCIA L-2-46',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            326 => 
            array (
                'id' => 327,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP DQB CC EL PROGRESO',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            327 => 
            array (
                'id' => 328,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP VUP CC MAYALES L-81',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            328 => 
            array (
                'id' => 329,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP VIL CC UNICO L-32',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            329 => 
            array (
                'id' => 330,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BJA CC SAN SILVESTRE L-214-215',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            330 => 
            array (
                'id' => 331,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI EXITO BOG PLAZA DE BOLIVAR',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            331 => 
            array (
                'id' => 332,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI NVA EXITO SAN PEDRO',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            332 => 
            array (
                'id' => 333,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BAQ CC PORTAL DEL PRADO L-5',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            333 => 
            array (
                'id' => 334,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI CLI EXITO UNICENTRO',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            334 => 
            array (
                'id' => 335,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO COUNTRY',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            335 => 
            array (
                'id' => 336,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MTR CC NUESTRO MONTERIA L-0295',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            336 => 
            array (
                'id' => 337,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GERENCIA GENERAL',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            337 => 
            array (
                'id' => 338,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP ARM CC PORTAL QUINDIO L-1-04',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            338 => 
            array (
                'id' => 339,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'L&Y YAHAAD EXITO NIZA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            339 => 
            array (
                'id' => 340,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI SMR EXITO LIBERTADOR',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            340 => 
            array (
                'id' => 341,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI SOL CC GRAN PLAZA SOLEDAD L-1-53',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            341 => 
            array (
                'id' => 342,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP SCH CC MERCURIO L-206',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            342 => 
            array (
                'id' => 343,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI MDE EXITO LAURELES MEDELLIN',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            343 => 
            array (
                'id' => 344,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI ENV EXITO ENVIGADO CENTRO',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            344 => 
            array (
                'id' => 345,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CUC ATALAYA',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            345 => 
            array (
                'id' => 346,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC UNICENTRO DE OCCIDENTE L-130',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            346 => 
            array (
                'id' => 347,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CHI CC CENTRO CHIA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            347 => 
            array (
                'id' => 348,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI APO EXITO PLAZA DEL RIO',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            348 => 
            array (
                'id' => 349,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CRC CC NUESTRO CARTAGO L-1-42A-42B',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            349 => 
            array (
                'id' => 350,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG SANTA HELENITA AV CLL 68',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            350 => 
            array (
                'id' => 351,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO COUNTRY',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            351 => 
            array (
                'id' => 352,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG JAVERIANA CLL 41',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            352 => 
            array (
                'id' => 353,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI MDE EXITO SAN ANTONIO',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            353 => 
            array (
                'id' => 354,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP VUP V/DUPAR',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            354 => 
            array (
                'id' => 355,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI PLM CC LLANOGRANDE PALMIRA',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            355 => 
            array (
                'id' => 356,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI GIR EXITO GIRARDOT',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            356 => 
            array (
                'id' => 357,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI EXITO CUBA PEREIRA',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            357 => 
            array (
                'id' => 358,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG MONTEVIDEO CLL 19 L-6',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            358 => 
            array (
                'id' => 359,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CEDRITOS CLL 140',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            359 => 
            array (
                'id' => 360,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC SANTAFE L-1-201',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            360 => 
            array (
                'id' => 361,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP ARM CENTRO CRA 17',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            361 => 
            array (
                'id' => 362,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI EXITO CABECERA BUCARAMANGA',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            362 => 
            array (
                'id' => 363,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BAQ CC VILLA COUNTRY L-233',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            363 => 
            array (
                'id' => 364,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP PEI CENTRO CRA 6',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            364 => 
            array (
                'id' => 365,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP TNJ CENTRO CLL 18',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            365 => 
            array (
                'id' => 366,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI EXITO ANT SABANETA',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            366 => 
            array (
                'id' => 367,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI TUL EXITO TULUA',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            367 => 
            array (
                'id' => 368,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP VIL LIA SECTOR EL STEREO L-2',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            368 => 
            array (
                'id' => 369,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG SAN FRANCISCO DIAG 62 SUR',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            369 => 
            array (
                'id' => 370,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC GRAN PLAZA BOSA L-158',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            370 => 
            array (
                'id' => 371,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP GIR CC UNICENTRO L-2-32',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            371 => 
            array (
                'id' => 372,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI RIS DQ CC PROGRE',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            372 => 
            array (
                'id' => 373,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CHI CENTRO L-102',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            373 => 
            array (
                'id' => 374,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI MDE EXITO SAN DIEGO',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            374 => 
            array (
                'id' => 375,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'SEGURIDAD Y PROTOCOLO',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            375 => 
            array (
                'id' => 376,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC MULTIPLAZA L-B-133',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            376 => 
            array (
                'id' => 377,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI SCH CC GRAN PLAZA SOACHA L-1-163',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            377 => 
            array (
                'id' => 378,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP YPL CC UNICENTRO L-207',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            378 => 
            array (
                'id' => 379,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG SAN VICTORINO CRA 10',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            379 => 
            array (
                'id' => 380,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI BOG EXITO CLL 170',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            380 => 
            array (
                'id' => 381,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CIE CRA 11 CIENAGA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            381 => 
            array (
                'id' => 382,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LILI&YOI YAHAD EXITO BOG MODELIA',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            382 => 
            array (
                'id' => 383,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CHICO CLL 93',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            383 => 
            array (
                'id' => 384,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI EXITO ANT ROBLEDO',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            384 => 
            array (
                'id' => 385,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'ESTABILIDAD LABORAL VENTA NACIONAL',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            385 => 
            array (
                'id' => 386,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC BULEVAR L-156',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            386 => 
            array (
                'id' => 387,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC PORTAL 80 L-N-2023',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            387 => 
            array (
                'id' => 388,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI EXITO UNICENTRO MET VLL',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            388 => 
            array (
                'id' => 389,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI IBE EXITO IBAGUE',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            389 => 
            array (
                'id' => 390,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'ESTABILIDAD LABORAL RETAIL YOI',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            390 => 
            array (
                'id' => 391,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP FSG CC AV CENTRAL L-227',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            391 => 
            array (
                'id' => 392,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP SCJ CC GUACARI',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            392 => 
            array (
                'id' => 393,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP SOL CC CARNAVAL L-1121',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            393 => 
            array (
                'id' => 394,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP ENV CC VIVA ENVIGADO L-227',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            394 => 
            array (
                'id' => 395,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC METROPOLIS L-120-A',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            395 => 
            array (
                'id' => 396,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP MDE CC UNICENTRO L-023',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            396 => 
            array (
                'id' => 397,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI CLI EXITO LA FLORA L-0204A',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            397 => 
            array (
                'id' => 398,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BAQ CC VIVA B/QUILLA L-340',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            398 => 
            array (
                'id' => 399,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG BONANZA AV CLL 80',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            399 => 
            array (
                'id' => 400,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI ARM CC PORTAL QUINDIO L-313-314-315',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            400 => 
            array (
                'id' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP PEI CC CALIMA L-19',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            401 => 
            array (
                'id' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP ARM CC PORTAL QUINDIO L-3-13-14',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            402 => 
            array (
                'id' => 403,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GTOS COMUN CANALES ALTERNATIVOS',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            403 => 
            array (
                'id' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI SCJ EXITO CENTRO',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            404 => 
            array (
                'id' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI MTR EXITO ALAMEDA DEL SINU MONTERIA',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            405 => 
            array (
                'id' => 406,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP FNZ CENTRO CLL 15',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            406 => 
            array (
                'id' => 407,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LILI&YOI YAHAD EXITO BOG MODELIA',
                'boss_id' => '',
                'regional_id' => 9,
            ),
            407 => 
            array (
                'id' => 408,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI ITA EXITO ITAGUI',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            408 => 
            array (
                'id' => 409,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP GRA GRANADA CRA 14',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            409 => 
            array (
                'id' => 410,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'YOI ANT MED CC DE MODA OUTLET',
                'boss_id' => '',
                'regional_id' => 6,
            ),
            410 => 
            array (
                'id' => 411,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG CC BULEVAR L-156',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            411 => 
            array (
                'id' => 412,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP TNJ CC UNICENTRO L-1019',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            412 => 
            array (
                'id' => 413,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIR VENTAS NACIONALES',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            413 => 
            array (
                'id' => 414,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP RCH CENTRO CRA 6',
                'boss_id' => '',
                'regional_id' => 10,
            ),
            414 => 
            array (
                'id' => 415,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP TNJ CC UNICENTRO L-1019',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            415 => 
            array (
                'id' => 416,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP CLI PASO ANCHO',
                'boss_id' => '',
                'regional_id' => 13,
            ),
            416 => 
            array (
                'id' => 417,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP IBE CC MULTICENTRO L-2-34',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            417 => 
            array (
                'id' => 418,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP SCH CC MERCURIO L-206',
                'boss_id' => '',
                'regional_id' => 8,
            ),
            418 => 
            array (
                'id' => 419,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'UNIQUE INTERNATIONAL SAS',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            419 => 
            array (
                'id' => 420,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'UNIQUE',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            420 => 
            array (
                'id' => 421,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'BOGOTA OCCIDENTE',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            421 => 
            array (
                'id' => 422,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'CUARTO BLANCO',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            422 => 
            array (
                'id' => 423,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'UNIQUE INTERNATIONAL SAS',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            423 => 
            array (
                'id' => 424,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'UNIQUE INTERNATIONAL SAS',
                'boss_id' => '',
                'regional_id' => 14,
            ),
            424 => 
            array (
                'id' => 425,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GTOS COMUN SERVICIO AL CLIENTE',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            425 => 
            array (
                'id' => 426,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'CEDI YOI',
                'boss_id' => '',
                'regional_id' => 4,
            ),
            426 => 
            array (
                'id' => 427,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'SERVICIOS GENERALES ADMON',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            427 => 
            array (
                'id' => 428,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'CEDI CANAIMA',
                'boss_id' => '',
                'regional_id' => 3,
            ),
            428 => 
            array (
                'id' => 429,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LILIPRINT',
                'boss_id' => '',
                'regional_id' => 4,
            ),
            429 => 
            array (
                'id' => 430,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GTOS COMUN PROYECTOS COMECIALES',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            430 => 
            array (
                'id' => 431,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'FACTORY',
                'boss_id' => '',
                'regional_id' => 5,
            ),
            431 => 
            array (
                'id' => 432,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'VISUAL MERCHANDISING',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            432 => 
            array (
                'id' => 433,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'CEDI YOI',
                'boss_id' => '',
                'regional_id' => 3,
            ),
            433 => 
            array (
                'id' => 434,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIR VENTAS NACIONALES SUR',
                'boss_id' => '',
                'regional_id' => 7,
            ),
            434 => 
            array (
                'id' => 435,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'SEGURIDAD Y PROTOCOLO',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            435 => 
            array (
                'id' => 436,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIR VENTAS NACIONALES NORTE',
                'boss_id' => '',
                'regional_id' => 11,
            ),
            436 => 
            array (
                'id' => 437,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'CONTABILIDAD',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            437 => 
            array (
                'id' => 438,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'COMERCIO EXTERIOR',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            438 => 
            array (
                'id' => 439,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LILIPRINT',
                'boss_id' => '',
                'regional_id' => 3,
            ),
            439 => 
            array (
                'id' => 440,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'AUDITORIA Y CONTRALORIA',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            440 => 
            array (
                'id' => 441,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'CEDI TOCANCIPÁ',
                'boss_id' => '',
                'regional_id' => 4,
            ),
            441 => 
            array (
                'id' => 442,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'CREDIPINK',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            442 => 
            array (
                'id' => 443,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG SOCIAL SELLING',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            443 => 
            array (
                'id' => 444,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'SOURCING',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            444 => 
            array (
                'id' => 445,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GERENCIA DE GESTION HUMANA',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            445 => 
            array (
                'id' => 446,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GTOS COMUN FRANQUICIAS INTERNACIONALES',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            446 => 
            array (
                'id' => 447,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'CARTERA',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            447 => 
            array (
                'id' => 448,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIGITAL',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            448 => 
            array (
                'id' => 449,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GTOS COMUN MERCADEO',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            449 => 
            array (
                'id' => 450,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'ESTABILIDAD LABORAL CEDI',
                'boss_id' => '',
                'regional_id' => 4,
            ),
            450 => 
            array (
                'id' => 451,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'IT',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            451 => 
            array (
                'id' => 452,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'PRODUCTO',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            452 => 
            array (
                'id' => 453,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'JURIDICA',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            453 => 
            array (
                'id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG ECOMMERCE',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            454 => 
            array (
                'id' => 455,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GERENCIA GENERAL',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            455 => 
            array (
                'id' => 456,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIR VENTAS NACIONALES',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            456 => 
            array (
                'id' => 457,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'SELECCION',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            457 => 
            array (
                'id' => 458,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'SEGURIDAD Y PROTOCOLO',
                'boss_id' => '',
                'regional_id' => 4,
            ),
            458 => 
            array (
                'id' => 459,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIR VENTAS NACIONALES CENTRO',
                'boss_id' => '',
                'regional_id' => 12,
            ),
            459 => 
            array (
                'id' => 460,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GTOS COMUN GCIA COMERCIAL',
                'boss_id' => '',
                'regional_id' => 1,
            ),
            460 => 
            array (
                'id' => 461,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'SEGURIDAD Y PROTOCOLO',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            461 => 
            array (
                'id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'COMPRAS',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            462 => 
            array (
                'id' => 463,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIR CCIAL ZONA SUR RETAIL',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            463 => 
            array (
                'id' => 464,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GTOS COMUN PROYECTOS COMECIALES',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            464 => 
            array (
                'id' => 465,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIR CCIAL ZONA NORTE RETAIL',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            465 => 
            array (
                'id' => 466,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIR VENTAS NACIONALES',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            466 => 
            array (
                'id' => 467,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'CEDI CANAIMA',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            467 => 
            array (
                'id' => 468,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIR CCIAL ZONA CENTRO RETAIL',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            468 => 
            array (
                'id' => 469,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GTOS COMUN MERCADEO',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            469 => 
            array (
                'id' => 470,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'VISUAL MERCHANDISING',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            470 => 
            array (
                'id' => 471,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'CONTABILIDAD',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            471 => 
            array (
                'id' => 472,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'FACTORY',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            472 => 
            array (
                'id' => 473,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'COMERCIO EXTERIOR',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            473 => 
            array (
                'id' => 474,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'CARTERA',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            474 => 
            array (
                'id' => 475,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GTOS COMUN GCIA COMERCIAL',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            475 => 
            array (
                'id' => 476,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'IT',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            476 => 
            array (
                'id' => 477,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GTOS COMUN CANALES ALTERNATIVOS',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            477 => 
            array (
                'id' => 478,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GCIA OPERACIONES',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            478 => 
            array (
                'id' => 479,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GCIA FINANCIERA',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            479 => 
            array (
                'id' => 480,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'SOURCING',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            480 => 
            array (
                'id' => 481,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LLP BOG ECOMMERCE',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            481 => 
            array (
                'id' => 482,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GERENCIA GENERAL',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            482 => 
            array (
                'id' => 483,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'CALIDAD',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            483 => 
            array (
                'id' => 484,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'PRODUCTO',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            484 => 
            array (
                'id' => 485,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'CEDI YOI',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            485 => 
            array (
                'id' => 486,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'JURIDICA',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            486 => 
            array (
                'id' => 487,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'DIGITAL',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            487 => 
            array (
                'id' => 488,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GTOS COMUN FRANQUICIAS INTERNACIONALES',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            488 => 
            array (
                'id' => 489,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GTOS COMUN FRANQUICIAS NACIONALES',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            489 => 
            array (
                'id' => 490,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'SELECCION',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            490 => 
            array (
                'id' => 491,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GERENCIA DE GESTION HUMANA',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            491 => 
            array (
                'id' => 492,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'GTOS COMUN SERVICIO AL CLIENTE',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            492 => 
            array (
                'id' => 493,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'LILIPRINT',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            493 => 
            array (
                'id' => 494,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'SST SEG Y SALUD EN EL TRABAJO',
                'boss_id' => '',
                'regional_id' => 2,
            ),
            494 => 
            array (
                'id' => 495,
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'CONTRALORIA',
                'boss_id' => '',
                'regional_id' => 2,
            ),
        ));
        
        
    }
}