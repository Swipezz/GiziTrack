<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <h1>Daftar Sekolah</h1>

    <table border="1" cellpadding="6">
        <tr>
            <th>Nama</th>
            <th>Logo</th>
        </tr>
        @foreach ($school as $sch)
        <tr>
            <td><a href="/sekolah/{{ $sch->id }}">{{ $sch->name }}</a></td>
            <td>{{ $sch->logo }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>