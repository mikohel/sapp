<?php

namespace App\Http\Controllers;

use App\Imports\ActivityImport;
use App\Models\Activity;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Programa;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activity = DB::table('activities')
                ->get();
        return view('actividad.actividades', compact('activity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('actividad.import');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('import_file');
        $tipo = $request->input('tipo');
        $plantels = DB::table('plantels')->where('tipo', $tipo)->get();

        Excel::import(new ActivityImport($tipo,$plantels), $file);
        
        //Mensaje de que se creo el usuario correctamente
        session()->flash('mensaje', 'ACTIVIDADES IMPORTADOS EXITOSAMENTE');

        //Redireccionar al usuario
        return redirect()->route('actividades');
        
    }

    public function repactivity(Activity $actividad)
    {
        //dd($actividad);

        return view('actividad.reprogramar', [
            'actividad' => $actividad
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        //dd($activity);

        return view('actividad.edit',[
            'activity' =>$activity
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
