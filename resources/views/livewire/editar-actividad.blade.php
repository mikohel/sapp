<form class="form-horizontal" wire:submit.prevent="editActividad">
    <input type="hidden" id="usuarioId" name="usuarioId" value="">
    <p class="text-danger"> Todos los campos son obligatorios.</p>
    <h5 class="text-body">Datos de la actividad</h5>
    <hr>

    <div class="form-row">
        <div class="form-group col-md-5">
          <label for="descripcion">Descripción:</label>
          <input id="descripcion" wire:model="descripcion" type="text" class="form-control" placeholder="Descripción de la Actividad">
          @error('descripcion')
            <livewire:mostrar-alerta :message="$message" />                
          @enderror
        </div>
        <div class="form-group col-md-1">
            <label for="programa">Programa</label>
            <input type="text" class="form-control" id="programa" wire:model="programa" placeholder="Programa">
            @error('programa')
              <livewire:mostrar-alerta :message="$message" />                
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="mVerificacion">Medio de Verificación</label>
            <textarea class="form-control" id="mVerificacion" wire:model="mVerificacion" placeholder="Numero Plantel" rows="3"></textarea>
            @error('mVerificacion')
              <livewire:mostrar-alerta :message="$message" />                
            @enderror
          </div>
      
    </div>

    <div class="tile-footer">
       <button id="btnActionForm" class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
        <a href="{{route('actividades')}}">
        <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>
          Regresar
        </button>

      </a>
    </div>
 </form>

 <script>
    
 </script>