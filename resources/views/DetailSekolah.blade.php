<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
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
            background-color: #b3e0e5; /* Biru muda */
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
            background-color: #0a1f44; /* Biru tua */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding-top: 20px;
            position: relative;
            height: 100%;
            /* Tambahan radius agar sesuai gambar */
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
            background-color: #ff0000; /* Merah */
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
            flex-direction: column; /* biar konten disusun ke bawah */
            align-items: flex-start; /* teks di sebelah kiri */
            height: 100vh;
            flex: 1;
            background-color: white;
            padding: 30px;
            margin: 20px 40px 0 40px;
            overflow-y: auto;
            height: 100%;
        }

        .content h1 { 
            font-size: 28px; 
            color: black; 
            margin-bottom: 30px; 
            font-weight: bold; 
        }

        .detail-container { 
            display: grid; 
            grid-template-columns: 180px 1fr; 
            gap: 20px 30px; 
            align-items: start; 
            max-width: 850px; 
            width: 100%; 
            margin-bottom: 30px;
        }

        
        .school-logo { 
            width: 150px; 
            height: 150px; 
            object-fit: cover; 
            border-radius: 15px; 
            border: 2px solid #000; 
        }

        .info-grid { 
            display: grid; 
            grid-template-columns: repeat(2, 1fr); 
            gap: 15px 20px; 
            width: 100%; 
        }

        .info-box { 
            display: flex; 
            flex-direction: column;
            border: 2px solid black; 
            border-radius: 8px; 
            padding: 10px 15px; 
        }
        .info-box .label { 
            font-size: 14px; 
            color: #555; 
            margin-bottom: 5px; 
        }
        .info-box .value { 
            font-size: 16px; 
            color: #000; 
            font-weight: bold; 
        }
        .info-wide { 
            grid-column: span 2; 
        }

        .bottom-info { 
            grid-column: 1 / span 2; 
            display: grid; 
            grid-template-columns: repeat(3, 1fr); 
            gap: 20px; 
            margin-top: 20px; 
        }

        .edit-btn { 
            display: inline-block; 
            padding: 10px 20px; 
            background-color: #d4ac0d; 
            color: black; 
            border-radius: 8px; 
            text-decoration: none; 
            font-weight: bold; 
            font-size: 14px; 
            transition: background-color 0.2s; 
            align-self: flex-end;
        }
        .edit-btn:hover { 
            background-color: #a88507; 
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
        <h1>Detail Sekolah</h1> 
        <div class="detail-container">
             <!-- Logo --> 
              <img src="{{ $school->logo }}" alt="Logo Sekolah" class="school-logo"> 
              
            <!-- Informasi utama --> 
             <div class="info-grid"> 
                <div class="info-box"> 
                    <span class="label">Nama Sekolah</span> 
                    <span class="value">{{ $school->name }}</span> 
                </div> 
                <div class="info-box info-wide"> 
                    <span class="label">Alamat Sekolah</span> 
                    <span class="value">{{ $school->location }}</span> 
                </div> 
                <div class="bottom-info">
                    <div class="info-box"> 
                        <span class="label">Jumlah Siswa</span> 
                        <span class="value">{{ $school->total_student }}</span> 
                        </div> 
                    <div class="info-box"> 
                        <span class="label">Jumlah Porsi</span> 
                        <span class="value">{{ $school->total_meal }}</span> 
                    </div> <div class="info-box"> 
                        <span class="label">Alergi</span> 
                        <span class="value">{{ $school->type_allergy }}</span> 
                    </div> 
                </div>
            </div>
        </div> 
        <a href="#" class="edit-btn">Edit Data</a> 
    </div>
    </div>
</body>
</html>