<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retirement extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        // 'document_user',

        'collaborator_id',
        'document_collaborator',
        'name_collaborator',

        'type_retirement_id',

        'performance',

        'last_day',
        
        'money_pend',
        'money_conc',
        'money_amou',

        'date_1',
        'date_2',
        'date_3',
        'date_4',
        'date_5',

        'date_d_1',
        'date_d_2',
        'date_d_3',
        'date_d_4',
        'date_d_5',

        // 'cum_bonus',
        // 'cat_bonus',
        // 'ext_bonus',
        //'cell',

        'letter',
        'delivery_certificate',
        
        'admin_ent',
        'store_ent',
        'cedi_ent',
        'reason',
        'reason_performance'

    ];

    // public function user()
    // {
    //     return $this->belongsTo('App\User');
    // }
    public function collaborator() 
    {
        return $this->hasOne('App\Position');
    }
    public function typeRetirement() 
    {
        return $this->hasOne('App\TypeRetirement');
    }
}
