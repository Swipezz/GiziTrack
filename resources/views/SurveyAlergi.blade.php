<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Alergi | GiziTrack</title>
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
        }

        .header {
            background-color: #b3e0e5;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 25px;
            height: 60px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;        
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
            margin-top: 60px;
        }

        .sidebar {
            width: 220px;
            background-color: #0a1f44;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            padding-top: 20px;
            padding-bottom: 20px;
            position: fixed;
            top: 60px;
            bottom: 0;
            left: 0;
        }

        .menu {
            display: flex;
            flex-direction: column;
            align-items: center;
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
            align-items: center;
            justify-content: flex-start;
            padding: 40px 0;
            width: 100%;
            margin-left: 220px;
        }
     

        .content h3 {
            color: #0a1f44;
            align-self: flex-start; 
            margin-left: 10%; 
            margin-bottom: 10px;
            font-size: 40px;
            gap: 20px;
        }

        .input-box {
            width: 80%;
            border: 2px solid black;
            border-radius: 8px;
            padding: 40px 15px;
            font-size: 16px;
            box-sizing: border-box;
            outline: none;
            margin-bottom: 25px;
        }

        .label {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 5px;
            display: block;
            color: #000;
            width: 80%;           
            text-align: left;     
            margin-left: auto;    
            margin-right: auto;
        }

        .small-input {
            width: 80%;
            border: 2px solid black;
            border-radius: 8px;
            padding: 40px 12px;
            font-size: 15px;
            box-sizing: border-box;
            outline: none;
            margin-bottom: 20px;
            text-align: left;
            vertical-align: top;
        }

        .small-input::placeholder {
            text-align: left;
        }

        .kirim-container {
            width: 80%;
            display: flex;
            justify-content: flex-end;
            margin-top: 40px;
        }


    </style>
</head>
<body>

    <div class="header">
        <div style="display: flex; align-items: center; gap: 10px; height: 100%;">
        <img src="{{ asset('images/GiziTrackLogo.png') }}" 
             alt="Logo GiziTrack" 
             style="height: 60px; width: auto; object-fit: contain;">
        <h2>Gizi Track</h2>
        </div>
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
            <div class="menu">
                <form action="{{ route('beranda') }}" method="get">
                    <button type="submit">Beranda</button>
                </form>

                <form action="{{ route('sekolah') }}" method="get">
                    <button type="submit">Sekolah</button>
                </form>

                <form action="{{ route('survey_makanan') }}" method="get">
                    <button type="submit">Survey Makanan Tidak Dimakan</button>
                </form>

                <form action="{{ route('survey_alergi') }}" method="get">
                    <button type="submit">Survey Alergi</button>
                </form>
            </div>

            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="logout-btn">Log Out</button>
            </form>
        </div>

    <div class="content">
         <h3>Alergi</h3>

    <input type="text" class="input-box">

    <label class="label">Alergi Makanan:</label>
    <input type="text" class="small-input">

    <label class="label">Alergi Minuman:</label>
    <input type="text" class="small-input">

    <label class="label">Alergi Hal Lain:</label>
    <input type="text" class="small-input">

    <div class="kirim-container">
        <button type="button"
                style="background-color: #d4bb41; color: black; border: none; border-radius: 8px;
                       padding: 10px 30px; font-size: 16px; cursor: pointer;">
            Kirim
        </button>
    </div>
    </div>

</body>
</html>
