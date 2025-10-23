<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Alergi | GiziTrack</title>
    <style>
        .info-box { 
            width: 100%;
            display: flex; 
            flex-direction: column;
            border: 2px solid black; 
            border-radius: 8px; 
            padding: 10px 15px; 
        }

        .info-box .labels { 
            font-size: 14px; 
            color: #555; 
            margin-bottom: 5px; 
        }

        .info-box .values { 
            font-size: 16px; 
            color: #000; 
            font-weight: bold; 
            border: none;
        }

        * {
            box-sizing: border-box;
        }

        .kirim-container button{
            background-color: #d4bb41;
            color: black;
            border: none;
            border-radius: 8px;
            padding: 10px 30px;
            font-size: 16px;
            cursor: pointer;
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
            font-size: 37px;
            gap: 20px;
        }

        .input-box {
            width: 80%;
            border: 2px solid black;
            border-radius: 8px;
            padding: 25px 25px;
            font-size: 16px;
            box-sizing: border-box;
            outline: none;
            margin-bottom: 25px;
        }

        .label {
            font-weight: bold;
            font-size: 16px;
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
            width: 100%;
            display: flex;
            justify-content: flex-end;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <x-header />

    <div class="main-container">
        <x-layout />

        <div class="content">
            <h3>Survey Alergi</h3>

            <form class="label" action="{{ route('surveyAlergi.post') }}" method="POST" style="padding-right: 30%">
                @csrf
                <div style="display: flex; align-items: left; gap: 10px; margin-bottom: 15px;">
                    <div class="info-box"> 
                        <span class="labels">Nama Sekolah</span> 
                        <input class="values" value="" placeholder="Pilih Sekolah" name="school"> 
                    </div> 
                    <div class="kirim-container" style="margin-top: 0; width: 25%;">
                        <button type="submit" style="width: 100%">Kirim</button>
                    </div>
                </div>

                <div class="info-box"> 
                    <span class="labels">List Alergi</span> 
                    <input class="values" value="" name="allergy" placeholder="Contoh: Kacang, Nanas, Ikan"> 
                </div> 
            </form>
        </div>
    </div>

</body>
</html>
