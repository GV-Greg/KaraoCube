@extends('layouts.app')

@section('content')
    <h1 class="text-3xl text-red-500 mb-6 text-center">Compl&eacute;tez vos informations</h1>
    <form method="POST" action="{{ route('register') }}" class="w-full max-w-sm mx-auto rounded-lg border shadow-md p-5 mb-5">
        @csrf
        <div class="mb-4">
            <label for="name" class="block font-semibold mb-2">Nom d'utilisateur</label>
            <input id="name" type="text" name="name" class="shadow border rounded w-full p-2 text-gray-800" value="{{ old('name') }}" autocomplete="name" placeholder="Nom d'utilisateur" autofocus>
            @error('name')
            <span class="text-red-400 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block font-semibold mb-2">Email</label>
            <input id="email" type="email" name="email" class="shadow border rounded w-full p-2 text-gray-800" value="{{ old('email') }}" autocomplete="email" placeholder="Votre email" autofocus>
            @error('email')
            <span class="text-red-400 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block font-semibold mb-2">Mot de passe</label>
            <input id="password" type="password" name="password" class="shadow border rounded w-full p-2 text-gray-800" value="{{ old('password') }}" autocomplete="password" placeholder="Votre mot de passe" autofocus>
            @error('password')
            <span class="text-red-400 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block font-semibold mb-2">Confirmation du mot de passe</label>
            <input id="password_confirmation" type="password" name="password_confirmation" class="shadow border rounded w-full p-2" value="{{ old('password_confirmation') }}" autocomplete="password_confirmation" placeholder="Retapez votre mot de passe" autofocus>
        </div>

        <button type="submit" class="w-full px-4 pt-2 pb-3 mt-5 block bg-red-800 hover:bg-red-600 text-white text-xl font-bold transition ease-in-out duration-500 rounded-md shadow-md uppercase">Créer mon compte</button>
    </form>
@endsection
