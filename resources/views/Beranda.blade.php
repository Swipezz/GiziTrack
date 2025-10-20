<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | GiziTrack</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<body>
<div class="header">
    <h2>Gizi Track</h2>
    <div class="header-right">
        <div class="date-box">
            <span>Jumat</span><br>
            <span>17 Oktober 2025</span>
        </div>
    </div>
</div>

<div class="main-container">
    <div class="sidebar">
        <button>Beranda</button>
        <button>Sekolah</button>
        <button>Survey Makanan Tidak Dimakan</button>
        <button>Survey Alergi</button>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">Log Out</button>
        </form>
    </div>

    <div class="content">
        <h1>Beranda</h1>

        @foreach ($school as $sch)
        <div class="school-card">
            <div class="school-info">
                <div class="school-logo"></div>
                <div class="school-text">
                    <div class="name">{{ $sch->name }}</div>
                    <div class="address">{{ $sch->location }}</div>
                    <div class="portion">Jumlah porsi: {{ $sch->jumlah_porsi ?? '-' }}</div>
                </div>
            </div>
            <div class="check-section">
                <input type="checkbox" name="delivered_{{ $sch->id }}" id="delivered_{{ $sch->id }}">
            </div>
        </div>
        @endforeach

    </div>
</div>

</body>
</html>
