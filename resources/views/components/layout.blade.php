<div class="fixed top-16 bottom-0 left-0 flex w-64 flex-col items-center justify-between bg-slate-900 py-6 text-white shadow-xl">
    <div class="flex w-full flex-col items-center space-y-3 px-4">
        <form action="{{ route('beranda') }}" method="get" class="w-full">
            <button type="submit" class="w-full rounded-lg bg-white py-2.5 text-sm font-bold text-gray-900 transition-colors hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Beranda
            </button>
        </form>

        <form action="{{ route('sekolah') }}" method="get" class="w-full">
            <button type="submit" class="w-full rounded-lg bg-white py-2.5 text-sm font-bold text-gray-900 transition-colors hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Sekolah
            </button>
        </form>

        <form action="{{ route('surveyMakanan') }}" method="get" class="w-full">
            <button type="submit" class="w-full rounded-lg bg-white py-2.5 text-sm font-bold text-gray-900 transition-colors hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Survey Makanan
            </button>
        </form>

        <form action="{{ route('surveyAlergi') }}" method="get" class="w-full">
            <button type="submit" class="w-full rounded-lg bg-white py-2.5 text-sm font-bold text-gray-900 transition-colors hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Survey Alergi
            </button>
        </form>
    </div>

    <form action="{{ route('logout') }}" method="post" class="w-full px-4">
        @csrf
        <button type="submit" class="w-full rounded-lg bg-red-600 py-2.5 text-sm font-bold text-white transition-colors hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 focus:ring-offset-slate-900">
            Log Out
        </button>
    </form>
</div>