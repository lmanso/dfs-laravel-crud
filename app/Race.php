<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $fillable = [
        'name', 'class', 'life',
    ];
     
    public function animal()
    {
        return $this->hasMany('App\Animal');
    }
}
