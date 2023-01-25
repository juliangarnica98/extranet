<?php

namespace App\Exports;

use App\Models\Retirement;
use GuzzleHttp\Psr7\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;

class RetirementExport implements  FromQuery,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

    function __construct($id) {
        $this->id = $id;
    }

    public function query()
    {
        return Retirement::query()->where('user_id',$this->id);
    }

    public function headings(): array
    {
        return ["id", "fecha_retiro", "fecha_retiro","documento","nombre","desempeño","razon","ultimo día","dinero pendiente","razon dinero","cantidad dinero","fecha 1","fecha 2","fecha 3","fecha 4","fecha 5","fecha dominical 1","fecha dominical 2","fecha dominical 3","fecha dominical 4","fecha dominical 5","celular","carta de renuncia","certificado","entrega administrador","entrega tienda","usuario","colaborador","tipo retiro"];
    }

    
}
