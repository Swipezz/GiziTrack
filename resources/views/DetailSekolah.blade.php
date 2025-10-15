<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <h1>Detail Sekolah</h1>

    <table border="1" cellpadding="6">
        <tr>
            <th>ID</th>
            <th>Logo</th>
            <th>Nama</th>
            <th>Lokasi</th>
            <th>Total Murid</th>
            <th>Total Porsi</th>
            <th>Total Alergi</th>
            <th>Tipe Alergi</th>
        </tr>
        <tr>
            <td>{{ $school->id }}</td>
            <td>{{ $school->logo }}</td>
            <td>{{ $school->name }}</td>
            <td>{{ $school->location }}</td>
            <td>{{ $school->total_student }}</td>
            <td>{{ $school->total_meal }}</td>
            <td>{{ $school->total_allergy }}</td>
            <td>{{ $school->type_allergy }}</td>
        </tr>
    </table>
</body>
</html>