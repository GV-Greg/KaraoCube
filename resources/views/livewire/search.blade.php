<div class="mt-5 lg:w-5/6 md:w-4/6 sm:w-5/6 relative" x-data="{ open: true, openForm: false }">
    <input @click="openForm = false; open = true;"
           class="w-full px-2 py-1 bg-gray-50 text-gray-800 border-2 rounded-full focus:outline-none ring-4 ring-red-500 placeholder-gray-500"
           placeholder="Recherche une chanson"
           wire:model="query">
    <i class="fas fa-search fa-1x text-red-500 font-bold absolute top-0 right-0 mr-3 mt-2"></i>

    <div class="absolute px-10 w-full flex justify-center">
        @if(strlen($query) > 2)
            <div x-show="open" class="mt-3">
                @if(count($songs) > 0)
                    <ul>
                        @foreach($songs as $index => $song)
                            <li class="p-1 hover:text-green-500">
                                <button @click="openForm = true; @this.showForm(); open = false;" @click.away="openForm = false" class="cursor-pointer">{{ $song->interpreter }} - {{ $song->title }}</button>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <div class="w-full p-3 flex flex-col justify-center">
                        <span class="mt-1.5 text-red-500 text-center italic">O r&eacute;sultat pour {{ $query }}</span>
                        <livewire:form-submission :query="$query"/>
                    </div>
                @endif
            </div>
        @else
            @if(strlen($query) > 0)
                <span class="text-red-500 mt-1.5 italic">Il faut au moins 3 caractères.</span>
            @endif
        @endif
    </div>

    <div x-show="openForm" x-cloak
         class="absolute w-full mt-2 p-3 flex flex-col justify-center">
        <h2 class="mb-2 text-green-500 text-center text-2xl uppercase">Formulaire de demande</h2>
        <form wire:submit.prevent="send"
              class="w-full p-2 flex flex-col justify-center bg-blueGray-800 rounded-lg ring-4 ring-green-500">
            @csrf
            <div class="px-5 pt-3 pb-4">
                <label for="singer">Votre Pr&eacute;nom :</label>
                <input type="text" id="singer" name="singer" wire:model="singer"
                       class="w-full mt-1 px-2 py-1 text-gray-600 rounded-lg">
                @error('singer') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
            <div class="px-5 pt-3 pb-4">
                <label for="song">Le titre & l'interprète de la chanson :</label>
                <input type="text" id="song" name="song" wire:model="song"
                       class="w-full mt-1 px-2 py-1 text-gray-600 rounded-lg">
                @error('song') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
            <input type="number" id="song_id" name="song_id" wire:model="song_id" style="display:none;">
            <div class="btn-container">
                <button type="submit" class="w-auto btn btn-create">Envoyer</button>
            </div>
        </form>
    </div>
</div>
