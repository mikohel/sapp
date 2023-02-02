@section('plugins.Datatables', true)

<div class="form-row">
  <div class="form-group col-md-5">
    <label for="selectTipo">TIPO U.R.</label>
      <select class="form-control" id="selectTipo" wire:model="selectTipo" required>
        <option value="">-- Seleccione --</option>
        <option value="0">ESCOLARIZADO</option>
        <option value="1">CEMSAD</option>
        <option value="2">DIRECCIÓN GENERAL</option>
      </select>
  </div>

@if(!is_null($plantels))
  <div class="form-group col-md-5">
    <label for="selectPlantel">PLANTEL</label>
      <select class="form-control" id="selectPlantel" wire:model="selectPlantel" wire:click="$emit('refreshTable')" required>
        <option value="">-- Seleccione --</option>
        @foreach ($plantels as $plantel)
          <option value="{{$plantel->id}}">{{$plantel->nombre_plantel}}</option>
        @endforeach
      </select>
  </div>
@endif


@if(!is_null($activity))

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
@endif


</div>

<script>

window.onload = function(){
  Livewire.on('showTable', () => {
      
      $('#tableActividad').DataTable(); 
  })
}

</script>




