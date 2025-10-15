<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GiziTrack</title>
</head>
<body>
    <div>
        <h2>Survey Alergi</h2>

        {{-- Tampilkan pesan error atau sukses --}}
        @if(session('error'))
            <div style="color:red">{{ session('error') }}</div>
        @endif
        @if(session('success'))
            <div style="color:green">{{ session('success') }}</div>
        @endif

        <form action="{{ route('surveyAlergi.post') }}" method="POST">
            @csrf

            <div class="mb-4 form-item">
                <label for="sekolah">Sekolah</label>
                <input type="text" id="sekolah" name="sekolah" required>
                <label for="alergi">Alergi</label>
                <input type="text" id="alergi" name="alergi" required>
            </div>

            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
