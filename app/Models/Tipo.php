<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipos';
    public $timestamps = false;
    protected $fillable = [
        'tipo_id',

    ];

    protected $hidden = [
        'id'
    ];
}
