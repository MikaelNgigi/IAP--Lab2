<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet Application Programming | Assignment</title>
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
                <img src="https://www.strathmore.edu/wp-content/themes/michigan/images/logo.png">
            </div>
            <h1>Reset Password</h1>
            <form action="resetPasswordProcess.php" autocomplete="off" method="post">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" class="form-control" placeholder="Enter new password" name="new_password" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="reset" class="btn btn-primary" value="Reset">
                </div>
                <p>Go back to <a href="index.php"> Login</a></p>
        </div>
        </form>

        <footer>
            <div class="copyright">
                <p>Developed by &copy Michael Macharia (89724)</p>
            </div>
        </footer>
    </div>
</div>

</body>
</html>
