<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;


     // if your key name is not 'id'
    // you can also set this to null if you don't have a primary key
    protected $primaryKey = 'folio';

    public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';


    protected $fillable = [
        'folio','descripcion','medio_de_verificacion','programa','tipo'
    ];
   
    public function programas()
    {
      return $this->hasMany('App\Models\Programa');
    }
}
