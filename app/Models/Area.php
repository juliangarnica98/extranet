<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
    
    ];
    public function vacant()
    {
        return $this->hasOne('App\Models\Vacant');
    }
}
