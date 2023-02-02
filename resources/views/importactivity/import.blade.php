@extends('adminlte::page')

@section('title', 'Usuarios')

@section('plugins.Datatables', true)

@section('content_header')
    <h1>Importar Actividades 
    </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('importar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="personalPlantelid">Tipo de U.R.</label>
                    <select class="select2 form-control" id="personalPlantelid" wire:model="personalPlantelid" required>
                        <option value="">-- Seleccione --</option>
                        <option value="">ESCOLARIZADO</option>
                        <option value="">CEMSAD</option>
                        <option value="">DIRECCIÓN</option>
                    </select>
                </div>
        
                <div class="form-group">
                    <label for="exampleFormControlFile1">ARCHIVO DE ACTIVIDADES</label>
                    <input type="file" class="form-control-file" id="import_file" name="import_file">
                </div>
        
                <button type="submit" class="btn btn-success">Importar</button>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> $('#tablePersonal').DataTable(); </script>
    
@stop