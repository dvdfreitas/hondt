<div class="border px-4 py-2 max-w-2xl">
    <div>
        <label for="name">Título</label>
        <input wire:change="slugify()" wire:model="title" type="text" name="title" class="bg-blue-50 px-2 py-1 border">
        @error('title') <div class="text-red-800">{{ $message }}</div> @enderror
    </div>
    <div class="my-4">
        <label for="name">Slug</label>
        <input wire:model="slug" type="text" name="slug" class="bg-blue-50 px-2 py-1 border">
        @error('slug') <div class="text-red-800">{{ $message }}</div> @enderror
    </div>
    <div>
        <input type="file" wire:model="photo">
        @error('photo') <div class="text-red-800">{{ $message }}</div> @enderror
    </div>
    <button wire:click="create()" class="my-4 bg-blue-800 text-white px-4 py-2 hover:bg-blue-900 border rounded">Criar</button>
    {{ $photo }}
</div>
