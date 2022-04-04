@extends('layouts.app')

@section('content')
    <div class="w-full flex flex-col items-center">
        <h1 class="text-3xl text-red-500 mb-5 text-center">Se connecter &agrave; l'admin</h1>
        <h3 class="text-lg text-white mb-6 uppercase">
            <div class="text-center">Compte admin de d&eacute;mo</div>
            <div>Email : <span class="text-red-500 lowercase">karao@creacube.site</span></div>
            <div>Mot de passe : <span class="text-red-500 lowercase">demo-2022</span></div>
        </h3>
        <form method="POST" action="{{ route('login') }}" class="w-full max-w-sm mx-auto rounded-lg border shadow-md p-5 mb-5">
            @csrf
            <div class="mb-4">
                <label for="email" class="block font-semibold mb-2">Email</label>
                <input id="email" type="email" name="email" class="shadow border rounded w-full p-2 text-gray-800" value="{{ old('email') }}" autocomplete="email" placeholder="Votre email" autofocus>
                @error('email')
                <span class="text-red-400 text-sm">
                    <span>{{ $message }}</span>
                </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block font-semibold mb-2">Mot de passe</label>
                <input id="password" type="password" name="password" class="shadow border rounded w-full p-2 text-gray-800" value="{{ old('password') }}" autocomplete="password" placeholder="Votre mot de passe" autofocus>
                @error('password')
                <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="w-full px-4 pt-2 pb-3 mt-5 block bg-red-800 hover:bg-red-600 text-white text-xl font-bold transition ease-in-out duration-500 rounded-md shadow-md uppercase">Se connecter</button>
        </form>
    </div>

@endsection
