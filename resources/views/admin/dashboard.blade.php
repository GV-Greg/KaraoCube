@extends('layouts.app')

@section('content')
    <div class="w-full flex flex-col items-center min-h-screen">
        <div class="flex items-center">
            <a href="{{ route('activity.edit') }}" class="btn-container">
                <button class="btn btn-create">Prochain &eacute;vent</button>
            </a>
            <a href="{{ route('activity.toggle') }}" class="btn-container">
                @if($activity->status === 1)
                    <button class="btn btn-close">Fermer la session</button>
                @else
                    <button class="btn btn-create">Ouvrir la session</button>
                @endif
            </a>
        </div>

        <h1 class="mt-2 mb-2 text-center text-green-600 font-bold text-2xl uppercase">Les demandes</h1>
        <div class="md:w-3/4 w-full flex justify-center">
            <table class="border-collapse w-full">
                <thead>
                    <tr class="bg-blueGray-800 text-blueGray-200 font-bold text-md uppercase text-center">
                        <th class="py-1 hidden lg:table-cell">N°</th>
                        <th class="py-1 hidden lg:table-cell">Chanteur(s)</th>
                        <th class="py-1 hidden lg:table-cell">Chanson</th>
                        <th class="py-1 hidden lg:table-cell">Statut</th>
                        <th class="py-1 hidden lg:table-cell">Heure</th>
                        <th class="py-1 hidden lg:table-cell">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($submissions as $submission)
                        <livewire:submission :submission="$submission"/>
                    @endforeach
                </tbody>
            </table>
        </div>
    <div>
@endsection
