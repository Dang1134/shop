<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<h2>Register</h2>
<form method="POST" action="{{ route('register') }}">
    @csrf <!-- Laravel CSRF token -->
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>
    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" id="password_confirmation" name="password_confirmation" required>
    <br><br>
    <input type="submit" value="Register">
</form>
</body>
</html>
