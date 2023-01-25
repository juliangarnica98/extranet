<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'area_id',
        'regional_id'
        
    ];
    public function area()
    {
        return $this->belongsTo('App\Area');
    }
    public function regional()
    {
        return $this->belongsTo('App\Regional');
    }

    public function collaborator()
    {
        return $this->belongsTo('App\Collaborator');
    }
}
