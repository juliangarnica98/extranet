<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;

    protected $fillable = [
       
        'comentarios',
        'pruebas',
        'fecha',
        'ethikos',
        'ten_disc',
        'cv_id',
        'potencial_comercial',
        'iq_factorial',
        'vp_test',
    ];
    public function cv() {
        return $this->belongsTo('App\Models\Cv');
    }
}
