<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | GiziTrack</title>
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

        .school-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 2px solid black;
            border-radius: 8px;
            background-color: white;
            width: 80%; 
            margin: 20px 0;
            padding: 15px 25px;
            box-sizing: border-box;
            background-color: white;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .school-box.checked {
            background-color: #9e9e9eff;
            opacity: 0.9;
        }

        .school-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .school-logo {
            width: 60px;
            height: 60px;
            border-radius: 6px;
            flex-shrink: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .school-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .school-info p {
            margin: 4px 0;
        }

        .checkmark-btn {
            background: none;
            border: none;
            cursor: pointer;
        }

        .checkmark-btn img {
            width: 32px;
            height: 32px;
            object-fit: contain;
            transition: transform 0.2s;
        }

        .checkmark-btn:hover img {
            transform: scale(1.15);
        }
    </style>
</head>
<body>
    <x-header />

    <div class="main-container">
        <x-layout />

        <div class="content" id="school-list">
            <h3>Beranda</h3>
            @foreach ($schools as $school)
                <div class="school-box flex justify-between items-center border p-4 rounded-lg mb-4 shadow-sm">
                    <div class="school-left flex items-center gap-4">
                        <div class="school-logo w-16 h-16">
                            <img src="{{ asset($school->logo) }}" alt="Logo Sekolah" class="w-full h-full object-contain">
                        </div>
                        <div class="school-info text-sm">
                            <p><strong>Nama Sekolah:</strong> {{ $school->name }}</p>
                            <p><strong>Alamat:</strong> {{ $school->location }}</p>
                            <p><strong>Jumlah porsi:</strong> {{ $school->total_meal }}</p>
                        </div>
                    </div>

                    <button class="checkmark-btn">
                        <img src="{{ asset('images/Checkmark.png') }}" alt="Checkmark" class="checked w-6 h-6">
                    </button>
                </div>
            @endforeach
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const schoolList = document.getElementById("school-list");

        schoolList.addEventListener("click", (e) => {
            const checkmarkButton = e.target.closest(".checkmark-btn");
            if (checkmarkButton) {
                const box = checkmarkButton.closest(".school-box");
                box.classList.add("checked");
                schoolList.appendChild(box);
                checkmarkButton.remove();
            }
        });
    });
    </script>
</body>
</html>