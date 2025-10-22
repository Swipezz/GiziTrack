<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sekolah | GiziTrack</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            height: 100vh;
            background-color: #fff; 
            overflow: hidden;
        }

        .header {
            background-color: #b3e0e5; 
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 25px;
            height: 60px;
            width: 100%;
        }

        .header h2 {
            margin: 0;
            font-size: 22px;
            color: #000;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .date-box {
            text-align: right;
            line-height: 1.2;
        }

        .date-box .day {
            display: block;
        }

        .date-box .date {
            display: block;
        }

        .profile-btn {
            background: none;
            border: none;
            padding: 0;
            cursor: pointer;
        }

        .profile-btn img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid black;
            object-fit: cover;
            transition: 0.2s;
        }

        .profile-btn img:hover {
            transform: scale(1.1);
        }

        .main-container {
            display: flex;
            flex: 1;
            height: calc(100vh - 60px); 
            overflow: hidden;
        }

        .sidebar {
            width: 220px;
            background-color: #0a1f44; 
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding-top: 20px;
            position: relative;
            height: 100%;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
            flex-shrink: 0;
        }

        .sidebar button:not(.logout-btn) {
            width: 180px;
            margin: 10px 0;
            padding: 10px;
            background-color: white;
            border: none;
            border-radius: 10px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        .sidebar button:not(.logout-btn):hover {
            background-color: #dbeafe;
        }

        .logout-btn {
            background-color: #ff0000; 
            color: black;
            position: absolute;
            bottom: 20px;
            border: none;
            border-radius: 10px;
            width: 180px;
            padding: 10px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        .logout-btn:hover {
            background-color: #9e0000;
        }

        .content {
            display: flex;
            flex-direction: column; 
            align-items: flex-start; 
            height: 100vh;
            flex: 1;
            background-color: white;
            padding: 30px;
            margin: 20px 40px 0 40px;
            overflow-y: auto;
            height: 100%;
        }

        /* --- CSS BARU UNTUK KONTEN --- */

        .content-header {
            display: flex;
            justify-content: space-between; /* jarak antara judul dan tombol */
            align-items: center;
            width: 100%; /* biar lebar penuh */
            margin-bottom: 25px;
        }
        
        .content h2 {
            color: #000; /* Hitam */
            font-size: 28px;
            font-weight: bold;
            margin: 0;
        }

        .tambah-data-btn {
            background-color: #d4ac0d; /* Warna kuning dari gambar */
            color: black;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
            transition: background-color 0.2s;
            margin-bottom: 15px;
        }

        .tambah-data-btn:hover {
            background-color: #b8950b;
        }

        .school-grid {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px; /* Jarak antar kartu */
        }

        .school-card {
            width: 180px; /* Lebar kartu */
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            text-decoration: none; /* Menghapus garis bawah link */
            color: black;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .school-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        /* Ini adalah kotak oranye/kuning untuk logo */
        .school-logo-placeholder {
            width: 100%;
            height: 120px;
            background-color: #e6b800;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        
        .school-logo-img {
            width: 100%;
            height: 120px;
            object-fit: contain; 
            border-radius: 8px;
            margin-bottom: 15px;
            border: 1px solid #eee; 
        }

        .school-name {
            font-size: 16px;
            font-weight: bold;
            margin: 0;
        }

    </style>
</head>
<body>

    <div class="header">
        <h2>Gizi Track</h2>
        <div class="header-right">
            <div class="date-box">
                <span class="day">Jumat</span>
                <span class="date">17 Oktober 2025</span>
            </div>

            <form action="{{ route('profil') }}" method="get">
                <button type="submit" class="profile-btn">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Profil">
                </button>
            </form>
        </div>
    </div>

    <div class="main-container">
        <div class="sidebar">
            <button>Beranda</button>
            <button>Sekolah</button>
            <button>Survey Makanan Tidak Dimakan</button>
            <button>Survey Alergi</button>
            <button class="logout-btn">Log Out</button>
        </div>

        <div class="content">
            <div class="content-header">
                <h2>Data Sekolah</h2>
            </div>
            <a href="#" class="tambah-data-btn">Tambah Data</a>

            <div class="school-grid">
                
                @foreach ($school as $sch)
                <a href="/sekolah/{{ $sch->id }}" class="school-card">
                    <img src="{{ $sch->logo }}" class="school-logo-img" alt="Logo {{ $sch->name }}">
                    
                    <p class="school-name">{{ $sch->name }}</p>
                </a>
                @endforeach

                </div>
        </div>
    </div>

</body>
</html>