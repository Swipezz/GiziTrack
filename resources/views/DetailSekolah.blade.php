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
            <h1>Detail Sekolah</h1> 
                <form class="detail-container" id="schoolForm" enctype="multipart/form-data">
                    @csrf
                    <div class="logo-section">
                        <img id="schoolLogo" src="" alt="Logo Sekolah" class="school-logo"> 
                        
                        <div class="upload-section" style="margin-top:10px;">
                            <label class="label">Ganti Logo</label>
                            <input type="file" name="logo" id="logoInput" accept="image/*" disabled>
                        </div>
                    </div>

                    <div class="info-grid"> 
                        <div class="info-box"> 
                            <span class="label">Nama Sekolah</span> 
                            <input class="value" id="name" name="name" value="" disabled> 
                        </div> 
                        
                        <div class="info-box info-wide"> 
                            <span class="label">Alamat Sekolah</span> 
                            <input class="value" id="location" name="location" value="" disabled> 
                        </div> 
                        
                        <div class="bottom-info">
                            <div class="info-box"> 
                                <span class="label">Jumlah Siswa</span> 
                                <input class="value" id="total_student" name="total_student" value="" disabled> 
                            </div> 
                            <div class="info-box"> 
                                <span class="label">Jumlah Porsi</span> 
                                <input class="value" id="total_meal" name="total_meal" value="" disabled> 
                            </div>
                            <div class="info-box info-wide"> 
                                <span class="label">Alergi</span> 
                                <input class="value" id="type_allergy" name="type_allergy" value="" disabled> 
                        </div> 
                    </div>
                    <div>
                        <button type="button" class="edit-btn" id="editBtn">Edit Data</button> 
                        <button type="button" class="edit-btn" id="deleteBtn" style="background-color: #ff0000ff">Hapus Data</button> 
                    </div>
                </form>
            </div> 
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch(`/api/sekolah/{{ $id }}`)
                .then(res => res.json())
                .then(result => {
                    const data = result.data;

                    document.getElementById('schoolLogo').src = data.logo;
                    document.getElementById('name').value = data.name;
                    document.getElementById('location').value = data.location;
                    document.getElementById('total_student').value = data.total_student;
                    document.getElementById('total_meal').value = data.total_meal;
                    document.getElementById('type_allergy').value = data.type_allergy;
                })
                .catch(err => console.error(err));
        });

        const editBtn = document.getElementById('editBtn');
        const deleteBtn = document.getElementById('deleteBtn');
        const inputs = document.querySelectorAll('#schoolForm input:not([type=file])');
        const fileInput = document.getElementById('logoInput');
        const logoPreview = document.getElementById('schoolLogo');
        const form = document.getElementById('schoolForm');
        const schoolId = "{{$id}}";

        fileInput.addEventListener('change', e => {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = () => logoPreview.src = reader.result;
                reader.readAsDataURL(file);
            }
        });

        // Tombol Edit / Simpan
        editBtn.addEventListener('click', async () => {
            if (editBtn.textContent === 'Edit Data') {
                inputs.forEach(i => i.removeAttribute('disabled'));
                fileInput.removeAttribute('disabled');
                editBtn.textContent = 'Simpan Data';
            } else {
                const formData = new FormData(form);

                try {
                    const response = await fetch(`/sekolah/${schoolId}`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
                        },
                        body: formData
                    });

                    if (response.ok) {
                        alert('Data berhasil disimpan!');
                        inputs.forEach(i => i.setAttribute('disabled', true));
                        fileInput.setAttribute('disabled', true);
                        editBtn.textContent = 'Edit Data';
                    } else {
                        alert('Gagal menyimpan data.');
                    }
                } catch (e) {
                    alert('Terjadi kesalahan: ' + e.message);
                }
            }
        });

        // 🗑️ Tombol Hapus Data
        deleteBtn.addEventListener('click', async () => {
            if (confirm('Apakah kamu yakin ingin menghapus data sekolah ini?')) {
                try {
                    const response = await fetch(`/sekolah/${schoolId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
                        }
                    });

                    if (response.ok) {
                        alert('Data sekolah berhasil dihapus!');
                        window.location.href = '/sekolah'; // redirect ke daftar sekolah
                    } else {
                        alert('Gagal menghapus data sekolah.');
                    }
                } catch (e) {
                    alert('Terjadi kesalahan: ' + e.message);
                }
            }
        });
    </script>
</body>


</html>