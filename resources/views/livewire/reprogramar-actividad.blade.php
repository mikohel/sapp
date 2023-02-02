<div>
    <form class="form-horizontal" wire:submit.prevent="reprogramarActividad">
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="mes_origen">Mes Origen:</label>
              <select class="form-control" id="mes_origen" wire:model="mes_origen" required>
                <option value="">-- Seleccione --</option>
                <option value="1">Enero</option>
                <option value="2">Febrero</option>
                <option value="3">Marzo</option>
                <option value="4">Abril</option>
                <option value="5">Mayo</option>
                <option value="6">Junio</option>
                <option value="7">Julio</option>
                <option value="8">Agosto</option>
                <option value="9">Septiembre</option>
                <option value="10">Octubre</option>
                <option value="11">Noviembre</option>
                <option value="12">Diciembre</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="mes_destino">Mes Destino:</label>
              <select class="form-control" id="mes_destino" wire:model="mes_destino" required>
                <option value="">-- Seleccione --</option>
                <option value="1">Enero</option>
                <option value="2">Febrero</option>
                <option value="3">Marzo</option>
                <option value="4">Abril</option>
                <option value="5">Mayo</option>
                <option value="6">Junio</option>
                <option value="7">Julio</option>
                <option value="8">Agosto</option>
                <option value="9">Septiembre</option>
                <option value="10">Octubre</option>
                <option value="11">Noviembre</option>
                <option value="12">Diciembre</option>
              </select>
            </div>
        </div>

        <div class="form-group">
            <label for="motivo">Motivo de la re-programación</label>
            <textarea class="form-control" id="motivo" wire:model="motivo" rows="3"></textarea>
            @error('motivo')
            <livewire:mostrar-alerta :message="$message" />                
            @enderror
          </div>

        <div class="tile-footer">
            <button id="btnActionForm" class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
            <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Regresar</button>
         </div>
    </form>
</div>
