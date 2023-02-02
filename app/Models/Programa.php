<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;

  
    //  // if your key name is not 'id'
    // // you can also set this to null if you don't have a primary key
    // protected $primaryKey = 'folio';

    // public $incrementing = false;

    // // In Laravel 6.0+ make sure to also set $keyType
    // protected $keyType = 'string';

    protected $fillable = [
        'mes','cantidad','activity_folio', 'plantel_id', 'realizada'
    ];
   
    public function actividades()
    {
        return $this->belongsTo('App\Models\Activity');    

    }

    public function reprogramacions()
    {
        return $this->belongsToMany(Reprogramacion::class, 'programa_reprogramacion', 'reprogramacion_id', 'programa_id');
    }
}
