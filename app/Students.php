<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
protected $fillable = ['name', 'cpf', 'address', 'age', 'school_id'];

    protected $dates = ['deleted_at'];

    function school() {
        return $this->belongsTo('App\Schools');
    }
}