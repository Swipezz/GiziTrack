<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | GiziTrack</title>
</head>
<body>
    <div>
        <h2>Login Akun</h2>
        {{-- Tampilkan pesan error atau sukses --}}
        @if(session('error'))
            <div>
                {{ session('error') }}
            </div>
        @endif
        @if(session('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif

        {{-- Form login --}}
        <form action="{{ route('login.post') }}" method="POST">
            @csrf

            <div>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">
                Login
            </button>
        </form>
    </div>
</body>
</html>
