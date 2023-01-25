<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_cv extends Model
{
    protected $fillable = [
        'description',
    
    ];
    public function vacant()
    {
        return $this->hasOne('App\Models\Vacant');
    }
}
