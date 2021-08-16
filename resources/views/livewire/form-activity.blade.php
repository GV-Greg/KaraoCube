<div>
    <form wire:submit.prevent="update" method="POST" class="w-full md:p-2 pb-4 bg-blueGray-800 rounded-lg ring-4 ring-green-500">
        @csrf
        <div class="px-5 pt-3 pb-4">
            <label for="next_event">Date du prochain &eacute;vent :</label>
            <input type="date" id="next_event" name="next_event" wire:model="next_event"
                   class="w-full mt-1 px-2 py-1 text-gray-600 rounded-lg">
            @error('next_event') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="px-5 pt-3 pb-4">
            <label for="image">Publicit&eacute; du prochain &eacute;vent :</label>
            <input type="file" id="image" name="image" wire:model="image"
                   accept="image/png, image/jpeg"
                   class="w-full mt-1 px-2 py-1 text-gray-600 rounded-lg">
            @error('image') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="btn-container">
            <button type="submit" class="w-auto btn btn-create">Envoyer</button>
        </div>
    </form>
</div>
