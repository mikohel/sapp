@extends('adminlte::page')

@section('title', 'Editar Usuario')

@section('content_header')
    <h1>
        Editar Usuario: {{$user->name.' '.$user->apellido_paterno.' '.$user->apellido_materno}}
    </h1>
@stop

@section('plugins.Select2', true)

@section('content')
    <div class="card">
        <div class="card-header">
            <livewire:editar-usuario 
                :user="$user"
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