<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('positions')->delete();
        
        DB::table('positions')->insert(array (
            0 => 
            array (
                'id' => 1,
                
                'description' => 'ASESOR INTEGRAL',
                'area_id' => 1,
                'regional_id' => 13,
            ),
            1 => 
            array (
                'id' => 2,
                
                'description' => 'LIDER DE TIENDA',
                'area_id' => 1,
                'regional_id' => 8,
            ),
            2 => 
            array (
                'id' => 3,
                
                'description' => 'JEFE DE ZONA',
                'area_id' => 2,
                'regional_id' => 12,
            ),
            3 => 
            array (
                'id' => 4,
                
                'description' => 'ASESOR INTEGRAL',
                'area_id' => 1,
                'regional_id' => 9,
            ),
            4 => 
            array (
                'id' => 5,
                
                'description' => 'ASESOR INTEGRAL',
                'area_id' => 1,
                'regional_id' => 8,
            ),
            5 => 
            array (
                'id' => 6,
                
                'description' => 'ASESOR PUNTO DE COMPRA',
                'area_id' => 3,
                'regional_id' => 12,
            ),
            6 => 
            array (
                'id' => 7,
                
                'description' => 'LIDER DE TIENDA',
                'area_id' => 1,
                'regional_id' => 10,
            ),
            7 => 
            array (
                'id' => 8,
                
                'description' => 'ASESOR INTEGRAL',
                'area_id' => 1,
                'regional_id' => 6,
            ),
            8 => 
            array (
                'id' => 9,
                
                'description' => 'LIDER DE TIENDA',
                'area_id' => 1,
                'regional_id' => 7,
            ),
            9 => 
            array (
                'id' => 10,
                
                'description' => 'AUXILIAR INTEGRAL',
                'area_id' => 1,
                'regional_id' => 9,
            ),
            10 => 
            array (
                'id' => 11,
                
                'description' => 'LIDER DE TIENDA',
                'area_id' => 1,
                'regional_id' => 6,
            ),
            11 => 
            array (
                'id' => 12,
                
                'description' => 'ASESOR INTEGRAL',
                'area_id' => 1,
                'regional_id' => 10,
            ),
            12 => 
            array (
                'id' => 13,
                
                'description' => 'LIDER DE TIENDA',
                'area_id' => 1,
                'regional_id' => 9,
            ),
            13 => 
            array (
                'id' => 14,
                
                'description' => 'ASESOR INTEGRAL',
                'area_id' => 1,
                'regional_id' => 7,
            ),
            14 => 
            array (
                'id' => 15,
                
                'description' => 'TECNICO DE MANTENIMIENTO',
                'area_id' => 4,
                'regional_id' => 7,
            ),
            15 => 
            array (
                'id' => 16,
                
                'description' => 'ASESOR PUNTO DE COMPRA',
                'area_id' => 3,
                'regional_id' => 7,
            ),
            16 => 
            array (
                'id' => 17,
                
                'description' => 'ASESOR PUNTO DE COMPRA',
                'area_id' => 5,
                'regional_id' => 7,
            ),
            17 => 
            array (
                'id' => 18,
                
                'description' => 'COORDINADOR DE TIENDA',
                'area_id' => 1,
                'regional_id' => 9,
            ),
            18 => 
            array (
                'id' => 19,
                
                'description' => 'COORDINADOR DE TIENDA',
                'area_id' => 1,
                'regional_id' => 10,
            ),
            19 => 
            array (
                'id' => 20,
                
                'description' => 'COORDINADOR DE TIENDA',
                'area_id' => 1,
                'regional_id' => 13,
            ),
            20 => 
            array (
                'id' => 21,
                
                'description' => 'ASESOR INTEGRAL',
                'area_id' => 5,
                'regional_id' => 6,
            ),
            21 => 
            array (
                'id' => 22,
                
                'description' => 'AUXILIAR INTEGRAL',
                'area_id' => 5,
                'regional_id' => 6,
            ),
            22 => 
            array (
                'id' => 23,
                
                'description' => 'CAJERO',
                'area_id' => 1,
                'regional_id' => 6,
            ),
            23 => 
            array (
                'id' => 24,
                
                'description' => 'LIDER DE TIENDA',
                'area_id' => 1,
                'regional_id' => 13,
            ),
            24 => 
            array (
                'id' => 25,
                
                'description' => 'AUXILIAR INTEGRAL',
                'area_id' => 1,
                'regional_id' => 10,
            ),
            25 => 
            array (
                'id' => 26,
                
                'description' => 'CAJERO',
                'area_id' => 1,
                'regional_id' => 8,
            ),
            26 => 
            array (
                'id' => 27,
                
                'description' => 'AUXILIAR INTEGRAL',
                'area_id' => 1,
                'regional_id' => 8,
            ),
            27 => 
            array (
                'id' => 28,
                
                'description' => 'ASESOR PUNTO DE COMPRA',
                'area_id' => 3,
                'regional_id' => 13,
            ),
            28 => 
            array (
                'id' => 29,
                
                'description' => 'ASESOR INTEGRAL',
                'area_id' => 5,
                'regional_id' => 10,
            ),
            29 => 
            array (
                'id' => 30,
                
                'description' => 'LIDER DE TIENDA',
                'area_id' => 5,
                'regional_id' => 7,
            ),
            30 => 
            array (
                'id' => 31,
                
                'description' => 'ASESOR VENTA A DISTANCIA',
                'area_id' => 3,
                'regional_id' => 7,
            ),
            31 => 
            array (
                'id' => 32,
                
                'description' => 'AUXILIAR DE PRODUCCION',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            32 => 
            array (
                'id' => 33,
                
                'description' => 'AUXILIAR INTEGRAL',
                'area_id' => 1,
                'regional_id' => 6,
            ),
            33 => 
            array (
                'id' => 34,
                
                'description' => 'JEFE DE ZONA',
                'area_id' => 7,
                'regional_id' => 6,
            ),
            34 => 
            array (
                'id' => 35,
                
                'description' => 'ASESOR INTEGRAL',
                'area_id' => 5,
                'regional_id' => 8,
            ),
            35 => 
            array (
                'id' => 36,
                
                'description' => 'AUXILIAR INTEGRAL',
                'area_id' => 1,
                'regional_id' => 13,
            ),
            36 => 
            array (
                'id' => 37,
                
                'description' => 'JEFE DE ZONA',
                'area_id' => 8,
                'regional_id' => 7,
            ),
            37 => 
            array (
                'id' => 38,
                
                'description' => 'ASESOR INTEGRAL',
                'area_id' => 5,
                'regional_id' => 13,
            ),
            38 => 
            array (
                'id' => 39,
                
                'description' => 'JEFE DE ZONA',
                'area_id' => 9,
                'regional_id' => 7,
            ),
            39 => 
            array (
                'id' => 40,
                
                'description' => 'COORDINADOR DE TIENDA',
                'area_id' => 1,
                'regional_id' => 8,
            ),
            40 => 
            array (
                'id' => 41,
                
                'description' => 'JEFE DE ZONA',
                'area_id' => 10,
                'regional_id' => 13,
            ),
            41 => 
            array (
                'id' => 42,
                
                'description' => 'ASESOR PUNTO DE COMPRA',
                'area_id' => 5,
                'regional_id' => 12,
            ),
            42 => 
            array (
                'id' => 43,
                
                'description' => 'ASESOR INTEGRAL',
                'area_id' => 5,
                'regional_id' => 9,
            ),
            43 => 
            array (
                'id' => 44,
                
                'description' => 'AUXILIAR INTEGRAL',
                'area_id' => 1,
                'regional_id' => 7,
            ),
            44 => 
            array (
                'id' => 45,
                
                'description' => 'COORDINADOR DE TIENDA',
                'area_id' => 1,
                'regional_id' => 6,
            ),
            45 => 
            array (
                'id' => 46,
                
                'description' => 'SUPERVISOR DE MANTENIMIENTO',
                'area_id' => 4,
                'regional_id' => 7,
            ),
            46 => 
            array (
                'id' => 47,
                
                'description' => 'ASESOR INTEGRAL',
                'area_id' => 5,
                'regional_id' => 7,
            ),
            47 => 
            array (
                'id' => 48,
                
                'description' => 'LIDER DE TIENDA',
                'area_id' => 5,
                'regional_id' => 8,
            ),
            48 => 
            array (
                'id' => 49,
                
                'description' => 'CAJERO',
                'area_id' => 1,
                'regional_id' => 13,
            ),
            49 => 
            array (
                'id' => 50,
                
                'description' => 'AUXILIAR II DE INVENTARIOS',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            50 => 
            array (
                'id' => 51,
                
                'description' => 'CAJERO',
                'area_id' => 1,
                'regional_id' => 9,
            ),
            51 => 
            array (
                'id' => 52,
                
                'description' => 'SERVICIOS GENERALES',
                'area_id' => 11,
                'regional_id' => 7,
            ),
            52 => 
            array (
                'id' => 53,
                
                'description' => 'AUXILIAR INTEGRAL',
                'area_id' => 5,
                'regional_id' => 8,
            ),
            53 => 
            array (
                'id' => 54,
                
                'description' => 'COORDINADOR DE TIENDA',
                'area_id' => 5,
                'regional_id' => 9,
            ),
            54 => 
            array (
                'id' => 55,
                
                'description' => 'CONDUCTOR DE SEGURIDAD',
                'area_id' => 12,
                'regional_id' => 7,
            ),
            55 => 
            array (
                'id' => 56,
                
                'description' => 'ASESOR PUNTO DE COMPRA',
                'area_id' => 5,
                'regional_id' => 13,
            ),
            56 => 
            array (
                'id' => 57,
                
                'description' => 'ANALISTA DE E-COMMERCE',
                'area_id' => 13,
                'regional_id' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                
                'description' => 'JEFE DE ZONA',
                'area_id' => 14,
                'regional_id' => 13,
            ),
            58 => 
            array (
                'id' => 59,
                
                'description' => 'AUXILIAR DE CODIFICACION',
                'area_id' => 15,
                'regional_id' => 7,
            ),
            59 => 
            array (
                'id' => 60,
                
                'description' => 'LIDER DE TIENDA',
                'area_id' => 5,
                'regional_id' => 6,
            ),
            60 => 
            array (
                'id' => 61,
                
                'description' => 'MERCADERISTA',
                'area_id' => 16,
                'regional_id' => 7,
            ),
            61 => 
            array (
                'id' => 62,
                
                'description' => 'DIRECTOR TECNICO Y DE CALIDAD',
                'area_id' => 16,
                'regional_id' => 7,
            ),
            62 => 
            array (
                'id' => 63,
                
                'description' => 'GERENTE DE FINANZAS',
                'area_id' => 17,
                'regional_id' => 7,
            ),
            63 => 
            array (
                'id' => 64,
                
                'description' => 'DIRECTOR COMERCIAL',
                'area_id' => 16,
                'regional_id' => 7,
            ),
            64 => 
            array (
                'id' => 65,
                
                'description' => 'TESORERO',
                'area_id' => 18,
                'regional_id' => 7,
            ),
            65 => 
            array (
                'id' => 66,
                
                'description' => 'ARQUITECTO JUNIOR',
                'area_id' => 19,
                'regional_id' => 7,
            ),
            66 => 
            array (
                'id' => 67,
                
                'description' => 'COORDINADOR DE COSTOS Y PROGRAMACION',
                'area_id' => 19,
                'regional_id' => 7,
            ),
            67 => 
            array (
                'id' => 68,
                
                'description' => 'AUXILIAR DE CONTABILIDAD',
                'area_id' => 19,
                'regional_id' => 7,
            ),
            68 => 
            array (
                'id' => 69,
                
                'description' => 'ARQUITECTO SENIOR',
                'area_id' => 19,
                'regional_id' => 7,
            ),
            69 => 
            array (
                'id' => 70,
                
                'description' => 'REPRESENTANTE LEGAL',
                'area_id' => 19,
                'regional_id' => 7,
            ),
            70 => 
            array (
                'id' => 71,
                
                'description' => 'OPERARIO',
                'area_id' => 20,
                'regional_id' => 1,
            ),
            71 => 
            array (
                'id' => 72,
                
                'description' => 'OPERARIO II',
                'area_id' => 20,
                'regional_id' => 1,
            ),
            72 => 
            array (
                'id' => 73,
                
                'description' => 'SUPERVISOR DE PRODUCCION',
                'area_id' => 20,
                'regional_id' => 1,
            ),
            73 => 
            array (
                'id' => 74,
                
                'description' => 'JEFE DE PRODUCCION',
                'area_id' => 20,
                'regional_id' => 1,
            ),
            74 => 
            array (
                'id' => 75,
                
                'description' => 'JEFE DE COMPRAS Y LOGÍSTICA',
                'area_id' => 21,
                'regional_id' => 1,
            ),
            75 => 
            array (
                'id' => 76,
                
                'description' => 'AUXILIAR DE CALIDAD',
                'area_id' => 20,
                'regional_id' => 1,
            ),
            76 => 
            array (
                'id' => 77,
                
                'description' => 'ANALISTA DE MANTENIMIENTO',
                'area_id' => 21,
                'regional_id' => 14,
            ),
            77 => 
            array (
                'id' => 78,
                
                'description' => 'LIDER DE BODEGA',
                'area_id' => 21,
                'regional_id' => 1,
            ),
            78 => 
            array (
                'id' => 79,
                
                'description' => 'AUXILIAR DE MANTENIMIENTO',
                'area_id' => 21,
                'regional_id' => 1,
            ),
            79 => 
            array (
                'id' => 80,
                
                'description' => 'COORDINADOR DE MARKETING DIGITAL',
                'area_id' => 21,
                'regional_id' => 1,
            ),
            80 => 
            array (
                'id' => 81,
                
                'description' => 'EJECUTIVO COMERCIAL',
                'area_id' => 21,
                'regional_id' => 1,
            ),
            81 => 
            array (
                'id' => 82,
                
                'description' => 'AUXILIAR I CEDI',
                'area_id' => 20,
                'regional_id' => 1,
            ),
            82 => 
            array (
                'id' => 83,
                
                'description' => 'AUXILIAR DE SERVICIOS GENERALES',
                'area_id' => 20,
                'regional_id' => 1,
            ),
            83 => 
            array (
                'id' => 84,
                
                'description' => 'AUXILIAR ADMINISTRATIVA',
                'area_id' => 20,
                'regional_id' => 1,
            ),
            84 => 
            array (
                'id' => 85,
                
                'description' => 'JEFE DE PROCESOS',
                'area_id' => 21,
                'regional_id' => 1,
            ),
            85 => 
            array (
                'id' => 86,
                
                'description' => 'AUXILIAR DE CAMION',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            86 => 
            array (
                'id' => 87,
                
                'description' => 'AUXILIAR II DE EXPERIENCIA MEMORABLE',
                'area_id' => 22,
                'regional_id' => 1,
            ),
            87 => 
            array (
                'id' => 88,
                
                'description' => 'AUXILIAR I CEDI',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            88 => 
            array (
                'id' => 89,
                
                'description' => 'MONTACARGA',
                'area_id' => 23,
                'regional_id' => 4,
            ),
            89 => 
            array (
                'id' => 90,
                
                'description' => 'AUXILIAR I PRODUCCIÓN',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            90 => 
            array (
                'id' => 91,
                
                'description' => 'AUXILIAR DE SERVICIOS GENERALES',
                'area_id' => 11,
                'regional_id' => 1,
            ),
            91 => 
            array (
                'id' => 92,
                
                'description' => 'AUXILIAR I PRODUCCIÓN T',
                'area_id' => 6,
                'regional_id' => 3,
            ),
            92 => 
            array (
                'id' => 93,
                
                'description' => 'AUXILIAR DE PLANTA DE PRODUCCIÓN',
                'area_id' => 24,
                'regional_id' => 4,
            ),
            93 => 
            array (
                'id' => 94,
                
                'description' => 'TECNICO TODERO',
                'area_id' => 25,
                'regional_id' => 1,
            ),
            94 => 
            array (
                'id' => 95,
                
                'description' => 'AUXILIAR I PRODUCCIÓN',
                'area_id' => 23,
                'regional_id' => 4,
            ),
            95 => 
            array (
                'id' => 96,
                
                'description' => 'OPERARIO DE MÁQUINA',
                'area_id' => 26,
                'regional_id' => 5,
            ),
            96 => 
            array (
                'id' => 97,
                
                'description' => 'APC TEMPORADA',
                'area_id' => 3,
                'regional_id' => 12,
            ),
            97 => 
            array (
                'id' => 98,
                
                'description' => 'AUXILIAR DE PRODUCCIÓN',
                'area_id' => 26,
                'regional_id' => 5,
            ),
            98 => 
            array (
                'id' => 99,
                
                'description' => 'APC TEMPORADA',
                'area_id' => 3,
                'regional_id' => 13,
            ),
            99 => 
            array (
                'id' => 100,
                
                'description' => 'AUXILIAR DE VISUAL MERCHANDISING',
                'area_id' => 27,
                'regional_id' => 1,
            ),
            100 => 
            array (
                'id' => 101,
                
                'description' => 'AUXILIAR II SORTER',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            101 => 
            array (
                'id' => 102,
                
                'description' => 'AUXILIAR I PRODUCCIÓN T',
                'area_id' => 23,
                'regional_id' => 3,
            ),
            102 => 
            array (
                'id' => 103,
                
                'description' => 'AUXILIAR I CEDI T',
                'area_id' => 6,
                'regional_id' => 3,
            ),
            103 => 
            array (
                'id' => 104,
                
                'description' => 'APC TEMPORADA',
                'area_id' => 3,
                'regional_id' => 7,
            ),
            104 => 
            array (
                'id' => 105,
                
                'description' => 'OFICIAL DE SEGURIDAD',
                'area_id' => 12,
                'regional_id' => 1,
            ),
            105 => 
            array (
                'id' => 106,
                
                'description' => 'APC TEMPORADA',
                'area_id' => 3,
                'regional_id' => 11,
            ),
            106 => 
            array (
                'id' => 107,
                
                'description' => 'SUPERVISOR DE PRODUCCION',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            107 => 
            array (
                'id' => 108,
                
                'description' => 'ANALISTA DE CONTABILIDAD',
                'area_id' => 28,
                'regional_id' => 1,
            ),
            108 => 
            array (
                'id' => 109,
                
                'description' => 'AUXILIAR I PICKING',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            109 => 
            array (
                'id' => 110,
                
                'description' => 'AUXILIAR I',
                'area_id' => 26,
                'regional_id' => 5,
            ),
            110 => 
            array (
                'id' => 111,
                
                'description' => 'RESPONSABLE TECNICO',
                'area_id' => 29,
                'regional_id' => 1,
            ),
            111 => 
            array (
                'id' => 112,
                
                'description' => 'AUXILIAR PLANTA DE PRODUCCION T',
                'area_id' => 24,
                'regional_id' => 3,
            ),
            112 => 
            array (
                'id' => 113,
                
                'description' => 'LIDER DE DESPACHOS Y BODEGA',
                'area_id' => 26,
                'regional_id' => 5,
            ),
            113 => 
            array (
                'id' => 114,
                
                'description' => 'LIDER DE DEVOLUCIONES',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            114 => 
            array (
                'id' => 115,
                
                'description' => 'AUXILIAR I CEDI',
                'area_id' => 23,
                'regional_id' => 4,
            ),
            115 => 
            array (
                'id' => 116,
                
                'description' => 'LIDER DE CORTE',
                'area_id' => 26,
                'regional_id' => 5,
            ),
            116 => 
            array (
                'id' => 117,
                
                'description' => 'AUDITOR',
                'area_id' => 30,
                'regional_id' => 1,
            ),
            117 => 
            array (
                'id' => 118,
                
                'description' => 'LIDER DE INVENTARIOS',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            118 => 
            array (
                'id' => 119,
                
                'description' => 'LIDER DE PICKING',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            119 => 
            array (
                'id' => 120,
                
                'description' => 'OPERARIO DE PRODUCCION I',
                'area_id' => 24,
                'regional_id' => 4,
            ),
            120 => 
            array (
                'id' => 121,
                
                'description' => 'AUXILIAR I CEDI',
                'area_id' => 31,
                'regional_id' => 4,
            ),
            121 => 
            array (
                'id' => 122,
                
                'description' => 'CONDUCTOR DE SEGURIDAD',
                'area_id' => 12,
                'regional_id' => 1,
            ),
            122 => 
            array (
                'id' => 123,
                
                'description' => 'AUXILIAR DE CREDITO',
                'area_id' => 32,
                'regional_id' => 1,
            ),
            123 => 
            array (
                'id' => 124,
                
                'description' => 'MENSAJERO',
                'area_id' => 33,
                'regional_id' => 1,
            ),
            124 => 
            array (
                'id' => 125,
                
                'description' => 'LILI POWER',
                'area_id' => 34,
                'regional_id' => 1,
            ),
            125 => 
            array (
                'id' => 126,
                
                'description' => 'AUXILIAR I DE CORTE',
                'area_id' => 26,
                'regional_id' => 5,
            ),
            126 => 
            array (
                'id' => 127,
                
                'description' => 'DIGITADOR',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            127 => 
            array (
                'id' => 128,
                
                'description' => 'AUXILIAR DE CARTERA',
                'area_id' => 32,
                'regional_id' => 1,
            ),
            128 => 
            array (
                'id' => 129,
                
                'description' => 'AUXILIAR ADMINISTRATIVO',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            129 => 
            array (
                'id' => 130,
                
                'description' => 'SUPERNUMERARIO',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            130 => 
            array (
                'id' => 131,
                
                'description' => 'AUXILIAR II SORTER',
                'area_id' => 23,
                'regional_id' => 4,
            ),
            131 => 
            array (
                'id' => 132,
                
                'description' => 'MONTACARGA',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            132 => 
            array (
                'id' => 133,
                
                'description' => 'AUXILIAR DE ARCHIVO',
                'area_id' => 35,
                'regional_id' => 1,
            ),
            133 => 
            array (
                'id' => 134,
                
                'description' => 'AUXILIAR DE CONTABILIDAD',
                'area_id' => 28,
                'regional_id' => 1,
            ),
            134 => 
            array (
                'id' => 135,
                
                'description' => 'AUXILIAR DE SOURCING TEXTIL',
                'area_id' => 36,
                'regional_id' => 1,
            ),
            135 => 
            array (
                'id' => 136,
                
                'description' => 'AUXILIAR DE BODEGA',
                'area_id' => 26,
                'regional_id' => 5,
            ),
            136 => 
            array (
                'id' => 137,
                
                'description' => 'ANALISTA DE GESTION HUMANA',
                'area_id' => 37,
                'regional_id' => 1,
            ),
            137 => 
            array (
                'id' => 138,
                
                'description' => 'ANALISTA DE PLANEACION FINANCIERA',
                'area_id' => 38,
                'regional_id' => 1,
            ),
            138 => 
            array (
                'id' => 139,
                
                'description' => 'ANALISTA DE VISUAL MERCHANDISING',
                'area_id' => 27,
                'regional_id' => 1,
            ),
            139 => 
            array (
                'id' => 140,
                
                'description' => 'ESPECIALISTA DE IMPUESTOS',
                'area_id' => 39,
                'regional_id' => 1,
            ),
            140 => 
            array (
                'id' => 141,
                
                'description' => 'COORDINADOR DE PLANEACION',
                'area_id' => 40,
                'regional_id' => 1,
            ),
            141 => 
            array (
                'id' => 142,
                
                'description' => 'AUXILIAR POP Y VITRINAS',
                'area_id' => 27,
                'regional_id' => 1,
            ),
            142 => 
            array (
                'id' => 143,
                
                'description' => 'AUXILIAR DE DISEÑO MOBILIARIO',
                'area_id' => 25,
                'regional_id' => 1,
            ),
            143 => 
            array (
                'id' => 144,
                
                'description' => 'COMMUNITY MANAGER',
                'area_id' => 41,
                'regional_id' => 1,
            ),
            144 => 
            array (
                'id' => 145,
                
                'description' => 'ANALISTA DE DISEÑO GRAFICO',
                'area_id' => 42,
                'regional_id' => 1,
            ),
            145 => 
            array (
                'id' => 146,
                
                'description' => 'AUXILIAR I PRODUCCIÓN',
                'area_id' => 43,
                'regional_id' => 4,
            ),
            146 => 
            array (
                'id' => 147,
                
                'description' => 'AUXILIAR I PICKING  T',
                'area_id' => 23,
                'regional_id' => 3,
            ),
            147 => 
            array (
                'id' => 148,
                
                'description' => 'DIGITADOR',
                'area_id' => 23,
                'regional_id' => 4,
            ),
            148 => 
            array (
                'id' => 149,
                
                'description' => 'AUXILIAR ADMINISTRATIVO',
                'area_id' => 23,
                'regional_id' => 4,
            ),
            149 => 
            array (
                'id' => 150,
                
                'description' => 'LIDER DE INVENTARIOS',
                'area_id' => 23,
                'regional_id' => 4,
            ),
            150 => 
            array (
                'id' => 151,
                
                'description' => 'DISEÑADOR WEB',
                'area_id' => 44,
                'regional_id' => 1,
            ),
            151 => 
            array (
                'id' => 152,
                
                'description' => 'COPY CREATIVO',
                'area_id' => 42,
                'regional_id' => 1,
            ),
            152 => 
            array (
                'id' => 153,
                
                'description' => 'CONSULTOR SAP',
                'area_id' => 45,
                'regional_id' => 1,
            ),
            153 => 
            array (
                'id' => 154,
                
                'description' => 'COORDINADOR DE CANALES ALTERNATIVOS',
                'area_id' => 44,
                'regional_id' => 1,
            ),
            154 => 
            array (
                'id' => 155,
                
                'description' => 'ANALISTA DISEÑO DE MODAS',
                'area_id' => 46,
                'regional_id' => 1,
            ),
            155 => 
            array (
                'id' => 156,
                
                'description' => 'AUXILIAR ADMINISTRATIVO',
                'area_id' => 25,
                'regional_id' => 1,
            ),
            156 => 
            array (
                'id' => 157,
                
                'description' => 'SUPPLY PLANNER',
                'area_id' => 47,
                'regional_id' => 1,
            ),
            157 => 
            array (
                'id' => 158,
                
                'description' => 'OPERARIO DE PRODUCCION II',
                'area_id' => 24,
                'regional_id' => 4,
            ),
            158 => 
            array (
                'id' => 159,
                
                'description' => 'ANALISTA DE DISEÑO DIGITAL',
                'area_id' => 42,
                'regional_id' => 1,
            ),
            159 => 
            array (
                'id' => 160,
                
                'description' => 'AUXILIAR ADMINISTRATIVO JURIDICO',
                'area_id' => 48,
                'regional_id' => 1,
            ),
            160 => 
            array (
                'id' => 161,
                
                'description' => 'AUXILIAR DE DESPACHOS',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            161 => 
            array (
                'id' => 162,
                
                'description' => 'ANALISTA DE PLANEACION',
                'area_id' => 47,
                'regional_id' => 1,
            ),
            162 => 
            array (
                'id' => 163,
                
                'description' => 'CONDUCTOR',
                'area_id' => 23,
                'regional_id' => 4,
            ),
            163 => 
            array (
                'id' => 164,
                
                'description' => 'ANALISTA DE DISEÑO GRAFICO',
                'area_id' => 44,
                'regional_id' => 1,
            ),
            164 => 
            array (
                'id' => 165,
                
                'description' => 'DESARROLLADOR DE APP',
                'area_id' => 45,
                'regional_id' => 1,
            ),
            165 => 
            array (
                'id' => 166,
                
                'description' => 'ANALISTA DE PROYECTOS LOGÍSTICOS',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            166 => 
            array (
                'id' => 167,
                
                'description' => 'ANALISTA DE CATEGORIA',
                'area_id' => 46,
                'regional_id' => 1,
            ),
            167 => 
            array (
                'id' => 168,
                
                'description' => 'ANALISTA LEGAL',
                'area_id' => 48,
                'regional_id' => 1,
            ),
            168 => 
            array (
                'id' => 169,
                
                'description' => 'LIDER DE PLOTTER',
                'area_id' => 26,
                'regional_id' => 5,
            ),
            169 => 
            array (
                'id' => 170,
                
                'description' => 'LIDER DE INVENTARIOS',
                'area_id' => 31,
                'regional_id' => 4,
            ),
            170 => 
            array (
                'id' => 171,
                
                'description' => 'AUXILIAR II  DE DESPACHOS',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            171 => 
            array (
                'id' => 172,
                
                'description' => 'COORDINADOR DE MERCADEO INTERNACIONAL',
                'area_id' => 49,
                'regional_id' => 1,
            ),
            172 => 
            array (
                'id' => 173,
                
                'description' => 'AUXILIAR DE DATA',
                'area_id' => 46,
                'regional_id' => 1,
            ),
            173 => 
            array (
                'id' => 174,
                
                'description' => 'ANALISTA E - COMMERCE',
                'area_id' => 13,
                'regional_id' => 1,
            ),
            174 => 
            array (
                'id' => 175,
                
                'description' => 'LIDER COSTOS DE PRODUCCION',
                'area_id' => 26,
                'regional_id' => 5,
            ),
            175 => 
            array (
                'id' => 176,
                
                'description' => 'AUXILIAR DE INVENTARIOS',
                'area_id' => 30,
                'regional_id' => 1,
            ),
            176 => 
            array (
                'id' => 177,
                
                'description' => 'AUXILIAR DE SISTEMAS',
                'area_id' => 45,
                'regional_id' => 1,
            ),
            177 => 
            array (
                'id' => 178,
                
                'description' => 'LIDER DE RECIBO Y ALMACENAMIENTO',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            178 => 
            array (
                'id' => 179,
                
                'description' => 'AUXILIAR PLANTA DE PRODUCCION T',
                'area_id' => 24,
                'regional_id' => 4,
            ),
            179 => 
            array (
                'id' => 180,
                
                'description' => 'ESPECIALISTA DE NOMINA',
                'area_id' => 50,
                'regional_id' => 1,
            ),
            180 => 
            array (
                'id' => 181,
                
                'description' => 'ASISTENTE DE GERENCIA',
                'area_id' => 51,
                'regional_id' => 1,
            ),
            181 => 
            array (
                'id' => 182,
                
                'description' => 'ANALISTA DE SOURCING TEXTIL',
                'area_id' => 36,
                'regional_id' => 1,
            ),
            182 => 
            array (
                'id' => 183,
                
                'description' => 'LIDER DE PRODUCCIÓN',
                'area_id' => 26,
                'regional_id' => 5,
            ),
            183 => 
            array (
                'id' => 184,
                
                'description' => 'ANALISTA COMERCIAL',
                'area_id' => 15,
                'regional_id' => 1,
            ),
            184 => 
            array (
                'id' => 185,
                
                'description' => 'AUXILIAR DE DISEÑO GRAFICO',
                'area_id' => 42,
                'regional_id' => 1,
            ),
            185 => 
            array (
                'id' => 186,
                
                'description' => 'ANALISTA DE CATEGORÍA DE BELLEZA',
                'area_id' => 46,
                'regional_id' => 1,
            ),
            186 => 
            array (
                'id' => 187,
                
                'description' => 'ANALISTA DE VENTAS NACIONAL',
                'area_id' => 15,
                'regional_id' => 1,
            ),
            187 => 
            array (
                'id' => 188,
                
                'description' => 'ASESOR VENTA A DISTANCIA',
                'area_id' => 3,
                'regional_id' => 1,
            ),
            188 => 
            array (
                'id' => 189,
                
                'description' => 'AUXILIAR DE MANTENIMIENTO',
                'area_id' => 25,
                'regional_id' => 1,
            ),
            189 => 
            array (
                'id' => 190,
                
            'description' => 'ASISTENTE ADMINISTRATIVO (A)',
                'area_id' => 26,
                'regional_id' => 5,
            ),
            190 => 
            array (
                'id' => 191,
                
                'description' => 'AUXILIAR DE INSUMOS',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            191 => 
            array (
                'id' => 192,
                
                'description' => 'ANALISTA DE MERCADEO',
                'area_id' => 49,
                'regional_id' => 1,
            ),
            192 => 
            array (
                'id' => 193,
                
                'description' => 'AUXILIAR DE CODIFICACION',
                'area_id' => 15,
                'regional_id' => 1,
            ),
            193 => 
            array (
                'id' => 194,
                
                'description' => 'CONDUCTOR',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            194 => 
            array (
                'id' => 195,
                
                'description' => 'AUXILIAR I CEDI',
                'area_id' => 43,
                'regional_id' => 4,
            ),
            195 => 
            array (
                'id' => 196,
                
                'description' => 'LÍDER DE DESPACHOS',
                'area_id' => 6,
                'regional_id' => 4,
            ),
            196 => 
            array (
                'id' => 197,
                
                'description' => 'ESPECIALISTA MAESTRO DE MATERIALES',
                'area_id' => 45,
                'regional_id' => 1,
            ),
            197 => 
            array (
                'id' => 198,
                
                'description' => 'ANALISTA DE SELECCIÓN',
                'area_id' => 37,
                'regional_id' => 1,
            ),
            198 => 
            array (
                'id' => 199,
                
                'description' => 'DESARROLLADOR',
                'area_id' => 52,
                'regional_id' => 1,
            ),
            199 => 
            array (
                'id' => 200,
                
                'description' => 'COORDINADOR DE DISEÑO MOBILIARIO',
                'area_id' => 25,
                'regional_id' => 1,
            ),
            200 => 
            array (
                'id' => 201,
                
                'description' => 'AUXILIAR I CEDI T',
                'area_id' => 23,
                'regional_id' => 3,
            ),
            201 => 
            array (
                'id' => 202,
                
                'description' => 'LIDER DE PICKING',
                'area_id' => 23,
                'regional_id' => 4,
            ),
            202 => 
            array (
                'id' => 203,
                
                'description' => 'LIDER DE .COM',
                'area_id' => 23,
                'regional_id' => 4,
            ),
            203 => 
            array (
                'id' => 204,
                
                'description' => 'AUXILIAR COMERCIAL',
                'area_id' => 15,
                'regional_id' => 1,
            ),
            204 => 
            array (
                'id' => 205,
                
                'description' => 'CONDUCTOR DE SEGURIDAD',
                'area_id' => 12,
                'regional_id' => 4,
            ),
            205 => 
            array (
                'id' => 206,
                
                'description' => 'FOTÓGRAFO',
                'area_id' => 42,
                'regional_id' => 1,
            ),
            206 => 
            array (
                'id' => 207,
                
                'description' => 'LIDER DE PRODUCCION BANDAS',
                'area_id' => 23,
                'regional_id' => 4,
            ),
            207 => 
            array (
                'id' => 208,
                
                'description' => 'AUXILIAR DE CODIFICACION',
                'area_id' => 44,
                'regional_id' => 1,
            ),
            208 => 
            array (
                'id' => 209,
                
                'description' => 'LIDER DE DEVOLUCIONES',
                'area_id' => 23,
                'regional_id' => 4,
            ),
            209 => 
            array (
                'id' => 210,
                
                'description' => 'ANALISTA DE SOPORTE',
                'area_id' => 45,
                'regional_id' => 1,
            ),
            210 => 
            array (
                'id' => 211,
                
                'description' => 'AUXILIAR DE COMERCIO EXTERIOR',
                'area_id' => 29,
                'regional_id' => 1,
            ),
            211 => 
            array (
                'id' => 212,
                
                'description' => 'AUXILIAR I CEDI TOCANCIPÁ',
                'area_id' => 31,
                'regional_id' => 4,
            ),
            212 => 
            array (
                'id' => 213,
                
                'description' => 'ANALISTA DE SISTEMAS',
                'area_id' => 45,
                'regional_id' => 1,
            ),
            213 => 
            array (
                'id' => 214,
                
                'description' => 'MONTACARGAS TOCANCIPÁ',
                'area_id' => 31,
                'regional_id' => 4,
            ),
            214 => 
            array (
                'id' => 215,
                
                'description' => 'ANALISTA DE SOURCING NO TEXTIL',
                'area_id' => 53,
                'regional_id' => 1,
            ),
            215 => 
            array (
                'id' => 216,
                
                'description' => 'LIDER DE PLANEACIÓN',
                'area_id' => 23,
                'regional_id' => 4,
            ),
            216 => 
            array (
                'id' => 217,
                
                'description' => 'AUXILIAR DE ARQUITECTURA',
                'area_id' => 25,
                'regional_id' => 1,
            ),
            217 => 
            array (
                'id' => 218,
                
                'description' => 'ANALISTA DE ARTE Y PRODUCCION AUDIOVISUAL',
                'area_id' => 42,
                'regional_id' => 1,
            ),
            218 => 
            array (
                'id' => 219,
                
                'description' => 'AUXILIAR I DE EXPERIENCIA MEMORABLE',
                'area_id' => 22,
                'regional_id' => 1,
            ),
            219 => 
            array (
                'id' => 220,
                
                'description' => 'AUXILIAR COMERCIAL',
                'area_id' => 54,
                'regional_id' => 1,
            ),
            220 => 
            array (
                'id' => 221,
                
                'description' => 'DIRECTOR DE SEGURIDAD',
                'area_id' => 12,
                'regional_id' => 2,
            ),
            221 => 
            array (
                'id' => 222,
                
                'description' => 'JEFE DE COMPRAS',
                'area_id' => 55,
                'regional_id' => 2,
            ),
            222 => 
            array (
                'id' => 223,
                
                'description' => 'DIRECTOR COMERCIAL TIENDAS',
                'area_id' => 56,
                'regional_id' => 2,
            ),
            223 => 
            array (
                'id' => 224,
                
                'description' => 'JEFE DE ARQUITECTURA',
                'area_id' => 25,
                'regional_id' => 2,
            ),
            224 => 
            array (
                'id' => 225,
                
                'description' => 'DIRECTOR COMERCIAL TIENDAS',
                'area_id' => 57,
                'regional_id' => 2,
            ),
            225 => 
            array (
                'id' => 226,
                
                'description' => 'JEFE COMERCIAL DE CADENAS',
                'area_id' => 15,
                'regional_id' => 2,
            ),
            226 => 
            array (
                'id' => 227,
                
                'description' => 'JEFE DE BANDAS',
                'area_id' => 6,
                'regional_id' => 2,
            ),
            227 => 
            array (
                'id' => 228,
                
                'description' => 'DIRECTOR COMERCIAL TIENDAS',
                'area_id' => 58,
                'regional_id' => 2,
            ),
            228 => 
            array (
                'id' => 229,
                
                'description' => 'GERENTE DE MERCADEO Y PRODUCTO',
                'area_id' => 59,
                'regional_id' => 2,
            ),
            229 => 
            array (
                'id' => 230,
                
                'description' => 'DIRECTOR JUNIOR COMERCIAL TIENDAS',
                'area_id' => 60,
                'regional_id' => 2,
            ),
            230 => 
            array (
                'id' => 231,
                
                'description' => 'GERENTE DE VISUAL MERCHANDISING Y MERCADEO',
                'area_id' => 61,
                'regional_id' => 2,
            ),
            231 => 
            array (
                'id' => 232,
                
                'description' => 'JEFE DE INFORMACION',
                'area_id' => 62,
                'regional_id' => 2,
            ),
            232 => 
            array (
                'id' => 233,
                
                'description' => 'JEFE DESARROLLO DE PRODUCTO',
                'area_id' => 46,
                'regional_id' => 2,
            ),
            233 => 
            array (
                'id' => 234,
                
                'description' => 'DIRECTOR COMERCIAL DE VENTAS NACIONAL',
                'area_id' => 63,
                'regional_id' => 2,
            ),
            234 => 
            array (
                'id' => 235,
                
                'description' => 'DIRECTOR DE PRODUCCION FACTORY',
                'area_id' => 26,
                'regional_id' => 2,
            ),
            235 => 
            array (
                'id' => 236,
                
                'description' => 'DIRECTOR DE CONTABILIDAD',
                'area_id' => 28,
                'regional_id' => 2,
            ),
            236 => 
            array (
                'id' => 237,
                
                'description' => 'JEFE DE COMERCIO EXTERIOR',
                'area_id' => 29,
                'regional_id' => 2,
            ),
            237 => 
            array (
                'id' => 238,
                
                'description' => 'DIRECTOR DE CREDITO Y CARTERA',
                'area_id' => 32,
                'regional_id' => 2,
            ),
            238 => 
            array (
                'id' => 239,
                
                'description' => 'COORDINADOR DE OPERACIONES JUNIOR',
                'area_id' => 28,
                'regional_id' => 2,
            ),
            239 => 
            array (
                'id' => 240,
                
                'description' => 'JEFE DE MERCADEO',
                'area_id' => 49,
                'regional_id' => 2,
            ),
            240 => 
            array (
                'id' => 241,
                
                'description' => 'ANALISTA DE CONTABILIDAD',
                'area_id' => 28,
                'regional_id' => 2,
            ),
            241 => 
            array (
                'id' => 242,
                
                'description' => 'JEFE DE CENTRO DE DISTRIBUCIÓN',
                'area_id' => 6,
                'regional_id' => 2,
            ),
            242 => 
            array (
                'id' => 243,
                
                'description' => 'REPRESENTANTE LEGAL',
                'area_id' => 12,
                'regional_id' => 2,
            ),
            243 => 
            array (
                'id' => 244,
                
                'description' => 'ANALISTA DE INFORMACION',
                'area_id' => 54,
                'regional_id' => 2,
            ),
            244 => 
            array (
                'id' => 245,
                
                'description' => 'JEFE DE INFRAESTRUCTURA',
                'area_id' => 45,
                'regional_id' => 2,
            ),
            245 => 
            array (
                'id' => 246,
                
                'description' => 'JEFE DE DISEÑO GRÁFICO',
                'area_id' => 42,
                'regional_id' => 2,
            ),
            246 => 
            array (
                'id' => 247,
                
                'description' => 'DIRECTOR DE CEDI',
                'area_id' => 6,
                'regional_id' => 2,
            ),
            247 => 
            array (
                'id' => 248,
                
                'description' => 'DIRECTOR DE CANALES ALTERNATIVOS',
                'area_id' => 44,
                'regional_id' => 2,
            ),
            248 => 
            array (
                'id' => 249,
                
                'description' => 'GERENTE DE OPERACIONES',
                'area_id' => 64,
                'regional_id' => 2,
            ),
            249 => 
            array (
                'id' => 250,
                
                'description' => 'GERENTE FINANCIERO',
                'area_id' => 65,
                'regional_id' => 2,
            ),
            250 => 
            array (
                'id' => 251,
                
                'description' => 'CONSULTOR SAP',
                'area_id' => 45,
                'regional_id' => 2,
            ),
            251 => 
            array (
                'id' => 252,
                
                'description' => 'ANALISTA SOPORTE POS',
                'area_id' => 45,
                'regional_id' => 2,
            ),
            252 => 
            array (
                'id' => 253,
                
                'description' => 'DIRECTOR JUNIOR COMERCIAL TIENDAS',
                'area_id' => 58,
                'regional_id' => 2,
            ),
            253 => 
            array (
                'id' => 254,
                
                'description' => 'JEFE SOURCING',
                'area_id' => 53,
                'regional_id' => 2,
            ),
            254 => 
            array (
                'id' => 255,
                
                'description' => 'JEFE DE E-COMMERCE',
                'area_id' => 13,
                'regional_id' => 2,
            ),
            255 => 
            array (
                'id' => 256,
                
                'description' => 'GERENTE GENERAL',
                'area_id' => 51,
                'regional_id' => 2,
            ),
            256 => 
            array (
                'id' => 257,
                
                'description' => 'GERENTE COMERCIAL',
                'area_id' => 66,
                'regional_id' => 2,
            ),
            257 => 
            array (
                'id' => 258,
                
                'description' => 'ANALISTA DE VISUAL MERCHANDISING',
                'area_id' => 27,
                'regional_id' => 2,
            ),
            258 => 
            array (
                'id' => 259,
                
                'description' => 'JEFE DE PROCESOS Y PROCEDIMIENTOS',
                'area_id' => 67,
                'regional_id' => 2,
            ),
            259 => 
            array (
                'id' => 260,
                
                'description' => 'AUXILIAR DE VISUAL MERCHANDISING',
                'area_id' => 27,
                'regional_id' => 2,
            ),
            260 => 
            array (
                'id' => 261,
                
                'description' => 'JEFE DE VISUAL MERCHANDISING',
                'area_id' => 27,
                'regional_id' => 2,
            ),
            261 => 
            array (
                'id' => 262,
                
                'description' => 'PLANNER CANALES ALTERNATIVOS',
                'area_id' => 47,
                'regional_id' => 2,
            ),
            262 => 
            array (
                'id' => 263,
                
                'description' => 'COORDINADOR DE CONTABILIDAD',
                'area_id' => 28,
                'regional_id' => 2,
            ),
            263 => 
            array (
                'id' => 264,
                
                'description' => 'JEFE DE DESPACHOS',
                'area_id' => 23,
                'regional_id' => 2,
            ),
            264 => 
            array (
                'id' => 265,
                
                'description' => 'ABOGADO',
                'area_id' => 48,
                'regional_id' => 2,
            ),
            265 => 
            array (
                'id' => 266,
                
                'description' => 'JEFE DE CATEGORIA DE BIENESTAR Y BELLEZA',
                'area_id' => 46,
                'regional_id' => 2,
            ),
            266 => 
            array (
                'id' => 267,
                
                'description' => 'COORDINADOR DE DISEÑO GRAFICO',
                'area_id' => 42,
                'regional_id' => 2,
            ),
            267 => 
            array (
                'id' => 268,
                
                'description' => 'SUPPLY PLANNER',
                'area_id' => 47,
                'regional_id' => 2,
            ),
            268 => 
            array (
                'id' => 269,
                
                'description' => 'JEFE DE MARKETING DIGITAL',
                'area_id' => 41,
                'regional_id' => 2,
            ),
            269 => 
            array (
                'id' => 270,
                
                'description' => 'DIRECTOR DE PLANEACION',
                'area_id' => 47,
                'regional_id' => 2,
            ),
            270 => 
            array (
                'id' => 271,
                
                'description' => 'DIRECTOR DE FRANQUICIAS INTERNACIONAL',
                'area_id' => 40,
                'regional_id' => 2,
            ),
            271 => 
            array (
                'id' => 272,
                
                'description' => 'ANALISTA DE VENTAS NACIONAL',
                'area_id' => 15,
                'regional_id' => 2,
            ),
            272 => 
            array (
                'id' => 273,
                
                'description' => 'JEFE DE FRANQUICIAS',
                'area_id' => 68,
                'regional_id' => 2,
            ),
            273 => 
            array (
                'id' => 274,
                
                'description' => 'COORDINADOR DE GESTIÓN HUMANA',
                'area_id' => 52,
                'regional_id' => 2,
            ),
            274 => 
            array (
                'id' => 275,
                
                'description' => 'JEFE DE FUNDACIONES',
                'area_id' => 69,
                'regional_id' => 2,
            ),
            275 => 
            array (
                'id' => 276,
                
                'description' => 'DIRECTOR SOURCING NO TEXTIL',
                'area_id' => 53,
                'regional_id' => 2,
            ),
            276 => 
            array (
                'id' => 277,
                
                'description' => 'JEFE DE CATEGORIA YOI',
                'area_id' => 46,
                'regional_id' => 2,
            ),
            277 => 
            array (
                'id' => 278,
                
                'description' => 'ESPECIALISTA DE COMUNICACIONES',
                'area_id' => 70,
                'regional_id' => 2,
            ),
            278 => 
            array (
                'id' => 279,
                
                'description' => 'ESPECIALISTA DE GESTIÓN HUMANA',
                'area_id' => 52,
                'regional_id' => 2,
            ),
            279 => 
            array (
                'id' => 280,
                
                'description' => 'ANALISTA DISEÑO DE MODAS',
                'area_id' => 46,
                'regional_id' => 2,
            ),
            280 => 
            array (
                'id' => 281,
                
                'description' => 'AUXILIAR II DE EXPERIENCIA MEMORABLE',
                'area_id' => 22,
                'regional_id' => 2,
            ),
            281 => 
            array (
                'id' => 282,
                
                'description' => 'AUXILIAR DE MATERIALES',
                'area_id' => 45,
                'regional_id' => 2,
            ),
            282 => 
            array (
                'id' => 283,
                
                'description' => 'CATEGORY PLANNER YOI',
                'area_id' => 47,
                'regional_id' => 2,
            ),
            283 => 
            array (
                'id' => 284,
                
                'description' => 'AUXILIAR DE CARTERA',
                'area_id' => 32,
                'regional_id' => 2,
            ),
            284 => 
            array (
                'id' => 285,
                
                'description' => 'JEFE DE SUPPLY',
                'area_id' => 47,
                'regional_id' => 2,
            ),
            285 => 
            array (
                'id' => 286,
                
                'description' => 'ANALISTA DE ENTRENAMIENTO Y FORMACIÓN',
                'area_id' => 71,
                'regional_id' => 2,
            ),
            286 => 
            array (
                'id' => 287,
                
                'description' => 'ANALISTA DE SISTEMAS',
                'area_id' => 45,
                'regional_id' => 2,
            ),
            287 => 
            array (
                'id' => 288,
                
                'description' => 'COORDINADOR DE PLANEACIÓN FINANCIERA',
                'area_id' => 38,
                'regional_id' => 2,
            ),
            288 => 
            array (
                'id' => 289,
                
                'description' => 'DIRECTOR DE SOURCING TEXTIL',
                'area_id' => 36,
                'regional_id' => 2,
            ),
            289 => 
            array (
                'id' => 290,
                
                'description' => 'ANALISTA DE MERCADEO',
                'area_id' => 49,
                'regional_id' => 2,
            ),
            290 => 
            array (
                'id' => 291,
                
                'description' => 'ANALISTA DE DISEÑO GRAFICO',
                'area_id' => 42,
                'regional_id' => 2,
            ),
            291 => 
            array (
                'id' => 292,
                
                'description' => 'ANALISTA DE CARTERA',
                'area_id' => 32,
                'regional_id' => 2,
            ),
            292 => 
            array (
                'id' => 293,
                
                'description' => 'JEFE DE PRODUCCION LILI PRINT',
                'area_id' => 24,
                'regional_id' => 2,
            ),
            293 => 
            array (
                'id' => 294,
                
                'description' => 'ANALISTA DE PLANEACION FINANCIERA',
                'area_id' => 38,
                'regional_id' => 2,
            ),
            294 => 
            array (
                'id' => 295,
                
                'description' => 'CATEGORY PLANNER DE BIENESTAR Y BELLEZA',
                'area_id' => 47,
                'regional_id' => 2,
            ),
            295 => 
            array (
                'id' => 296,
                
                'description' => 'COORDINADOR DE VISUAL MERCHANDISING',
                'area_id' => 27,
                'regional_id' => 2,
            ),
            296 => 
            array (
                'id' => 297,
                
                'description' => 'COORDINADOR DE VISUAL MERCHANDISING INTERNACIONAL',
                'area_id' => 27,
                'regional_id' => 2,
            ),
            297 => 
            array (
                'id' => 298,
                
                'description' => 'ADMINISTRADOR DE BASE DE DATOS',
                'area_id' => 45,
                'regional_id' => 2,
            ),
            298 => 
            array (
                'id' => 299,
                
                'description' => 'GERENTE DE GESTION HUMANA',
                'area_id' => 72,
                'regional_id' => 2,
            ),
            299 => 
            array (
                'id' => 300,
                
                'description' => 'ANALISTA COMERCIAL',
                'area_id' => 54,
                'regional_id' => 2,
            ),
            300 => 
            array (
                'id' => 301,
                
                'description' => 'ESPECIALISTA DE CONTABILIDAD',
                'area_id' => 28,
                'regional_id' => 2,
            ),
            301 => 
            array (
                'id' => 302,
                
                'description' => 'JEFE DE EXPERIENCIA MEMORABLE DE SERVICIO',
                'area_id' => 22,
                'regional_id' => 2,
            ),
            302 => 
            array (
                'id' => 303,
                
                'description' => 'ANALISTA DE SEGURIDAD Y SALUD EN EL TRABAJO',
                'area_id' => 73,
                'regional_id' => 2,
            ),
            303 => 
            array (
                'id' => 304,
                
                'description' => 'JEFE DE ENTRENAMIENTO Y FORMACION',
                'area_id' => 71,
                'regional_id' => 2,
            ),
            304 => 
            array (
                'id' => 305,
                
                'description' => 'AUXILIAR DE CONTABILIDAD',
                'area_id' => 28,
                'regional_id' => 2,
            ),
            305 => 
            array (
                'id' => 306,
                
                'description' => 'ANALISTA DE PLANEACION',
                'area_id' => 47,
                'regional_id' => 2,
            ),
            306 => 
            array (
                'id' => 307,
                
                'description' => 'COORDINADOR ADMINISTRATIVO COMERCIAL',
                'area_id' => 54,
                'regional_id' => 2,
            ),
            307 => 
            array (
                'id' => 308,
                
                'description' => 'JEFE DE MANTENIEMINTO E INTERNACIONAL',
                'area_id' => 25,
                'regional_id' => 2,
            ),
            308 => 
            array (
                'id' => 309,
                
                'description' => 'JEFE DE AUDITORIA',
                'area_id' => 30,
                'regional_id' => 2,
            ),
            309 => 
            array (
                'id' => 310,
                
                'description' => 'COORDINADOR DE RECLUTAMIENTO Y SELECCIÓN',
                'area_id' => 37,
                'regional_id' => 2,
            ),
        ));
        
        
    }
}