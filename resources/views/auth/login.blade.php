<!-- resources/views/auth/login.blade.php -->

<form method="POST" action="{{ route('login') }}">
    @csrf

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">Login</button>
</form>
