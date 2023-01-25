<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
       
    ];
    public function collaborator()
    {
        return $this->belongsTo('App\Collaborator');
    }
}
