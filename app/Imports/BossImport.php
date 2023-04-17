<?php

namespace App\Imports;

use App\Models\Boss;
use App\Models\User;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Validators\Failure;
use PHPUnit\Framework\SkippedTest;
use Throwable;

class BossImport implements ToModel, WithHeadingRow, SkipsOnError, WithValidation, SkipsOnFailure

{
    use Importable, SkipsErrors; 

 

    public function model(array $row)
    {
        $user = Boss::where('email',$row['email'])->first();
        
        if($user){
            $user->delete(); 
        }
        return Boss::create(
            [
                'name' => $row['nombre'],
                'email'=>$row['email'], 
                'cargo' => $row['cargo'],
                'centro_costo' => $row['ceco'],
                'documento'=>$row['documento'],
            ]);

    }
    public function rules(): array
    {
        return [
        ];
    }
    public function onError(Throwable $e)
    {
    }
    public function onFailure(Failure ...$failures)
    {
       
    }
   
    
}