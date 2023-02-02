@section('plugins.Datatables', true)

@section('content_header')
@foreach ($plantelito as $plantel)

<h1>Actividades {{$plantel->nombre_plantel}}</h1>
@endforeach

@stop

<div class="table-responsive">
  <table class="table table-hover table-bordered" id="tableActividad">
     <thead>
        <tr>
           <th>Actividad</th>
           <th>Mes</th>
           <th>Cantidad</th>
           <th>Realizado</th>
        </tr>
     </thead>
     <tbody>
        @foreach ($activity as $actividad)
        <tr>
           <td>{{$actividad->activity_folio}}</td>
           <td>{{$actividad->mes}}</td>
           <td>{{$actividad->cantidad}}</td>
           <td>{{$actividad->realizada}}</td>
        </tr>
        @endforeach
     </tbody>
  </table>
</div>



</div>

<script>


</script>




