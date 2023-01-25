<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'document',
        'state',
        'position_id',
        'gerencia_id',
        'regional_id',
        'state_e',
        // 'centro_d'
    ];
    // public function user()
    // {
    //     return $this->belongsTo('App\User');
    // }

    public function position() 
    {
        return $this->hasOne('App\Position');
    }
    public function retirement()
    {
        return $this->belongsTo('App\Retirement');
    }
    public function gerencia() 
    {
        return $this->hasOne('App\Gerencia');
    }
    public function regional() 
    {
        return $this->hasOne('App\Regional');
    }
}
