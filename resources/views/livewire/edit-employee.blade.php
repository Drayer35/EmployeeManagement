<div>
 <x-danger-button wire:click="$set('open',true)" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded" >
    Crear registro
 </x-danger-button>

 <x-dialog-modal wire:model='open'  style="display: block;">
  <x-slot name="title" style="color: black">Título del Modal</x-slot>
  <x-slot name="content">
    <div class="mb-4">
      cuerpo
    </div>

  </x-slot>
  <x-slot name="footer">Pie de página del Modal</x-slot>
</x-dialog-modal>




</div>
