<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Evento extends Model
{
    protected $table = 'eventos';
    protected $fillable = [
        'tipo_id',
        'user_id',
        'evento_id',
        'url'
    ];

    protected $hidden = [
        'control'
    ];

    public function pre_registrados(): BelongsToMany {
        return $this->belongsToMany(User::class, 'participantes', 'evento_id', 'user_id')->where('tipo_id',1);
    }
    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class, 'participantes', 'evento_id', 'user_id')->where('tipo_id',2);
    }
    public function ponentes(): BelongsToMany {
        return $this->belongsToMany(User::class, 'participantes', 'evento_id', 'user_id')->where('tipo_id',3);
    }
    public function organizadores(): BelongsToMany {
        return $this->belongsToMany(User::class, 'participantes', 'evento_id', 'user_id')->where('tipo_id',4);
    }
}
