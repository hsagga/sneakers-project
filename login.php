<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/authen.js"></script>
</head>

<body>
    <a href="index.php">Main</a>
    <a href="login.php">Login</a>
    <a href="product.php">Product</a>
    <a href="contact.php">Contact Us</a>

    <h1>Login Page</h1>
    <h2>Please Log In</h2>
    <div>
        <form id="form_id" method="post">
            <fieldset>
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="username" id="username" required>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="password" id="password" required>
                <input type="button" value="Login" id="submit" onclick="login()">
            </fieldset>
        </form>
    </div>
    <div class="container" style="background-color:#f1f1f1">
        <span class="psw">Forgot <a href="forgot.html">password?</a></span>
    </div>
</body>

</html>