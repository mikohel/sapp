<?php

namespace App\Http\Controllers;

use App\Models\Plantel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlantelController extends Controller
{
    public function index()
    {
        $plantels = DB::table('plantels')
                ->select('id','nombre_plantel', 'numero_plantel', 'tipo')
                ->get();
        return view('plantels.index', compact('plantels'));
    }

    public function edit(Plantel $plantel)
    {
        //dd($plantel);
        return view('plantels.edit',[
            'plantel' => $plantel
        ]);
    }
}
