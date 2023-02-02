@extends('adminlte::page')

@section('title', 'Usuarios')

@section('plugins.Datatables', true)


@section('plugins.Datatables', true)

@section('content')
    <!-- SE MUESTRA MENSAJE DE USUARIO CREADO CORRECTAMENTE -->
    @if (session()->has('mensaje'))
        <div class="alert alert-success" role="alert">
            {{ session('mensaje')}}
        </div>       
    @endif
    <!-- FIN MSJ USUARIO CREADO EXITOSAMENTE -->
    <div class="card">
        <div class="card-header">

        <livewire:show-plantels />
        

            
        </div>
    </div>
@stop

@section('css')
    
@stop

@section('js')
    <script>  </script>
    
@stop