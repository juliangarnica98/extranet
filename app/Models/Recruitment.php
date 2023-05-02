<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;


    protected $guarded=[];
    public function cvvacant() {
        return $this->belongsTo('App\Models\Cvvacant');
    }

    public function boss(){
        return $this->belongsTo(Boss::class);
    }
}
