<div>
    @if (session()->has('success'))
        <div x-data="{ show: true }"
             x-init="setTimeout(() => show = false, 3000)"
             x-show="show"
             class="w-full flex justify-center">
            <div class="relative lg:w-1/3 sm:w-2/3 px-1 pt-1 pb-2 bg-green-600 text-blueGray-800 rounded-lg text-xl font-bold text-center">
                {{ session('success') }}
            </div>
        </div>
    @endif
</div>
