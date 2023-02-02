<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Plantel;
use App\Models\User;

class EditarUsuario extends Component
{
    public $user_id, $personalNombre, $personalPlantelid, $personalPaterno, $personalMaterno, $personalNumero, $personalPuesto, $personalRol,
    $personalEmail, $personalStatus;

    protected $rules = [
        'personalPaterno' => 'required|string|max:30',
        'personalMaterno' => 'required|string|max:30',
        'personalNombre' => 'required|string|max:30',
        'personalNumero' => 'required|numeric',
        'personalPuesto' => 'required|string|max:50',
        'personalPlantelid' => 'required|string',
        'personalRol' => 'required|string',
        'personalEmail' => 'required|email',
        'personalStatus' => 'required',

    ];

    public function mount(User $user)
    {
        $this->user_id = $user->id;
        $this->personalNombre = $user->name;
        $this->personalPlantelid = $user->plantel_id;
        $this->personalPaterno = $user->apellido_paterno;
        $this->personalMaterno = $user->apellido_materno;
        $this->personalNumero = $user->numero_empleado;
        $this->personalPuesto = $user->puesto_usuario;
        $this->personalRol = $user->tipo_role;
        $this->personalEmail = $user->email;
        $this->personalStatus = $user->status;

    }

    public function editarUsuario()
    {
        $datos = $this->validate();

        //Encontrar el usuario a Editar
        $user = User::find($this->user_id);

        //Asignar valores
        $user->name = strtoupper($datos['personalNombre']);
        $user->apellido_paterno = strtoupper($datos['personalPaterno']);
        $user->apellido_materno = strtoupper($datos['personalMaterno']);
        $user->numero_empleado = $datos['personalNumero'];
        $user->puesto_usuario = strtoupper($datos['personalPuesto']);
        $user->email = $datos['personalEmail'];
        $user->plantel_id = $datos['personalPlantelid'];
        $user->tipo_role = $datos['personalRol'];
        $user->status = $datos['personalStatus'];

        //Guardar usuario
        $user->save();

        //redireccionar
        session()->flash('mensaje', 'El usuario se actualizó correctamente');
        return redirect()->route('personal');

    }

    public function render()
    {
        $planteles = Plantel::all();
        return view('livewire.editar-usuario', [
            'planteles' => $planteles
        ]);
    }
}
