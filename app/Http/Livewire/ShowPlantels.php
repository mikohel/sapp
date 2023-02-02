<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Programa;
use App\Models\Plantel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShowPlantels extends Component
{
    public $selectTipo=null, $selectPlantel=null, $actividades=null;
    public $plantels, $activity,$plantelito;

    protected $listeners = ['refreshTable' => 'show'];
    
    public function render()
    {

        if(auth()->user()->tipo_role==2){
        return view('livewire.show-plantels');
        } 
        else if (auth()->user()->tipo_role==1){

            $this->plantelito = Plantel::where('tipo', auth()->user()->plantel_id)->get();
            $this->activity = DB::table('programas')->where('plantel_id', auth()->user()->plantel_id)
            ->join('activities', 'programas.activity_folio', '=', 'activities.folio')
            ->orderBy('activity_folio', 'ASC')->get();

            return view('livewire.show-plantel');        }
            
    }

    public function updatedselectTipo($tipo_id)
    {
        $this->plantels = Plantel::where('tipo', $tipo_id)->get();
    }

    public function updatedselectPlantel($plantel_id)
    {
        $this->activity = DB::table('programas')->where('plantel_id',$plantel_id)
        ->join('activities', 'programas.activity_folio', '=', 'activities.folio')
        ->orderBy('activity_folio', 'ASC')->get();
    }

    public function show()
    {
        $this->emit('showTable');
    }

    
}
