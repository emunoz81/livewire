<div>
<!--   <a href="" class="text-indigo-600 hover:text-indigo-900" whrie:click="$set('open',true)" >Modificar</a> 
-->
<x-jet-danger-button wire:click="$set('open',true)">
        edit
    </x-jet-danger-button>
    <x-jet-danger-button wire:click="destroy({{$post->id}})"> eliminar</x-jet-danger-button>
    <x-jet-dialog-modal wire:model="open">
    <x-slot name='title'>
            Editar el post {{$post->title}}
        </x-slot>
        <x-slot name='content'>
            <div>
                <x-jet-label value="titulo del post" />
                <x-jet-input wire:model="post.title" type="text" class="w-full"/>
            </div>
            <div>
                <x-jet-label value="Contebido del post"/>
                <textarea wire:model="post.content" name="textarea" rows="10" cols="50"></textarea>
            </div>
        </x-slot> 
        <x-slot name='footer'>
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-secondary-button wire:click="save">
                Actualizar
            </x-jet-secondary-button>
         </x-slot>
    </x-jet-dialog-modal>
</div>
