<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    protected $fillable = ['name', 'email', 'fone', 'address'];
    protected $dates = ['deleted_at'];

    public function jobs()
    {
        return $this->hasMany('App\Students');
    }
}