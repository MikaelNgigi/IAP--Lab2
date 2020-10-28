<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet Application Programming | Lab 2 Assignment</title>
    <!---Main Stylesheet---->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!---Strath Favicon---->
    <link rel="shortcut icon" href="assets/img/strath_logo.png" type="image/x-icon">
    <!---Google Font----->
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
            <h2>User Registration</h2>
            <p>Create a user account</p>
            <form action="registerProcess.php" autocomplete="off" method="post">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="First Name" name="firstname" required>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name" name="lastname" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                    <label>City of Residence</label>
                    <input type="text" class="form-control" placeholder="City of Residence" name="city" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                <div class="form-group">
                    <label>Select profile picture:</label>
                    <input type="file" name="profile" accept="image/*" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="register" class="btn btn-primary" value="Create account">
                </div>
                <p>Already have an account?<a href="index.php"> Login</a></p>
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
