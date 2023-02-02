<form class="form-horizontal" wire:submit.prevent="editarPlantel">
    <input type="hidden" id="usuarioId" name="usuarioId" value="">
    <p class="text-danger"> Todos los campos son obligatorios.</p>
    <h5 class="text-body">Datos del plantel</h5>
    <hr>

    <div class="form-row">
        <div class="form-group col-md-4">
          <label for="namePlantel">Nombre del Plantel:</label>
          <input id="namePlantel" wire:model="namePlantel" type="text" class="form-control" placeholder="Nombre del Plantel">
          @error('namePlantel')
            <livewire:mostrar-alerta :message="$message" />                
          @enderror
        </div>
        <div class="form-group col-md-4">
          <label for="numeroPlantel">Numero del Plantel</label>
          <input type="text" class="form-control" id="numeroPlantel" wire:model="numeroPlantel" placeholder="Numero Plantel">
          @error('numeroPlantel')
            <livewire:mostrar-alerta :message="$message" />                
          @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="plantelTipo">Tipo de U.R.:</label>
            <select class="form-control" id="plantelTipo" wire:model="plantelTipo" required>
                <option value="">-- Seleccione --</option>
                <option value="0">ESCOLARIZADO</option>
                <option value="1">CEMCAD</option>
                <option value="2">DIRECCIÓN GENERAL</option>
                
              </select>
            @error('plantelTipo')
            <livewire:mostrar-alerta :message="$message" />                
            @enderror
          </div>
    </div>

    <div class="tile-footer">
       <button id="btnActionForm" class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
        <a href="{{route('plantels')}}">
        <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>
          Regresar
        </button>

      </a>
    </div>
 </form>

 <script>
    
 </script>