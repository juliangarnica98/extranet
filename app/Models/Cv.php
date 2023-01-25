<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type_id',
        'num_id',
        'num_cell',
        'num_cell2',
        'age',
        'email',
        'address',
        'city_address',
        'academic_profile',

        'name_last_company',
        'position_last_company',
        'funtion_last_company',
        'work_last_company',
        'date_init_company',
        'date_finally_company',

        'name_last_company2',
        'position_last_company2',
        'funtion_last_company2',
        'date_init_company2',
        'date_finally_company2',
        
        'previously_work',
        'family',
        'like_to_work',
        'should_choose',
        'shirt_size',
        'pant_size',
        'vacant_id',
        'state_id'
    ];

    public function vacant()
    {
        return $this->belongsTo('App\Vacant');
    }
    public function state()
    {
        return $this->belongsTo('App\Models\State');
    }
}
