<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cdc extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'regional_id',
        'boss_id'
    ];
    public function regional()
    {
        return $this->belongsTo('App\Regional');
    }
    // public function boss()
    // {
    //     return $this->belongsTo('App\Boss');
    // }
}
