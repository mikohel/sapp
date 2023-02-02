<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use Livewire\Component;

class EditarActividad extends Component
{
    public $folio,$descripcion, $mVerificacion, $programa;

    protected $rules = [
        'descripcion' => 'required|string',
        'mVerificacion' => 'required|string',
        'programa' => 'required|numeric',
    ];

    public function mount(Activity $activity)
    {
        $this->folio = $activity->folio;
        $this->descripcion = $activity->descripcion;
        $this->mVerificacion = $activity->medio_de_verificacion;
        $this->programa = $activity->programa;

    }

    public function editActividad()
    {
        $datos = $this->validate();

        $activity = Activity::find($this->folio);

        $activity->descripcion = $datos['descripcion'];
        $activity->medio_de_verificacion = $datos['mVerificacion'];
        $activity->programa = $datos['programa'];

        $activity->save();

        session()->flash('mensaje', 'La Actividad se actualizo correctamente');

        return redirect()->route('actividades');

    }

    public function render()
    {
        return view('livewire.editar-actividad');
    }
}
