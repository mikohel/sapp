@extends('adminlte::page')

@section('title', 'Usuarios')

@section('plugins.Datatables', true)

@section('content_header')
    <h1>Usuarios 
        <a href="{{route('personal.create')}}">
            <button type="button" class="btn btn-success "> <i class="fas fa-plus-circle"></i> Nuevo</button>
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
                              <th>Nombre</th>
                              <th># Empleado</th>
                              <th>Puesto</th>
                              <th>Plantel</th>
                              <th>Correo</th>
                              <th>Rol</th>
                              <th>Status</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            @foreach ($users as $personal)
                              <tr>
                                <td>{{$personal->name.' '.$personal->apellido_paterno.' '.$personal->apellido_materno}}</td>
                                <td>{{$personal->numero_empleado}}</td>
                                <td>{{$personal->puesto_usuario}}</td>
                                <td>{{$personal->nombre_plantel}}</td>
                                <td>{{$personal->email}}</td>
                                <td>
                                  @if ($personal->tipo_role == 1)
                                    {{$personal->tipo_role = 'PLANTEL'}}
                                  @elseif ($personal->tipo_role == 2)
                                    {{$personal->tipo_role = 'DIRECCIÓN'}}
                                  @else
                                    {{$personal->tipo_role = 'ADMINISTRADOR'}}
                                  @endif
                                </td>
                                <td>
                                  @if ($personal->status == 1)
                                    <span class="badge badge-success">{{$personal->status = 'ACTIVO'}}</span>
                                  @else
                                    <span class="badge badge-danger">{{$personal->status = 'INACTIVO'}}</span>
                                  @endif
                                </td>
                                <td>
                                  <a href="{{route('personal.edit', $personal->id)}}">
                                  <button class="btn btn-primary btn-sm btnEditUsuario" title="Editar Usuario"><i class="fas fa-pencil-alt"></i></button>
                                  </a>
                                  <a href="{{route('personal.editpass', $personal->id)}}">
                                    <button class="btn btn-warning btn-sm btnViewUsuario" title="Restaurar Contraseña"><i class="fas fa-solid fa-key"></i></button>  
                                  </a>
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