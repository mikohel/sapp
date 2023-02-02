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
            <form action="{{ route('actividades.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="personalPlantelid">Tipo de U.R.</label>
                    <select class="form-control" id="tipo" name="tipo" required>
                        <option value="">-- Seleccione --</option>
                        <option value="0">ESCOLARIZADO</option>
                        <option value="1">CEMSAD</option>
                        <option value="2">DIRECCIÓN</option>
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