@extends('adminlte::page')

@section('title', 'Editar Plantel')

@section('content_header')
    <h1>
        Editar Plantel: {{$plantel->nombre_plantel}}
    </h1>
@stop

@section('plugins.Select2', true)

@section('content')
    <div class="card">
        <div class="card-header">

            <livewire:editar-plantel 
                :plantel="$plantel"
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