<?php
session_start();
if (isset($_POST) && !empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost', 'root', '', 'projectmini');
    if (!$conn) {
        die("Connection Failed!");
    }

    $query = "select * from user where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $query);
    $useraAccout = mysqli_fetch_array($result);
    // var_dump($useraAccout);
    mysqli_close($conn);
    if ($useraAccout == null) {
        header('location: login.php?error=loginFail');
    } else {
        $_SESSION["user"] = $useraAccout['username'];
        $_SESSION["userid"] = $useraAccout['userid'];
        header("location: ../home.php");
    }
}
