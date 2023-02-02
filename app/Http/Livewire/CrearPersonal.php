<?php

namespace App\Http\Livewire;

use App\Models\Personal;
use App\Models\Plantel;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;


class CrearPersonal extends Component
{
    public $personalPaterno, $personalMaterno, $personalNombre, $personalNumero, $personalPuesto, $personalPlantelid,
           $personalRol, $personalEmail, $personalStatus, $password, $password_confirmation;

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
        'password' => 'required|confirmed|min:6',

    ];

    public function crearPersonal()
    {
        $datos = $this->validate();

        //Crear usuario
        User::create([
            'name' => strtoupper($datos['personalNombre']),
            'email' => $datos['personalEmail'],
            'password' => Hash::make($datos['password']),
            'apellido_paterno' => strtoupper($datos['personalPaterno']),
            'apellido_materno' => strtoupper($datos['personalMaterno']),
            'numero_empleado' => strtoupper($datos['personalNumero']),
            'puesto_usuario' => strtoupper($datos['personalPuesto']),
            'tipo_role' => strtoupper($datos['personalRol']),
            'plantel_id' => strtoupper($datos['personalPlantelid']),
            'status' => strtoupper($datos['personalStatus'])
        ]);
        
        //Mensaje de que se creo el usuario correctamente
        session()->flash('mensaje', 'EL USUARIO SE CREÓ CORRECTAMENTE');

        //Redireccionar al usuario
        return redirect()->route('personal');

    }

    public function render()
    {
        // CONSULTAR BD
        $planteles = Plantel::all();
        return view('livewire.crear-personal',[
            'planteles' => $planteles 
        ]);
    }
}
