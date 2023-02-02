@extends('adminlte::page')

@section('title', 'Usuarios')

@section('plugins.Datatables', true)

@section('content_header')
    <h1>Actividades 
        <a href="{{route('importar.archivo')}}">
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
                        <table class="table table-hover table-bordered" id="tablePersonal">
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
                              <td>{{$activity->medio_verificacion}}</td>
                              <td>{{$activity->programa}}</td>
                              <td>{{$activity->tipo}}</td>
                              <td>
                                <button class="btn btn-info btn-sm btnViewUsuario" title="Ver usuario"><i class="far fa-eye"></i></button>
                                <button class="btn btn-primary btn-sm btnEditUsuario" title="Editar Usuario"><i class="fas fa-pencil-alt"></i></button>
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
    <script> $('#tablePersonal').DataTable(); </script>
    
@stop