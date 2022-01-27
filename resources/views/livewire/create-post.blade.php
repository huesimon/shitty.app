<div class="flex flex-col">
    <label for="title">title</label>
    <input class="bg-blue-500" wire:model='title' type="text" name="title" id="title">
    @error('title') <span class="error">{{ $message }}</span> @enderror
    <label for="description">description</label>
    <input class="bg-blue-500" wire:model='description' type="text" name="description" id="description">
    @error('description') <span class="error">{{ $message }}</span> @enderror
    <button wire:click='store' >Save</button>
</div>
