<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <h1>Daftar Sekolah (Centang)</h1>

    <table border="1" cellpadding="6">
        <tr>
            <th>ID</th>
            <th>Kantor</th>
            <th>Karyawan</th>
        </tr>
        <tr>
            <td>{{ $profile->id }}</td>
            <td>{{ $profile->office }}</td>
            <td>{{ $profile->employee }}</td>
        </tr>
    </table>
</body>
</html>