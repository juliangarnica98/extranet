<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('areas')->delete();
        
        DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 1,              
                'description' => 'TIENDA',
                'gerencia_id' => 2,
            ),
            1 => 
            array (
                'id' => 2,               
                'description' => 'JEFE NACIONAL NORTE',
                'gerencia_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,               
                'description' => 'venta nacional',
                'gerencia_id' => 2,
            ),
            3 => 
            array (
                'id' => 4,          
                'description' => 'CONTROL ZONE',
                'gerencia_id' => 2,
            ),
            4 => 
            array (
                'id' => 5,             
                'description' => 'ESTABILIDAD LABORAL',
                'gerencia_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,             
                'description' => 'CEDI CANAIMA',
                'gerencia_id' => 6,
            ),
            6 => 
            array (
                'id' => 7,              
                'description' => 'JEFE TIENDA NORTE',
                'gerencia_id' => 2,
            ),
            7 => 
            array (
                'id' => 8,            
                'description' => 'JEFE TIENDA CENTRO',
                'gerencia_id' => 2,
            ),
            8 => 
            array (
                'id' => 9,            
                'description' => 'JEFE NACIONAL CENTRO',
                'gerencia_id' => 2,
            ),
            9 => 
            array (
                'id' => 10,            
                'description' => 'JEFE TIENDA SUR',
                'gerencia_id' => 2,
            ),
            10 => 
            array (
                'id' => 11,             
                'description' => 'SERVICIOS GENERALES',
                'gerencia_id' => 8,
            ),
            11 => 
            array (
                'id' => 12,             
                'description' => 'SEGURIDAD',
                'gerencia_id' => 6,
            ),
            12 => 
            array (
                'id' => 13,            
                'description' => 'E-COMMERCE',
                'gerencia_id' => 2,
            ),
            13 => 
            array (
                'id' => 14,        
                'description' => 'JEFE NACIONAL SUR',
                'gerencia_id' => 2,
            ),
            14 => 
            array (
                'id' => 15,              
                'description' => 'ADMON VENTAS NACIONAL',
                'gerencia_id' => 2,
            ),
            15 => 
            array (
                'id' => 16,          
                'description' => 'UNIQUE INTERNATIONAL SAS',
                'gerencia_id' => 9,
            ),
            16 => 
            array (
                'id' => 17,           
                'description' => 'GERENTE DE FINANZAS',
                'gerencia_id' => 9,
            ),
            17 => 
            array (
                'id' => 18,              
                'description' => 'TESORERO',
                'gerencia_id' => 9,
            ),
            18 => 
            array (
                'id' => 19,              
                'description' => 'BOGOTA OCCIDENTE',
                'gerencia_id' => 10,
            ),
            19 => 
            array (
                'id' => 20,            
                'description' => 'CUARTO BLANCO',
                'gerencia_id' => 9,
            ),
            20 => 
            array (
                'id' => 21,           
                'description' => 'UNIQUE',
                'gerencia_id' => 9,
            ),
            21 => 
            array (
                'id' => 22,             
                'description' => 'SERVICIO AL CLIENTE',
                'gerencia_id' => 5,
            ),
            22 => 
            array (
                'id' => 23,            
                'description' => 'CEDI SIBERIA',
                'gerencia_id' => 6,
            ),
            23 => 
            array (
                'id' => 24,             
                'description' => 'LILI PRINT',
                'gerencia_id' => 3,
            ),
            24 => 
            array (
                'id' => 25,           
                'description' => 'PROYECTOS COMERCIALES',
                'gerencia_id' => 3,
            ),
            25 => 
            array (
                'id' => 26,               
                'description' => 'FACTORY',
                'gerencia_id' => 6,
            ),
            26 => 
            array (
                'id' => 27,         
                'description' => 'VISUAL MERCHANDISING',
                'gerencia_id' => 3,
            ),
            27 => 
            array (
                'id' => 28,  
                'description' => 'CONTABILIDAD',
                'gerencia_id' => 7,
            ),
            28 => 
            array (
                'id' => 29,             
                'description' => 'COMERCIO EXTERIOR',
                'gerencia_id' => 7,
            ),
            29 => 
            array (
                'id' => 30,            
                'description' => 'AUDITORIA Y CONTRALORIA',
                'gerencia_id' => 7,
            ),
            30 => 
            array (
                'id' => 31,               
                'description' => 'CEDI TOCANCIPÁ',
                'gerencia_id' => 6,
            ),
            31 => 
            array (
                'id' => 32,             
                'description' => 'CREDITO Y CARTERA',
                'gerencia_id' => 7,
            ),
            32 => 
            array (
                'id' => 33,  
                'description' => 'MENSAJERIA',
                'gerencia_id' => 8,
            ),
            33 => 
            array (
                'id' => 34,     
                'description' => 'SOCIAL SELLING',
                'gerencia_id' => 2,
            ),
            34 => 
            array (
                'id' => 35,
                'description' => 'ARCHIVO',
                'gerencia_id' => 7,
            ),
            35 => 
            array (
                'id' => 36,
                'description' => 'SOURCING TEXTIL',
                'gerencia_id' => 6,
            ),
            36 => 
            array (
                'id' => 37,       
                'description' => 'SELECCIÓN',
                'gerencia_id' => 4,
            ),
            37 => 
            array (
                'id' => 38, 
                'description' => 'PLANEACION FINANCIERA',
                'gerencia_id' => 7,
            ),
            38 => 
            array (
                'id' => 39,
                'description' => 'IMPUESTOS',
                'gerencia_id' => 7,
            ),
            39 => 
            array (
                'id' => 40,
                'description' => 'FRANQUICIA INTERNACIONAL',
                'gerencia_id' => 2,
            ),
            40 => 
            array (
                'id' => 41,
                'description' => 'DIGITAL',
                'gerencia_id' => 5,
            ),
            41 => 
            array (
                'id' => 42,   
                'description' => 'DISEÑO GRAFICO',
                'gerencia_id' => 5,
            ),
            42 => 
            array (
                'id' => 43,  
                'description' => 'ESTABILIDAD LABORAL CEDI',
                'gerencia_id' => 6,
            ),
            43 => 
            array (
                'id' => 44, 
                'description' => 'CANALES ALTERNATIVOS',
                'gerencia_id' => 2,
            ),
            44 => 
            array (
                'id' => 45,
                'description' => 'SISTEMAS',
                'gerencia_id' => 7,
            ),
            45 => 
            array (
                'id' => 46,
                'description' => 'MODA Y TENDENCIA',
                'gerencia_id' => 5,
            ),
            46 => 
            array (
                'id' => 47,
                'description' => 'PLANEACION DE PRODUCTO',
                'gerencia_id' => 6,
            ),
            47 => 
            array (
                'id' => 48,

                'description' => 'JURIDICO',
                'gerencia_id' => 8,
            ),
            48 => 
            array (
                'id' => 49,
                'description' => 'MERCADEO',
                'gerencia_id' => 5,
            ),
            49 => 
            array (
                'id' => 50,
                'description' => 'NÓMINA',
                'gerencia_id' => 4,
            ),
            50 => 
            array (
                'id' => 51,
                'description' => 'GERENCIA GENERAL',
                'gerencia_id' => 8,
            ),
            51 => 
            array (
                'id' => 52,
                'description' => 'GESTION HUMANA',
                'gerencia_id' => 4,
            ),
            52 => 
            array (
                'id' => 53,
                'description' => 'SOURCING NO TEXTIL',
                'gerencia_id' => 6,
            ),
            53 => 
            array (
                'id' => 54,
                'description' => 'CIC',
                'gerencia_id' => 2,
            ),
            54 => 
            array (
                'id' => 55,
                'description' => 'COMPRAS',
                'gerencia_id' => 7,
            ),
            55 => 
            array (
                'id' => 56,
                'description' => 'DIRECTOR TIENDAS SUR',
                'gerencia_id' => 2,
            ),
            56 => 
            array (
                'id' => 57,
                'description' => 'DIRECTOR TIENDAS NORTE',
                'gerencia_id' => 2,
            ),
            57 => 
            array (
                'id' => 58,
                'description' => 'DIRECTOR TIENDAS CENTRO',
                'gerencia_id' => 2,
            ),
            58 => 
            array (
                'id' => 59,
                'description' => 'GERENTE DE MERCADEO Y PRODUCTO',
                'gerencia_id' => 5,
            ),
            59 => 
            array (
                'id' => 60,
                'description' => 'DIRECTOR COMERCIAL COSTA',
                'gerencia_id' => 2,
            ),
            60 => 
            array (
                'id' => 61,
                'description' => 'GERENTE DE VISUAL Y MERCADEO',
                'gerencia_id' => 3,
            ),
            61 => 
            array (
                'id' => 62,
                'description' => 'INFORMACION',
                'gerencia_id' => 7,
            ),
            62 => 
            array (
                'id' => 63,
                'description' => 'DIRECTOR VENTA NACIONAL',
                'gerencia_id' => 2,
            ),
            63 => 
            array (
                'id' => 64,
                'description' => 'GERENTE DE OPERACIONES',
                'gerencia_id' => 6,
            ),
            64 => 
            array (
                'id' => 65,
                'description' => 'GERENTE FINANCIERO',
                'gerencia_id' => 7,
            ),
            65 => 
            array (
                'id' => 66,
                'description' => 'GERENTE COMERCIAL',
                'gerencia_id' => 2,
            ),
            66 => 
            array (
                'id' => 67,
                'description' => 'CALIDAD',
                'gerencia_id' => 4,
            ),
            67 => 
            array (
                'id' => 68,
                'description' => 'FRANQUICIA NACIONAL',
                'gerencia_id' => 2,
            ),
            68 => 
            array (
                'id' => 69,
                'description' => 'FUNDACION LOS SUEÑOS DE LILI',
                'gerencia_id' => 10,
            ),
            69 => 
            array (
                'id' => 70,
                'description' => 'COMUNICACIÓN INTERNA',
                'gerencia_id' => 4,
            ),
            70 => 
            array (
                'id' => 71,
                'description' => 'ENTRENAMIENTO Y FORMACION',
                'gerencia_id' => 4,
            ),
            71 => 
            array (
                'id' => 72,
                'description' => 'GERENTE DE GESTION HUMANA',
                'gerencia_id' => 4,
            ),
            72 => 
            array (
                'id' => 73,
                'description' => 'SST',
                'gerencia_id' => 4,
            ),
        ));
        
        
    }
}