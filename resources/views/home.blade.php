@extends('layouts.app')

@section('content')
    <div class="w-full flex justify-center">
        @if($activity->status === 1)
            <livewire:search />
        @else
            <div class="w-full mt-5 lg:w-3/6 md:w-4/6 sm:w-5/6 relative text-center">
                <h1 class="text-3xl font-bold uppercase text-red-600">Prochain &eacute;v&egrave;nement</h1>
                @if($activity->next_event != null)
                    <span class="font-extrabold text-4xl">{{ $activity->event }}</span>
                @else
                    <span class="italic text-lg">Pas de prochain &eacute;v&egrave;nement programm&eacute;</span>
                @endif
            </div>
        @endif
    </div>
@endsection
