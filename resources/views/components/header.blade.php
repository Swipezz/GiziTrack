<div class="header">
    <div style="display: flex; align-items: center; gap: 10px; height: 100%;">
    <img src="{{ asset('images/GiziTrackLogo.png') }}" 
        alt="Logo GiziTrack" 
        style="height: 60px; width: auto; object-fit: contain;">
    <h2>Gizi Track</h2>
    </div>
    <div class="header-right">
        <div class="date-box">
            <span class="day">{{ \Carbon\Carbon::now()->locale('id')->translatedFormat('l') }}</span>
            <span class="date">{{ \Carbon\Carbon::now()->locale('id')->translatedFormat('d F Y') }}</span>
        </div>

        <form action="{{ route('profil') }}" method="get">
            <button type="submit" class="profile-btn">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profil">
            </button>
        </form>
    </div>
</div>