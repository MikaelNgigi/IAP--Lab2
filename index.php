<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet Application Programming | Lab 2 Assignment</title>
    <!---Main Stylesheet---->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!----Strath Favicon-->
    <link rel="shortcut icon" href="assets/img/strath_logo.png" type="image/x-icon">
    <!---Google Fonts----->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <!---Bootstrap---->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="strath-logo">
                <img src="https://www.strathmore.edu/wp-content/themes/michigan/images/logo.png" alt="Logo">
            </div>
            <h1>Internet Application Programming | Lab 2 Assignment</h1>
            <h2>User Login</h2>
            <p>Welcome back!</p>
            <form action="loginProcess.php" autocomplete="off" method="post">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="login" class="btn btn-primary" value="Login">
                </div>
                <a href="changePassword.php">Forgot password?</a>
                <p>New Member?<a href="register.php"> Create an account.</a></p>
            </form>
        </div>
        <footer>
            <div class="copyright">
                <p>Developed by &copy Michael Macharia (89724)</p>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
