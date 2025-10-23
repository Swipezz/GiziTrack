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

        .menu {
            display: flex;
            flex-direction: column;
            align-items: center;
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
            align-items: left;
            justify-content: flex-start;
            padding: 40px 0;
            padding-left: 5%;
            width: 100%;
            margin-left: 220px;
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
            width: 100%;
            height: 100%;
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

        /* =======================
        Tambahan dari style ke-2
        ======================= */

        .content h1 {
            color: #0a1f44;
            align-self: flex-start; 
            margin-bottom: 30px;
            font-size: 40px;
            gap: 20px;
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

        .school-logo.large { 
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
            border: none;
        }

        .info-wide { 
            grid-column: span 2; 
        }

        .bottom-info { 
            grid-column: 1 / span 2; 
            display: grid; 
            grid-template-columns: repeat(2, 1fr); 
            gap: 20px; 
            margin-top: 20px; 
        }

        .edit-btn {
            width: 40%;
            padding: 10px 20px; 
            background-color: #d4ac0d; 
            border: none;
            border-radius: 8px; 
            font-weight: bold; 
            font-size: 14px; 
            transition: background-color 0.2s; 
            text-align: center;
        }


        .edit-btn:hover { 
            background-color: #a88507; 
            cursor: pointer;
        }
    </style>


</head>
<body>
    <x-header />
    <div class="main-container">
        <x-layout />

        <div class="content">
            <h1>Tambah Sekolah</h1>
            <form class="detail-container" action="{{ route('storeSekolah') }}" method="POST" enctype="multipart/form-data" id="addSchoolForm">
                @csrf

                <div class="logo-section">
                    <img id="previewLogo" 
                            src="{{ asset('uploads/logo/default.png') }}" 
                            alt="Logo Sekolah" 
                            class="school-logo">

                    <div class="upload-section" style="margin-top: 10px;">
                        <label class="label">Upload Logo</label>
                        <input type="file" name="logo" id="logoInput" accept="image/*">
                        <small style="display:block; color:#666;">*Format: JPG, PNG, WEBP (maks 2MB)</small>
                    </div>
                </div>

                <div class="info-grid">
                    <div class="info-box">
                        <span class="label">Nama Sekolah</span>
                        <input class="value" name="name" placeholder="Masukkan nama sekolah" required>
                    </div>

                    <div class="info-box info-wide">
                        <span class="label">Alamat Sekolah</span>
                        <input class="value" name="location" placeholder="Masukkan alamat sekolah" required>
                    </div>

                    <div class="bottom-info">
                        <div class="info-box">
                            <span class="label">Jumlah Siswa</span>
                            <input class="value" name="total_student" type="number" min="1" placeholder="Contoh: 300" required>
                        </div>

                        <div class="info-box">
                            <span class="label">Jumlah Porsi</span>
                            <input class="value" name="total_meal" type="number" min="1" placeholder="Contoh: 300" required>
                        </div>

                        <div class="info-box info-wide">
                            <span class="label">Alergi</span>
                            <input class="value" name="type_allergy" placeholder="Contoh: Susu, Kacang, Telur">
                        </div>
                    </div>
                    <button type="submit" class="edit-btn">Simpan Sekolah</button> 
                </div>
            </form>
            </div>
        </div>
    </div>

    <script>
        // Preview logo sebelum di-upload
        const fileInput = document.getElementById('logoInput');
        const previewLogo = document.getElementById('previewLogo');

        fileInput.addEventListener('change', e => {
            const file = e.target.files[0];
            if (file) {
                if (!file.type.startsWith('image/')) {
                    alert('File harus berupa gambar!');
                    fileInput.value = '';
                    return;
                }
                if (file.size > 2 * 1024 * 1024) {
                    alert('Ukuran gambar maksimal 2MB!');
                    fileInput.value = '';
                    return;
                }

                const reader = new FileReader();
                reader.onload = () => previewLogo.src = reader.result;
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>



</html>