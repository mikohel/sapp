@extends('adminlte::page')

@section('title', 'Reprogramar Actividad')

@section('content_header')
    <h1>Reprogramar Actividad
    </h1>
@stop

@section('plugins.Select2', true)

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Actividad: <b>{{ $actividad->folio }}</b></h4>
                <p>{{ $actividad->descripcion }}</p>
                <hr>
                <p class="mb-0"></p>
            </div>

            <livewire:reprogramar-actividad
                :actividad="$actividad"
            />

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        
    </script>
    
@stop