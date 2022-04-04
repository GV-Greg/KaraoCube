<header class="flex flex-col items-center py-5">
    <a href="{{ route('home') }}">
        <div class="flex items-center">
            <img src="/images/brand.png" alt="brand" class="pt-2 shadowed">
            <span class="ml-2 text-3xl font-black text-general text-shadow">{{ config('app.name', 'Laravel') }}</span>
        </div>
    </a>
    <span class="text-blueGray-600 text-sm">
        © 2021 Copyright <span class="text-red-600 font-bold ml-1">CreaCube</span>
    </span>
    <nav class="sm:mt-4 xs:mt-4 flex flex-col md:flex-row">
        @guest
            @if (Request::segment(1) !== 'login')
                <div class="flex flex-col text-center">
                    <a href="{{ route('login') }}" class="mr-5 md:mr-0 hover:text-green-500">Se connecter &agrave; l'admin</a>
                    <span class="mt-3 text-xs italic">Pour avoir acc&egrave;s &agrave; la recherche de chansons, connectez-vous comme admin et ouvrez la session</span>
                </div>
            @endif
        @else
            <a href="{{ route('home') }}" class="mt-2 md:mt-0 md:mr-10 hover:text-green-500">Accueil</a>
            <a href="{{ route('dashboard') }}" class="mt-2 md:mt-0 md:mr-10 hover:text-green-500">Tableau de bord</a>
            <a href="{{ route('logout') }}" class="mt-4 md:mt-0 hover:text-green-500" onclick="event.preventDefault();
                document.getElementById('logout_form').submit();">Se déconnecter</a>
            <form id="logout_form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
            </form>
        @endguest
    </nav>
</header>
