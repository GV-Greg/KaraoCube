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
    <nav class="sm:mt-4 xs:mt-4">
        @guest
            @if (Request::segment(1) !== 'login')
                <a href="{{ route('login') }}" class="mr-5 hover:text-green-500">Se connecter</a>
            @endif
        @else
            <a href="{{ route('dashboard') }}" class="mr-5 hover:text-green-500">Tableau de bord</a>
            <a href="{{ route('logout') }}" class="hover:text-green-500" onclick="event.preventDefault();
                document.getElementById('logout_form').submit();">Se déconnecter</a>
            <form id="logout_form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
            </form>
        @endguest
    </nav>
</header>
