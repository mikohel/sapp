<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class EditarPass extends Component
{
    public $user_id, $password, $password_confirmation;

    protected $rules = [
        'password' => 'required|confirmed|min:6'
    ];

    public function mount(User $user)
    {
        $this->user_id = $user->id;

    }

    public function editarPass()
    {
        $datos = $this->validate();
        
        //Encontrar 
        $user = User::find($this->user_id);

        //Asignar valores
        $user->password = Hash::make($datos['password']);

        //Guardar usuario
        $user->save();

        //redireccionar
        session()->flash('mensaje', 'Se actualizó correctamente la contraseña');
        return redirect()->route('personal');

    }
    

    public function render()
    {
        return view('livewire.editar-pass');
    }
}
