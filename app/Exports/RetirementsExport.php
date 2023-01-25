<?php

namespace App\Exports;

use App\Models\Retirement;
use Maatwebsite\Excel\Concerns\FromCollection;

class RetirementsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Retirement::all();
    }
}
