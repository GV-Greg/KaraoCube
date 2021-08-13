@extends('layouts.app')

@section('content')
    <div class="w-full flex flex-col justify-center">
        <h1 class="text-center text-green-600 font-bold text-2xl mb-2">Les derni&egrave;res demandes</h1>
        <div class="w-full flex justify-center" style="overflow-x:auto;">
            <table>
                <thead>
                    <tr class="bg-blueGray-800 text-blueGray-200 font-bold text-xl uppercase text-center">
                        <th class="pt-1 pb-2">N°</th>
                        <th class="pt-1 pb-2">Chanteur</th>
                        <th class="pt-1 pb-2">Chanson</th>
                        <th class="pt-1 pb-2">Statut</th>
                        <th class="pt-1 pb-2">Heure</th>
                        <th class="pt-1 pb-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($submissions as $group)
                        @foreach($group as $submission)
                            <livewire:submission :submission="$submission"/>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    <div>
@endsection
