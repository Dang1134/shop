<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h2>Login</h2>
<form method="POST" action="{{ route('login') }}">
    @csrf <!-- Laravel CSRF token -->
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <input type="submit" value="Login">
</form>
</body>
</html>
