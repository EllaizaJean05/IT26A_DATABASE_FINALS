<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusSafe - Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container">
        <section class="card auth">
            <h2>CampusSafe Login</h2>
            <input id="loginUser" type="text" placeholder="Username or email" />

            <div class="password-container">
                <input id="loginPass" type="password" placeholder="Password" />
                <span class="password-toggle" onclick="togglePassVisibility('loginPass', this)">👁️</span>
            </div>
            <button id="loginBtn">Login</button>
            <p class="muted">Don't have an account? <a href="#" onclick="showRegister()">Sign up</a></p>
        </section>

        <section class="card auth" id="registerSection" style="display:none">
            <h2>Create Account</h2>
            <input id="regUser" type="text" placeholder="Username or email" />

            <div class="password-container">
                <input id="regPass" type="password" placeholder="Password" />
                <span class="password-toggle" onclick="togglePassVisibility('regPass', this)">👁️</span>
            </div>

            <button id="regBtn">Register</button>
            <p class="muted">Already registered? <a href="#" onclick="showLogin()">Login</a></p>
        </section>
    </main>

    <script src="auth.js"></script>
</body>

</html>