<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Makanan | GiziTrack</title>
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
            justify-content: space-between;
            height: calc(100vh - 60px);
            padding bottom: 30px;
            padding: 40px 0;
            width: 100%;
            margin-left: 220px;
        }

        .content > div:last-of-type {
            margin-top: auto;
        }

        .content h3 {
            color: #0a1f44;
            align-self: flex-start; 
            margin-left: 10%; 
            margin-bottom: 10px;
            font-size: 40px;
            gap: 20px;
        }

        .foodname {
            display: flex;
            align-items: center;
            border: 2px solid black;
            border-radius: 8px;
            background-color: white;
            width: 320px;
            height: 45px;
            overflow: hidden;
        }

        .foodname input[type="text"] {
            flex: 1;
            padding: 10px;
            border: none;
            outline: none;
            text-align: center;
            font-size: 14px;
        }

        .foodname input[type="text"].total {
            width: 90px;
            border-left: 2px solid black;
            text-align: center;
            outline: none;
            font-size: 14px;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }

        .school-input {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 2px solid black;
            border-radius: 8px;
            background-color: white;
            width: 50%; 
            margin: 2px 0;
            padding: 25px 25px;
            font-size: 16px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <x-header />

<div class="main-container">
    <x-layout />

    <div class="content">
        <h3>Survey Makanan Tidak Dimakan</h3>

        <form action="{{ route('survey_makanan.post') }}" method="POST" style="display: flex; flex-direction: column; align-items: center;">
            @csrf

            {{-- Input Nama Sekolah (di tengah) --}}
            <div style="width: 100%; display: flex; justify-content: center; margin-bottom: 30px;">
                <input type="text" name="school"
                    class="school-input"
                    placeholder="Nama Sekolah"
                    style="border: 2px solid black;
                           border-radius: 8px;
                           background-color: white;
                           width: 80%;
                           max-width: 400px;
                           padding: 15px 20px;
                           font-size: 16px;
                           text-align: center;"
                    oninput="this.value=this.value.replace(/[^a-zA-Z0-9., ]/g,'')"
                    required>
            </div>

            {{-- Input makanan dan total (sejajar horizontal) --}}
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; max-width: 800px;">
                @for ($i = 0; $i < 6; $i++)
                    <div class="foodname" style="display: flex; flex-direction: row; align-items: center; gap: 10px;">
                        <input type="text" name="food[]" placeholder="Nama makanan"
                            style="border-radius: 8px;
                                   padding: 10px 15px;
                                   width: 200px;"
                            oninput="this.value=this.value.replace(/[^a-zA-Z0-9., ]/g,'')">

                        <input type="text" name="total[]" placeholder="Jumlah"
                            class="total"
                            style="border-radius: 8px;
                                   padding: 10px 15px;
                                   width: 100px;
                                   text-align: center;"
                            oninput="this.value=this.value.replace(/[^0-9.,]/g,'')">
                    </div>
                @endfor
            </div>

            <div style="width: 80%; display: flex; justify-content: flex-end; margin-top: 40px;">
                <button type="submit"
                    style="background-color: #d4bb41;
                           color: black;
                           border: none;
                           border-radius: 8px;
                           padding: 10px 30px;
                           font-size: 16px;
                           cursor: pointer;">
                    Kirim
                </button>
            </div>
        </form>
    </div>
</div>


</body>
</html>
