<div>
    <x-jet-danger-button wire:click.live="$set('open', true)">
        Crear nuevo Post
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model='open'>
        <x-slot name="title">
            Crear un nuevo post
        </x-slot>
        <x-slot name="content">
            <div wire:loading wire:target='image' class="w-full my-4 bg-indigo-100 border-t-4 border-indigo-500 rounded-b text-indigo-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                  <div class="py-1"><svg class="fill-current h-6 w-6 text-indigo-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                  <div>
                    <p class="font-bold">Subiendo imagen</p>
                    <p class="text-sm">Por Favor Espere...</p>
                  </div>
                </div>
              </div>
            @if ($image)
                <img src="{{$image->temporaryUrl()}}">
            @endif
            <div class="mb-4">
                <x-jet-label value="Titulo del post"/>
                <x-jet-input type="text" class="w-full" wire:model="name"/>
                
                <x-jet-input-error for="name"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Contenido del post"/>
                <x-jet-input type="text" class="w-full" wire:model="course_id"/>
                <x-jet-input-error for="course_id"/>
            </div>
            <div class="mb-4">
                <input type="file" wire:model='image' id="{{$identificador}}">
                <x-jet-input-error for='image'/>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:loading.attr='disabled' wire:click='save()' wire:target='save, image' class="disabled:opacity-25">
                Crear post
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
