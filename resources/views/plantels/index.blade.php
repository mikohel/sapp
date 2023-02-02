@extends('adminlte::page')

@section('title', 'Usuarios')

@section('plugins.Datatables', true)

@section('content_header')
    <h1>Planteles CECYTEM
        <!--
        <a href="{{route('personal.create')}}">
            <button type="button" class="btn btn-success "> <i class="fas fa-plus-circle"></i> Nuevo</button>
        </a>
      -->
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
                        <table class="table table-hover table-bordered" id="tablePlantels">
                          <thead>
                            <tr>
                              <th>Nombre Plantel</th>
                              <th>Numero de Plantel</th>
                              <th>Tipo</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($plantels as $plantel)
                            <tr>
                              <td>{{$plantel->nombre_plantel}}</td>
                              <td>{{$plantel->numero_plantel}}</td>
                              <td>
                                @if ($plantel->tipo == 0)
                                    {{$plantel->tipo = 'ESCOLARIZADO'}}
                                  @elseif ($plantel->tipo == 1)
                                    {{$plantel->tipo = 'CEMCAD'}}
                                  @else
                                    {{$plantel->tipo = 'DG'}}
                                  @endif
                                
                            </td>
                              <td>
                                <a href="{{ route('plantels.edit', $plantel->id) }}">
                                <button class="btn btn-primary btn-sm btnEditPlantel" title="Editar Plantel"><i class="fas fa-pencil-alt"></i></button>
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
    <script> $('#tablePlantels').DataTable(); </script>
    
@stop