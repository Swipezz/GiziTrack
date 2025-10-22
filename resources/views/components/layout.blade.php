<div class="sidebar">
    <div class="menu">
        <form action="{{ route('beranda') }}" method="get">
            <button type="submit">Beranda</button>
        </form>

        <form action="{{ route('sekolah') }}" method="get">
            <button type="submit">Sekolah</button>
        </form>

        <form action="{{ route('surveyMakanan') }}" method="get">
            <button type="submit">Survey Makanan</button>
        </form>

        <form action="{{ route('surveyAlergi') }}" method="get">
            <button type="submit">Survey Alergi</button>
        </form>
    </div>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="logout-btn">Log Out</button>
    </form>
</div>