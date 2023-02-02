@extends('adminlte::page')

@section('title', 'Actividades')

@section('plugins.Datatables', true)

@section('content_header')
    <h1>Actividades 
        <a href="{{route('actividades.import')}}">
            <button type="button" class="btn btn-success "> <i class="fas fa-plus-circle"></i> Importar</button>
        </a>
    </h1>
@stop

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
        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableActividades">
                      <thead>
                        <tr>
                          <th>Folio</th>
                          <th>Descripcion</th>
                          <th>Medio de Verificación</th>
                          <th>Programa</th>
                          <th>Tipo</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($activity as $activity)
                        <tr>
                          <td>{{$activity->folio}}</td>
                          <td>{{$activity->descripcion}}</td>
                          <td>{{$activity->medio_de_verificacion}}</td>
                          <td>{{$activity->programa}}</td>
                          <td>{{$activity->tipo}}</td>
                          <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  Action
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="{{ route('actividades.edit', $activity->folio ) }}">
                                    <button class="btn btn-outline-primary btn-sm btnEditUsuario" title="Editar Actividad"><i class="fas fa-pencil-alt"></i> Editar</button>
                                  </a>
                                  <a class="dropdown-item" href="{{ route('actividades.repactivity', $activity->folio ) }}">
                                    <button class="btn btn-outline-info btn-sm btnViewUsuario" title="Reprogramar Actividad"><i class="fas fa-reply"></i> Reprogramar</button>
                                  </a>
                                  <a class="dropdown-item" href="#">
                                    <button class="btn btn-outline-danger btn-sm btnViewUsuario" title="Eliminar Actividad"><i class="fas fa-trash"></i> Eiminar</button>
                                  </a>
                                </div>
                              </div>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> $('#tableActividades').DataTable(); </script>
    
@stop