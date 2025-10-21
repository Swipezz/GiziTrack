<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil | GiziTrack</title>
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
            flex: 1;
            background-color: white;
            padding: 20px;
            overflow-y: auto;
            margin-left: 220px;
        }

        .content h3 {
            color: #0a1f44;
        }


        .logo {
            width: 200px;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            border-radius: 8px;
        }

        .logo img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        
        .alamat {
            width: 200px;
            text-align: center;
            margin: 15px auto;
            padding: 8px;
        }

        .box {
            background-color: white;
            border: 2px solid black;
            padding: 20px;
            margin: 15px auto;
            width: 80%;
            border-radius: 10px;
        }

        .box p {
            margin: 8px 0;
        }
        
    </style>
</head>
<body>
    <x-header />

    <div class="main-container">
        <x-layout />

<div class="content">
    <div class="logo">
        <img src="{{ asset('images/GiziTrackLogo.png') }}" alt="Logo GiziTrack">
    </div>

    <div class="alamat">
        <strong>{{ $account->office }}</strong>
    </div>

    @foreach ($account->employees as $employee)
        <div class="box">
            <p><strong>ID Karyawan:</strong> {{ $employee->id }}</p>
            <p><strong>Nama Karyawan:</strong> {{ $employee->name }}</p>
        </div>
    @endforeach
</div>

        </div>
    </div>
</body>
</html>