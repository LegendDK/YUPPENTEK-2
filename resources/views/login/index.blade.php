<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Selamat Datang</h1>
            <p>Login Untuk Melanjutkan</p>
        </div>
        @error('login')
            <p style="color: red">{{ $message }}</p>
        @enderror
        <form action="{{ Route('login') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email : </label>
                <input type="email" name="email" id="email" class="form-input" value="{{ old('email') }}">
                @error('email')
                    <p style="color: red">{{ $message }}</p>
                @enderror
                
            </div>
            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" class="form-input">
                <button type="button" class="toggle-password" onclick="togglePassword()">Show</button>
                @error('password')
                    <p style="color : red">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn-login">Login</button>
            {{-- <p><a href="{{ Route('register') }}">Belum punya akun? Daftar disini</a></p> --}}
        </form>
    </div>
</body>
</html>
<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleButton = document.querySelector('.toggle-password');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleButton.textContent = 'Hide';
        } else {
            passwordInput.type = 'password';
            toggleButton.textContent = 'Show';
        }
    }
</script>