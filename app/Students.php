<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
protected $fillable = ['title', 'cpf', 'address', 'age', 'school_id'];

    protected $dates = ['deleted_at'];

    function company() {
        return $this->belongsTo('App\Schools');
    }
}