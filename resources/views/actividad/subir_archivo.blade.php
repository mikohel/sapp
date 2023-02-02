@extends('adminlte::page')

@section('title', 'Editar Actividad')

@section('content_header')
    <h1>
        Subir actividad
    </h1>
@stop

@section('plugins.Select2', true)

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <form action="{{ route('archivo.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    Title:
                    <br>
                    <input type="text" name="nombre" class="form-control">
                    <input type="text" name="descripcion" class="form-control">

                    <br>

                    Image/File:
                    <br>
                    <input type="file" name="dir_archivo" id="">
                    <br><br>

                    <input type="submit" value="Save archivo" class="btn btn-success">
                </form>
            </div>
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