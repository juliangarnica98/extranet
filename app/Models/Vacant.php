<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacant extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'city',
        'description',
        'state',
        'salary',
        'experience',
        'num_vacants',
        'num_aplic',
        'type_cv_id'
    ];

    public function cvs()
    {
        return $this->hasMany('App\Cv');
    }
    public function typecv()
    {
        return $this->belongsTo('App\Models\Type_cv');
    }
}
