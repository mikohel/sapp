<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reprogramacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_original','fecha_reprogramacion','motivo'
    ];

    public function programas()
    {
        return $this->belongsToMany(Programa::class, 'programa_reprogramacion', 'reprogramacion_id', 'programa_id');
    }
}
