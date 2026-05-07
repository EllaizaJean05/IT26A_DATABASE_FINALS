<!DOCTYPE html>
<html>

<head>
    <title>CampusSafe Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="login-container">

    <h2>CampusSafe Login</h2>

    <form action="login_process.php" method="POST">

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>

    </form>

    <p>
        No account?
        <a href="register.php">Register Here</a>
    </p>

</div>

<script src="auth.js"></script>

</body>
</html>