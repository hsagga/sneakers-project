<!doctype html>
<html lang="en">

<head>
    <title>Reset Password</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/authen.js"></script>
</head>

<body>
    <a href="index.php">Main</a>
    <a href="login.php">Login</a>
    <a href="product.php">Product</a>
    <a href="contact.php">Contact Us</a>

    <h1>Password Reset Page</h1>
    <h2>Please Enter Email address or Username: </h2>
    <div>
        <form id="form_id" method="post">
            <fieldset>
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="username" id="username" required>
                <input type="button" value="Reset Password" id="submit" onclick="reset()">
            </fieldset>
        </form>
    </div>
</body>

</html>