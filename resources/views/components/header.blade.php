<div class="fixed top-0 left-0 z-50 flex h-16 w-full items-center justify-between bg-cyan-200 px-6 shadow-md">
    <div class="flex h-full items-center gap-3">
        <img src="{{ asset('images/GiziTrackLogo.png') }}" 
             alt="Logo GiziTrack" 
             class="h-[60px] w-auto object-contain">
        <h2 class="m-0 text-xl font-bold text-gray-900">Gizi Track</h2>
    </div>
    <div class="flex items-center gap-4">
        <div class="text-right leading-tight">
            <span class="block text-sm font-medium text-gray-700">{{ \Carbon\Carbon::now()->locale('id')->translatedFormat('l') }}</span>
            <span class="block text-sm text-gray-600">{{ \Carbon\Carbon::now()->locale('id')->translatedFormat('d F Y') }}</span>
        </div>

        <form action="{{ route('profil') }}" method="get" class="flex items-center">
            <button type="submit" class="group relative h-10 w-10 overflow-hidden rounded-full border-2 border-gray-800 transition-transform hover:scale-110 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profil" class="h-full w-full object-cover">
            </button>
        </form>
    </div>
</div>