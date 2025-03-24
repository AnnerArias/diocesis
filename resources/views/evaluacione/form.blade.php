<div class="space-y-6">
    
    <div>
        <x-input-label for="proyecto_id" :value="__('Proyecto Id')"/>
        <x-text-input id="proyecto_id" name="proyecto_id" type="text" class="mt-1 block w-full" :value="old('proyecto_id', $evaluacione?->proyecto_id)" autocomplete="proyecto_id" placeholder="Proyecto Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('proyecto_id')"/>
    </div>
    <div>
        <x-input-label for="evaluador_id" :value="__('Evaluador Id')"/>
        <x-text-input id="evaluador_id" name="evaluador_id" type="text" class="mt-1 block w-full" :value="old('evaluador_id', $evaluacione?->evaluador_id)" autocomplete="evaluador_id" placeholder="Evaluador Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('evaluador_id')"/>
    </div>
    <div>
        <x-input-label for="fecha_evaluacion" :value="__('Fecha Evaluacion')"/>
        <x-text-input id="fecha_evaluacion" name="fecha_evaluacion" type="text" class="mt-1 block w-full" :value="old('fecha_evaluacion', $evaluacione?->fecha_evaluacion)" autocomplete="fecha_evaluacion" placeholder="Fecha Evaluacion"/>
        <x-input-error class="mt-2" :messages="$errors->get('fecha_evaluacion')"/>
    </div>
    <div>
        <x-input-label for="comentarios" :value="__('Comentarios')"/>
        <x-text-input id="comentarios" name="comentarios" type="text" class="mt-1 block w-full" :value="old('comentarios', $evaluacione?->comentarios)" autocomplete="comentarios" placeholder="Comentarios"/>
        <x-input-error class="mt-2" :messages="$errors->get('comentarios')"/>
    </div>
    <div>
        <x-input-label for="puntuacion" :value="__('Puntuacion')"/>
        <x-text-input id="puntuacion" name="puntuacion" type="text" class="mt-1 block w-full" :value="old('puntuacion', $evaluacione?->puntuacion)" autocomplete="puntuacion" placeholder="Puntuacion"/>
        <x-input-error class="mt-2" :messages="$errors->get('puntuacion')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>