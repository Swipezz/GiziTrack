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

    /* ==== Tambahan dari style ke-2 yang belum ada di style ke-1 ==== */

    .content-header {
        display: flex;
        justify-content: space-between; /* jarak antara judul dan tombol */
        align-items: center;
        width: 100%;
        margin-bottom: 25px;
    }

    .content h2 {
        color: #000;
        font-size: 28px;
        font-weight: bold;
        margin: 0;
    }

    .tambah-data-btn {
        width: 130px;
        background-color: #d4ac0d;
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
        gap: 25px;
    }

    .school-card {
        width: 180px;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 15px;
        text-align: center;
        text-decoration: none;
        color: black;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .school-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }

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
    <x-header />
    <div class="main-container">
        <x-layout />

        <div class="content">
            <div class="content-header">
                <h2>Data Sekolah</h2>
            </div>

            <a href="/sekolah/create" class="tambah-data-btn">Tambah Data</a>

            <div class="school-grid" id="school-grid"></div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            fetch(`/api/sekolah`)
                .then(res => res.json())
                .then(result => {
                    const data = result.data;
                    const container = document.getElementById('school-grid');
                    container.innerHTML = "";

                    data.forEach(school => {
                        container.innerHTML += `
                            <a href="/sekolah/${school.id}" class="school-card">
                                <img src="${school.logo}" class="school-logo-img" alt="Logo ${school.name}">
                                <p class="school-name">${school.name}</p>
                            </a>
                        `;
                    });
                })
                .catch(err => console.error("Fetch Error:", err));
        });
    </script>
</body>

</html>