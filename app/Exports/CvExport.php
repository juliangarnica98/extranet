<?php

namespace App\Exports;

use App\Models\Cv;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CvExport implements FromCollection, WithHeadings
{
    use Exportable;


    protected $request;
    public function __construct($request)
    {
        $this->request = $request;
    }

    public function collection()
    {
        
        $campos = [];
        $request = $this->request  ;  
        $name = $this->request->nombre ? array_push($campos, "name") : '';
        $ciudad = $this->request->ciudad ? array_push($campos, "city_address") : '';
        $celular = $this->request->celular ? array_push($campos, "num_cell") : '';
        $correo = $this->request->correo ? array_push($campos, "email") : '';
        $direccion = $this->request->direccion ? array_push($campos, "address") : '';
        $educacion = $this->request->educacion ? array_push($campos, "academic_profile") : '';
        // return $campos;
        return Cv::whereIn('id',$request->ids)->get($campos);
    }
    public function headings(): array
    {
        $encabezados=[];
        $name = $this->request->nombre ? array_push($encabezados, "Nombre") : '';
        $ciudad = $this->request->ciudad ? array_push($encabezados, "Ciudad") : '';
        $celular = $this->request->celular ? array_push($encabezados, "Celular") : '';
        $correo = $this->request->correo ? array_push($encabezados, "Correo") : '';
        $direccion = $this->request->direccion ? array_push($encabezados, "Direccion") : '';
        $educacion = $this->request->educacion ? array_push($encabezados, "Perfil academico") : '';
        return [$encabezados];    
    }



}
