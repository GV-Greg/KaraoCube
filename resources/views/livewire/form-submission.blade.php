<div>
    <h2 class="mb-2 text-green-500 text-center text-2xl uppercase">Formulaire<span class="md:inline-block hidden"> de demande</span></h2>
    <form wire:submit.prevent="send"
          class="w-full md:p-2 pb-4 bg-blueGray-800 rounded-lg ring-4 ring-green-500">
        @csrf
        <div class="px-5 pt-3 pb-4">
            <label for="singer">Votre Pr&eacute;nom :</label>
            <input type="text" id="singer" name="singer" wire:model="singer"
                   class="w-full mt-1 px-2 py-1 text-gray-600 rounded-lg">
            @error('singer') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="px-5 pt-3 pb-4">
            <label for="song">Titre & interprète :</label>
            <input type="text" id="song" name="song" wire:model="song"
                   class="w-full mt-1 px-2 py-1 text-gray-600 rounded-lg">
            @error('song') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="btn-container">
            <button type="submit" class="w-auto btn btn-create">Envoyer</button>
        </div>
    </form>
</div>
