<form class="form-horizontal" wire:submit.prevent="editarPass">
   
    <p class="text-danger"> Todos los campos son obligatorios.</p>
    <hr>
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="password">Contraseña:</label>
          <input type="password" class="form-control" id="password" wire:model="password" placeholder="Contraseña">
          @error('password')
            <livewire:mostrar-alerta :message="$message" />                
            @enderror
        </div>
        <div class="form-group col-md-6">
          <label for="password_confirmation">Confirmar contraseña:</label>
          <input type="password" class="form-control" id="password_confirmation" wire:model="password_confirmation" placeholder="Confirmar Contraseña">
        </div>
    </div>

    <div class="tile-footer">
       <button id="btnActionForm" class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
        <a href="{{route('personal')}}">
        <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>
          Regresar
        </button>

      </a>
    </div>
 </form>

 <script>
    
 </script>