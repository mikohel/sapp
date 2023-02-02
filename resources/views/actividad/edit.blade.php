@extends('adminlte::page')

@section('title', 'Editar Actividad')

@section('content_header')
    <h1>
        Editar Actividad: {{$activity->folio}}
    </h1>
@stop

@section('plugins.Select2', true)

@section('content')
    <div class="card">
        <div class="card-header">
            <livewire:editar-actividad
                :activity="$activity"
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