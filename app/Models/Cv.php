<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;
    protected $guarded = [
    ];
    public function vacants(){
        return $this->belongsToMany(Vacant::class, 'cvvacants')->withPivot('revision','pruebas','state_id'); 
    }
    public function jobs(){
        return $this->hasOne(Job::class);
    }
}
