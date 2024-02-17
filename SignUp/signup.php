<?php
session_start();
if (isset($_GET['error'])) {
    $error = 'loi';
    if (isset($_SESSION['username']) && $_SESSION["email"] && $_SESSION["password"]) {
        $username = $_SESSION["username"];
        $email = $_SESSION["email"];
        $password = $_SESSION["password"];
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
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <!-- <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet"> -->
    <link href="./signup.css" rel="stylesheet">


    <!-- //web font -->
</head>

<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Sign Up </h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="./process-signup.php" method="post">
                    <input class="text" type="text" name="Username" placeholder="Username" required="" value="<?= isset($username) ? $username : '' ?>">
                    <input class="text email" type="email" name="email" placeholder="Email" required="" value="<?= isset($email) ? $email : '' ?>">
                    <input class="text" type="password" name="password" placeholder="Password" required="" value="<?= isset($password) ? $password : '' ?>">

                    <?php
                    if (isset($error)) {
                    ?>
                        <input class="text w3lpasserror" type="password" name="cpassword" placeholder="Confirm Password" required="">
                    <?php
                    } else {
                    ?>
                        <input class="text w3lpass" type="password" name="cpassword" placeholder="Confirm Password" required="">
                    <?php
                    }
                    ?>

                    <div>

                    </div>
                    <input type="submit" value="SIGN UP">
                </form>
                <p>Already have an account |<a href="../Login/login.php"> Login Now!</a></p>
            </div>
        </div>
        <!-- <ul class="colorlib-bubbles">
            <li></li>
            <li>dfgdfg</li>
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