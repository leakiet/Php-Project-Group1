<?php
session_start();
if (isset($_POST) && !empty($_POST)) {
    $username = $_POST['Username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    // echo $username . $email . $password . $cpassword;

    $conn = mysqli_connect('localhost', 'root', '', 'projectmini');

    if (!$conn) {
        die("Connection Failed!");
    }
    if ($password == $cpassword) {
        $query = "insert into user (username , password,email,image) values ('$username', '$password','$email','ImgProfile/avartar-basic.jpg')";
        $result = mysqli_query($conn, $query);
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        header('location: ../signup.php?error=Passwordsdonotmatch!');
    }

    mysqli_close($conn);
    if ($result == true) {
        // echo "<script>alert('Product added successfully!')</script>";
        header("location: ../login.php");
    } else {
        die('error fail');
    }
}
