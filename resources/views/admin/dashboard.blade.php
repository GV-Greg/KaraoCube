@extends('layouts.app')

@section('content')
    <div class="w-full flex flex-col justify-center min-h-screen">
        <h1 class="mb-2 text-center text-green-600 font-bold text-2xl uppercase">Les demandes</h1>
        <div class="w-full flex justify-center">
            <table class="border-collapse w-full">
                <thead>
                    <tr class="bg-blueGray-800 text-blueGray-200 font-bold text-md uppercase text-center">
                        <th class="py-1 hidden lg:table-cell">N°</th>
                        <th class="py-1 hidden lg:table-cell">Chanteur</th>
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
