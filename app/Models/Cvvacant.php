<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cvvacant extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function state()
    {
        return $this->belongsTo('App\Models\State');
    }
    public function recruitment()
    {
        return $this->hasOne('App\Models\Recruitment');
    }
    public function discarded()
    {
    return $this->hasOne('App\Models\Discarded');
    }
    public function interview()
    {
        return $this->hasOne('App\Models\Interview');
    }
}
