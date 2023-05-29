<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacant extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function typecv()
    {
        return $this->belongsTo('App\Models\Type_cv');
    }
    public function cvs(){
        return $this->belongsToMany(Cv::class, 'cvvacants')->withPivot('revision','pruebas','state_id'); ;
    }


    public function scopeAreas($query,$busqueda){
        return $query->where('area', 'like', '%'.$busqueda.'%');
    }
    public function scopeSalarys($query,$busqueda){
        return $query->where('filtro', 'like', '%'.$busqueda.'%');
    }

}
