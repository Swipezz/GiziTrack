<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | GiziTrack</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      display: flex;
      height: 100vh;
    }

    .left-section {
      flex: 1;
      background-color: #0a1f44;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      width: 100%;
    }

    .login-container h2 {
      color: white;
      font-size: 26px;
      margin-bottom: 30px;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
    }

    .form-input {
      width: 60%;
      margin: 10px 0;
      background-color: white;
      color: black;
      border: none;
      padding: 10px;
      border-radius: 6px;
      text-align: center;
      font-size: 16px;
      outline: none;
    }

    .form-input::placeholder {
      color: black;
    }

    .btn-login {
      background-color: #3B82F6;
      color: white;
      border: none;
      padding: 10px 25px;
      border-radius: 6px;
      margin-top: 15px;
      cursor: pointer;
      font-weight: bold;
      font-size: 16px;
      width: auto;
    }

    .btn-login:hover {
      background-color: #2563EB;
    }

    .register-text {
      margin-top: 20px;
      font-size: 14px;
      color: white;
    }

    .register-text a {
      color: #3B82F6;
      text-decoration: none;
      font-weight: bold;
    }

    .register-text a:hover {
      text-decoration: underline;
    }

    .right-section {
      flex: 1;
      background-color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 30px;
      gap: 20px;
    }

    .right-section img {
        border-radius: 10px;
        object-fit: cover;
    }

    .main-image {
        width: 90%;
        height: 300px;
    }

    .small-images {
        display: flex;
        justify-content: space-between;
        width: 55%;
        gap: 15px;
    }

    .small-images img {
        width: 55%; 
        height: 200px;
    }
  </style>
</head>
<body>
  <div class="left-section">
    <div class="login-container">
      <h2>Gizi Track</h2>
      <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <input type="text" class="form-input" name="username" placeholder="Username" required>
        <input type="password" class="form-input" name="password" placeholder="Password" required>
        <button type="submit" class="btn-login">Login</button>
      </form>
    </div>
  </div>

  <div class="right-section">
    <img src="{{ asset('images/login-images.png') }}" alt="Gambar 1" class="main-image">
    <div class="small-images">
      <img src="{{ asset('images/login-images2.jpg') }}" alt="Gambar 2">
      <img src="{{ asset('images/login-images3.png') }}" alt="Gambar 3">
    </div>
  </div>
</body>
</html>
