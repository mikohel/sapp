@extends('adminlte::page')

@section('title', 'Usuarios')

@section('plugins.Datatables', true)

@section('content_header')
    <h1>Actividades Planteles</h1>
@stop

@section('content')
<livewire:show-plantel/>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    @livewireScripts
    <script> $('#tablePersonal').DataTable(); </script>
    <script></script>
@stop