<?php

namespace App\Imports;

use App\Models\Activity;
use App\Models\Programa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

//class ActivityImport implements ToModel, WithHeadingRow, WithBatchInserts
class ActivityImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    private $tipo = null;
    private $mes = null;
    private $cantidad = null;
    private $plantels = null;

    public function __construct($tipo, $plantels)
    {
        $this->tipo = $tipo;
        $this->plantels = $plantels;
    }

    public function collection(Collection $rows)
    {   
        foreach($rows as $row)
        {
            Activity::create([
                //Las columnas de la izquierda son de la BD y la de la derecha pertenecen al excel
                'folio' => $row['folio'],
                'descripcion' => $row['descripcion'],
                'medio_de_verificacion' => $row['medio'],
                'programa' => $row['programa'],
                'tipo' => $this->tipo
            ]);

            foreach($this->plantels as $plantel){
                if(intval($row['enero']) > 0){
                    $this->mes = 1;
                    $this->cantidad = $row['enero'];
                    Programa::create([
                        'activity_folio' => $row['folio'],
                        'plantel_id' => $plantel->id,
                        'mes' =>$this->mes,
                        'cantidad' =>$this->cantidad,
                        'realizada' => 0
                    ]);
                }
                if(intval($row['febrero']) > 0){
                    $this->mes = 2;
                    $this->cantidad = $row['febrero'];
                    Programa::create([
                        'activity_folio' => $row['folio'],
                        'plantel_id' => $plantel->id,
                        'mes' =>$this->mes,
                        'cantidad' =>$this->cantidad,
                        'realizada' => 0
                    ]);
                } 
                if(intval($row['marzo']) > 0){
                    $this->mes = 3;
                    $this->cantidad = $row['marzo'];
                    Programa::create([
                        'activity_folio' => $row['folio'],
                        'plantel_id' => $plantel->id,
                        'mes' =>$this->mes,
                        'cantidad' =>$this->cantidad,
                        'realizada' => 0
                    ]);
                }
                if(intval($row['abril']) > 0){
                    $this->mes = 4;
                    $this->cantidad = $row['abril'];
                    Programa::create([
                        'activity_folio' => $row['folio'],
                        'plantel_id' => $plantel->id,
                        'mes' =>$this->mes,
                        'cantidad' =>$this->cantidad,
                        'realizada' => 0
                    ]);
                }
                if(intval($row['mayo']) > 0){
                    $this->mes = 5;
                    $this->cantidad = $row['mayo'];
                    Programa::create([
                        'activity_folio' => $row['folio'],
                        'plantel_id' => $plantel->id,
                        'mes' =>$this->mes,
                        'cantidad' =>$this->cantidad,
                        'realizada' => 0
                    ]);
                }
                if(intval($row['junio']) > 0){
                    $this->mes = 6;
                    $this->cantidad = $row['junio'];
                    Programa::create([
                        'activity_folio' => $row['folio'],
                        'plantel_id' => $plantel->id,
                        'mes' =>$this->mes,
                        'cantidad' =>$this->cantidad,
                        'realizada' => 0
                    ]);
                }
                if(intval($row['julio']) > 0){
                    $this->mes = 7;
                    $this->cantidad = $row['julio'];
                    Programa::create([
                        'activity_folio' => $row['folio'],
                        'plantel_id' => $plantel->id,
                        'mes' =>$this->mes,
                        'cantidad' =>$this->cantidad,
                        'realizada' => 0
                    ]);
                }
                if(intval($row['agosto']) > 0){
                    $this->mes = 8;
                    $this->cantidad = $row['agosto'];
                    Programa::create([
                        'activity_folio' => $row['folio'],
                        'plantel_id' => $plantel->id,
                        'mes' =>$this->mes,
                        'cantidad' =>$this->cantidad,
                        'realizada' => 0
                    ]);
                }
                if(intval($row['septiembre']) > 0){
                    $this->mes = 9;
                    $this->cantidad = $row['septiembre'];
                    Programa::create([
                        'activity_folio' => $row['folio'],
                        'plantel_id' => $plantel->id,
                        'mes' =>$this->mes,
                        'cantidad' =>$this->cantidad,
                        'realizada' => 0
                    ]);
                }
                if(intval($row['octubre']) > 0){
                    $this->mes = 10;
                    $this->cantidad = $row['octubre'];
                    Programa::create([
                        'activity_folio' => $row['folio'],
                        'plantel_id' => $plantel->id,
                        'mes' =>$this->mes,
                        'cantidad' =>$this->cantidad,
                        'realizada' => 0
                    ]);
                }
                if(intval($row['noviembre']) > 0){
                    $this->mes = 11;
                    $this->cantidad = $row['noviembre'];
                    Programa::create([
                        'activity_folio' => $row['folio'],
                        'plantel_id' => $plantel->id,
                        'mes' =>$this->mes,
                        'cantidad' =>$this->cantidad,
                        'realizada' => 0
                    ]);
                }
                if(intval($row['diciembre']) > 0){
                    $this->mes = 12;
                    $this->cantidad = $row['diciembre'];
                    Programa::create([
                        'activity_folio' => $row['folio'],
                        'plantel_id' => $plantel->id,
                        'mes' =>$this->mes,
                        'cantidad' =>$this->cantidad,
                        'realizada' => 0
                    ]);
                } 

            }
            /*
            if(intval($row['enero']) > 0){
                $this->mes = 0;
                $this->cantidad = $row['enero'];
                Programa::create([
                    'actividad_id' => $row['folio'],
                    'plantel_id' => 1,
                    'mes' =>$this->mes,
                    'cantidad' =>$this->cantidad
                ]);
            } 
            if(intval($row['febrero']) > 0){
                $this->mes = 1;
                $this->cantidad = $row['febrero'];
                Programa::create([
                    'actividad_id' => $row['folio'],
                    'plantel_id' => 1,
                    'mes' =>$this->mes,
                    'cantidad' =>$this->cantidad
                ]);
            } 
            if(intval($row['marzo']) > 0){
                $this->mes = 2;
                $this->cantidad = $row['marzo'];
                Programa::create([
                    'actividad_id' => $row['folio'],
                    'plantel_id' => 1,
                    'mes' =>$this->mes,
                    'cantidad' =>$this->cantidad
                ]);
            }
            
            Programa::create([
                'actividad_id' => $row['folio'],
                'plantel_id' => 1
            ]);
            */
        }

    }

    /*
    public function model(array $row)
    {   

       
        return new Activity([
            //Las columnas de la izquierda son de la BD y la de la derecha pertenecen al excel
            'folio' => $row['folio'],
            'descripcion' => $row['descripcion'],
            'medio_de_verificacion' => $row['medio'],
            'programa' => $row['programa'],
            'tipo' => $this->tipo
        ]);
    }
    */

    public function batchSize(): int
    {
        return 500;
    }
}
