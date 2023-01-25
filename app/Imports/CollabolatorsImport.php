<?php

namespace App\Imports;

use App\Models\Boss;
use App\Models\Cdc;
use App\Models\Collaborator;
use App\Models\Gerencia;
use App\Models\Position;
use App\Models\Regional;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CollabolatorsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null


    */

    // public function  __construct($jefe)
    // {
    //     $this->jefe = $jefe;
    // }

    public function model(array $row)
    {

        
        $positions = Position::where("description", "like", "%".$row['cargo']."%")->first();
        $regional = Regional::where("description", "like", "%".$row['regional']."%")->first();
        $gerencia = Gerencia::where("description", "like", "%".$row['gerencia']."%")->first();
        // $cdc = Gerencia::where("description", "like", "%".$row['Centro Costo']."%")->first();
        $cdc = Cdc::where('regional_id',$regional->id)->where('description',$row['centro_costo'])->first();
      
        if($cdc->boss_id != null){
            $jefe_id = $cdc->boss_id+1;
        }else{
            $jefe_id = "";
        }
        

        
        return new Collaborator(
            [
                'name' => $row['nombre'],
                'state'=>1, 
                'document' => $row['documento'],
                'position_id'=>$positions->id ,
                'gerencia_id'=>$gerencia->id ,
                'regional_id'=>$regional->id ,
                'user_id'=> $jefe_id,
                'state_e'=> '1',
                // 'centro_d'=>$row['centro_costo']
            ]);
    }
}
