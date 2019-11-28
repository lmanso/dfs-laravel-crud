<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'name', 'gender', 'weight', 'size', 'img', 'about', 'race_id', 'age',
    ];
     
    public function race()
    {
        return $this->belongsTo('App\Race');
    }
}
