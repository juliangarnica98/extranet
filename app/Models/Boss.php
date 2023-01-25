<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boss extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'cargo',
        'regional_id',
        // 'cdc_id'
    ];
    public function regional()
    {
        return $this->belongsTo('App\Regional');
    }
    public function cdcs()
    {
        return $this->hasMany('App\Cdc');
    }
    // public function cdcs()
    // {
    //     return $this->hasMany('App\Cdc');
    // }
}
