<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Plantel;

class EditarPlantel extends Component
{
    public $plantel_id, $namePlantel, $numeroPlantel, $plantelTipo;

    protected $rules = [
        'namePlantel' => 'required|string',
        'numeroPlantel' => 'required|numeric',
        'plantelTipo' => 'required'
    ];

    public function mount(Plantel $plantel)
    {
        $this->plantel_id = $plantel->id;
        $this->namePlantel = $plantel->nombre_plantel;
        $this->numeroPlantel = $plantel->numero_plantel;
        $this->plantelTipo = $plantel->tipo;

    }

    public function editarPlantel()
    {
        $datos = $this->validate();
        // Encontrar el plantel a editar
        $plantel = Plantel::find($this->plantel_id);

        //asignar valores
        $plantel->nombre_plantel = $datos['namePlantel'];
        $plantel->numero_plantel = $datos['numeroPlantel'];
        $plantel->tipo = $datos['plantelTipo'];

        //Guardar Plantel
        $plantel->save();

        //redireccionar
        session()->flash('mensaje', 'El plantel se actualizo correctamente');

        return redirect()->route('plantels');

    }

    public function render()
    {
        return view('livewire.editar-plantel');
    }
}
