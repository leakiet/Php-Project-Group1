<?php
session_start();
if (isset($_GET['error'])) {
    $error = 'Password or login name is wrong';
    if (isset($_SESSION['username'])) {
        $username = $_SESSION["username"];
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Creative Colorlib SignUp Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet"> -->
    <link href="./login.css" rel="stylesheet">
</head>

<body>
    <div class="main-w3layouts wrapper">
        <h1>Sign Up </h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="./process-login.php" method="post">
                    <input class="text" type="text" name="username" placeholder="Username" required="" value="<?= (isset($username)) ? $username : '' ?>">
                    <input class="text" type="password" name="password" placeholder="Password" required="">
                    <div>
                        <span class="error-login"><?= (isset($error)) ? $error : '' ?></span>
                    </div>
                    <input type="submit" value="LOG IN">
                </form>
                <p>Don't have an Account? <a href="../SignUp/signup.php">Sign Up now!</a></p>
            </div>
        </div>
        <!-- <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul> -->
    </div>
    <!-- //main -->
</body>

</html>