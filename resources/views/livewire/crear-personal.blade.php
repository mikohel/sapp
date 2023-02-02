<form class="form-horizontal" wire:submit.prevent="crearPersonal">
    <input type="hidden" id="usuarioId" name="usuarioId" value="">
    <p class="text-danger"> Todos los campos son obligatorios.</p>
    <h5 class="text-body">Datos del empleado</h5>
    <hr>

    <div class="form-row">
        <div class="form-group col-md-4">
          <label for="personalPaterno">Apellido Paterno:</label>
          <input id="personalPaterno" wire:model="personalPaterno" type="text" class="form-control" placeholder="Apellido Paterno">
          @error('personalPaterno')
            <livewire:mostrar-alerta :message="$message" />                
          @enderror
        </div>
        <div class="form-group col-md-4">
          <label for="personalMaterno">Apellido Materno:</label>
          <input type="text" class="form-control" id="personalMaterno" wire:model="personalMaterno" placeholder="Apellido Materno">
          @error('personalMaterno')
            <livewire:mostrar-alerta :message="$message" />                
          @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="personalNombre">Nombre:</label>
            <input type="text" class="form-control" id="personalNombre" wire:model="personalNombre" placeholder="Nombre del trabajador">
            @error('personalNombre')
            <livewire:mostrar-alerta :message="$message" />                
            @enderror
          </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
          <label for="personalNumero">Numero de Empleado:</label>
          <input type="text" class="form-control" id="personalNumero" wire:model="personalNumero" placeholder="Numero de Empleado">
          @error('personalNumero')
            <livewire:mostrar-alerta :message="$message" />                
            @enderror
        </div>
        <div class="form-group col-md-4">
          <label for="personalPuesto">Puesto:</label>
          <input type="text" class="form-control" id="personalPuesto" wire:model="personalPuesto" placeholder="Puesto">
          @error('personalPuesto')
            <livewire:mostrar-alerta :message="$message" />                
        @enderror
        </div>

        <div class="form-group col-md-4">
            <label for="personalPlantelid">Plantel:</label>
            <select class="select2 form-control" id="personalPlantelid" wire:model="personalPlantelid" required>
                
                <option value="">-- Seleccione --</option>
                @foreach ($planteles as $plantel)
                    <option value="{{ $plantel->id }}">{{$plantel->nombre_plantel}}</option>
                @endforeach
                

            </select>
            @error('personalPlantelid')
            <livewire:mostrar-alerta :message="$message" />                
            @enderror
          </div>
          
    </div>

    <h5 class="text-body">Datos del Usuario</h5>
    <hr>

    <div class="form-row">
        <div class="form-group col-md-4">
          <label for="personalRol">Rol de usuario:</label>
          <select class="form-control" id="personalRol" wire:model="personalRol" required>
            <option value="">-- Seleccione --</option>
            <option value="1">Plantel</option>
            <option value="2">Direccion</option>
            <option value="3">Administrador</option>
            
          </select>
          @error('personalRol')
            <livewire:mostrar-alerta :message="$message" />                
            @enderror
        </div>
        <div class="form-group col-md-4">
          <label for="personalEmail">Email Institucional:</label>
          <input type="text" class="form-control" id="personalEmail" wire:model="personalEmail" placeholder="Email">
          @error('personalEmail')
            <livewire:mostrar-alerta :message="$message" />                
            @enderror
        </div>
        <div class="form-group col-md-4">
          <label for="personalStatus">Status:</label>
          <select class="form-control" id="personalStatus" wire:model="personalStatus" required>
            <option value="">-- Seleccione --</option>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
            
          </select>
          @error('status')
            <livewire:mostrar-alerta :message="$message" />                
            @enderror
        </div>
    </div>

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