<div>
    <x-jet-danger-button wire:click="$set('open',true)">
        Crear Nuevo Post
    </x-jet-danger-button>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear Nuevo Post
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="titulo del post" />
                <x-jet-input type="text" class="w-full" wire:model.defer='title' />
                {{$title}}
                <x-jet-input-error for="title"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="contenido del post" />
                <textarea wire:model.defer='content' name="textarea" rows="10" cols="50"></textarea>
                {{$content}}
                <x-jet-input-error for="content"/>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button>
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="save" wire:loading.remove wire-target="save">
                Crear Post
            </x-jet-danger-button>
            <span wire:loading wire-target="save">
                Cargando..
            </span>
        </x-slot>
    
        
    </x-jet-dialog-modal>

</div>
