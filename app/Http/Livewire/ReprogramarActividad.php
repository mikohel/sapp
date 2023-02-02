<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use App\Models\Reprogramacion;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ReprogramarActividad extends Component
{
    public $actividad_folio, $mes_origen, $mes_destino, $motivo;

    protected $rules = [
        'mes_origen' => 'required|string',
        'mes_destino' => 'required|string',
        'motivo' => 'required|string|max:255',
    ];

    public function mount(Activity $actividad)
    {
        $this->actividad_folio = $actividad->folio;
    }

    public function reprogramarActividad()
    {
        $datos = $this->validate();
        $folio = $this->actividad_folio;

        $programas = DB::table('programas')
        ->select('id')
        ->where('activity_folio',$folio)->get();

        $datosId = array();
        $cont = 0;

        //echo("hola");

        foreach($programas as $programa)
        {
            //echo $programa->id;
            $datosId[$cont] = $programa->id;
            $cont++;
        }

        //var_dump($datos);
        //dd();

        $reprogramacion = Reprogramacion::create([
            'fecha_original' => $datos['mes_origen'],
            'fecha_reprogramacion' => $datos['mes_destino'],
            'motivo' => strtoupper($datos['motivo']),
        ]);

        $reprogramacion->programas()->sync($datosId);

        DB::table('programas')
        ->where('activity_folio', $folio)
        ->update(['mes' => $datos['mes_destino']]);

        //Mensaje de que se creo el usuario correctamente
        session()->flash('mensaje', 'LA ACTIVIDAD '.$folio.' SE REPROGRAMO CORRECTAMENTE');

        //Redireccionar
        return redirect()->route('actividades');


    }

    public function render()
    {
        return view('livewire.reprogramar-actividad');
    }
}
