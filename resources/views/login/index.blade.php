<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        </form>
    </div>
</body>
</html>