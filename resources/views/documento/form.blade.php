<div class="space-y-6">
    
    <div>
        <x-input-label for="proyecto_id" :value="__('Proyecto Id')"/>
        <x-text-input id="proyecto_id" name="proyecto_id" type="text" class="mt-1 block w-full" :value="old('proyecto_id', $documento?->proyecto_id)" autocomplete="proyecto_id" placeholder="Proyecto Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('proyecto_id')"/>
    </div>
    <div>
        <x-input-label for="nombre" :value="__('Nombre')"/>
        <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" :value="old('nombre', $documento?->nombre)" autocomplete="nombre" placeholder="Nombre"/>
        <x-input-error class="mt-2" :messages="$errors->get('nombre')"/>
    </div>
    <div>
        <x-input-label for="tipo" :value="__('Tipo')"/>
        <x-text-input id="tipo" name="tipo" type="text" class="mt-1 block w-full" :value="old('tipo', $documento?->tipo)" autocomplete="tipo" placeholder="Tipo"/>
        <x-input-error class="mt-2" :messages="$errors->get('tipo')"/>
    </div>
    <div>
        <x-input-label for="fecha_carga" :value="__('Fecha Carga')"/>
        <x-text-input id="fecha_carga" name="fecha_carga" type="text" class="mt-1 block w-full" :value="old('fecha_carga', $documento?->fecha_carga)" autocomplete="fecha_carga" placeholder="Fecha Carga"/>
        <x-input-error class="mt-2" :messages="$errors->get('fecha_carga')"/>
    </div>
    <div>
        <x-input-label for="ruta_almacenamiento" :value="__('Ruta Almacenamiento')"/>
        <x-text-input id="ruta_almacenamiento" name="ruta_almacenamiento" type="text" class="mt-1 block w-full" :value="old('ruta_almacenamiento', $documento?->ruta_almacenamiento)" autocomplete="ruta_almacenamiento" placeholder="Ruta Almacenamiento"/>
        <x-input-error class="mt-2" :messages="$errors->get('ruta_almacenamiento')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>