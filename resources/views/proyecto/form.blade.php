<div class="space-y-6">
    
    <div>
        <x-input-label for="nombre" :value="__('Nombre')"/>
        <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" :value="old('nombre', $proyecto?->nombre)" autocomplete="nombre" placeholder="Nombre"/>
        <x-input-error class="mt-2" :messages="$errors->get('nombre')"/>
    </div>
    <div>
        <x-input-label for="descripcion" :value="__('Descripcion')"/>
        <x-text-input id="descripcion" name="descripcion" type="text" class="mt-1 block w-full" :value="old('descripcion', $proyecto?->descripcion)" autocomplete="descripcion" placeholder="Descripcion"/>
        <x-input-error class="mt-2" :messages="$errors->get('descripcion')"/>
    </div>
    <div>
        <x-input-label for="tipo" :value="__('Tipo')"/>
        <x-text-input id="tipo" name="tipo" type="text" class="mt-1 block w-full" :value="old('tipo', $proyecto?->tipo)" autocomplete="tipo" placeholder="Tipo"/>
        <x-input-error class="mt-2" :messages="$errors->get('tipo')"/>
    </div>
    <div>
        <x-input-label for="fecha_inicio" :value="__('Fecha Inicio')"/>
        <x-text-input id="fecha_inicio" name="fecha_inicio" type="text" class="mt-1 block w-full" :value="old('fecha_inicio', $proyecto?->fecha_inicio)" autocomplete="fecha_inicio" placeholder="Fecha Inicio"/>
        <x-input-error class="mt-2" :messages="$errors->get('fecha_inicio')"/>
    </div>
    <div>
        <x-input-label for="fecha_finalizacion_estimada" :value="__('Fecha Finalizacion Estimada')"/>
        <x-text-input id="fecha_finalizacion_estimada" name="fecha_finalizacion_estimada" type="text" class="mt-1 block w-full" :value="old('fecha_finalizacion_estimada', $proyecto?->fecha_finalizacion_estimada)" autocomplete="fecha_finalizacion_estimada" placeholder="Fecha Finalizacion Estimada"/>
        <x-input-error class="mt-2" :messages="$errors->get('fecha_finalizacion_estimada')"/>
    </div>
    <div>
        <x-input-label for="estado_id" :value="__('Estado Id')"/>
        <x-text-input id="estado_id" name="estado_id" type="text" class="mt-1 block w-full" :value="old('estado_id', $proyecto?->estado_id)" autocomplete="estado_id" placeholder="Estado Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('estado_id')"/>
    </div>
    <div>
        <x-input-label for="empresa_id" :value="__('Empresa Id')"/>
        <x-text-input id="empresa_id" name="empresa_id" type="text" class="mt-1 block w-full" :value="old('empresa_id', $proyecto?->empresa_id)" autocomplete="empresa_id" placeholder="Empresa Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('empresa_id')"/>
    </div>
    <div>
        <x-input-label for="usuario_responsable_id" :value="__('Usuario Responsable Id')"/>
        <x-text-input id="usuario_responsable_id" name="usuario_responsable_id" type="text" class="mt-1 block w-full" :value="old('usuario_responsable_id', $proyecto?->usuario_responsable_id)" autocomplete="usuario_responsable_id" placeholder="Usuario Responsable Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('usuario_responsable_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>