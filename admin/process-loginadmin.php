<?php
session_start();
if (isset($_POST) && !empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username . $password;

    $conn = mysqli_connect('localhost', 'root', '', 'baitap');
    if (!$conn) {
        die("Connection Failed!");
    }

    $query = "select * from admin where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $query);
    $adminaccout = mysqli_fetch_array($result);
    // var_dump($useraAccout);
    mysqli_close($conn);
    if ($adminaccout == null) {
        header('location: loginAdmin.php?error=loginFail');
    } else {
        $_SESSION["id"] = $adminaccout['id'];
        header("location: productlist.php");
    }
}
