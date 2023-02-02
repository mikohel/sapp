<?php

namespace App\Imports;

use App\Models\Import;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;


class ActividadesImport implements ToModel, WithHeadingRow, WithBatchInserts
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Import([
            //Las columnas de la izquierda son de la BD y la de la derecha pertenecen al excel
            'folio' => $row['folio'],
            'descripcion' => $row['descripcion'],
            'medio_verificacion' => $row['medio'],
            'programa' => $row['programa'],
            'tipo' => 2
        ]);
    }

    public function batchSize(): int
    {
        return 500;
    }
}
