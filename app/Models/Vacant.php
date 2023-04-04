<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacant extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'city',
        'description',
        'state',
        'salary',
        'experience',
        'num_vacants',
        'education',
        'language',
        'availability_travel',
        'type_contract',
        'area',
        'filtro',
        'num_aplic',
        'type_cv_id',
        // 'area_id'
    ];

    // public function cvs()
    // {
    //     return $this->hasMany('App\Cv');
    // }
    public function typecv()
    {
        return $this->belongsTo('App\Models\Type_cv');
    }
    public function area()
    {
        return $this->belongsTo('App\Models\Area');
    }


    public function scopeAreas($query,$busqueda){
        return $query->where('area', 'like', '%'.$busqueda.'%');
    }
    public function scopeSalarys($query,$busqueda){
        return $query->where('filtro', 'like', '%'.$busqueda.'%');
    }
    // public function scopeCity($query,$busqueda){
    //     return $query->where('city', 'like', '%'.$busqueda.'%');
    // }
}
