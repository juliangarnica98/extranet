<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeRetirement extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
               
    ];
    public function retirement()
    {
        return $this->belongsTo('App\Retirement');
    }
}
