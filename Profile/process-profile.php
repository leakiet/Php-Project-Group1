<?php
if (isset($_POST) && !empty($_POST)) {
    $username = $_POST['username'];
    $userid = $_POST['userid'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $image_file = $_FILES['image'];

    $conn = mysqli_connect('localhost', 'root', '', 'projectmini');
    if (!$conn) {
        die("Connection Failed!");
    }

    $query = "update user set username = '$username', email = '$email',location = '$location',phone = '$phone'";

    if (!empty($image_file['name'])) {
        $image_name = bin2hex(random_bytes(4)) . '-' . $image_file['name'];
        move_uploaded_file(
            $image_file["tmp_name"],
            __DIR__ . "/ImgProfile/" . $image_name
        );
        $query .= ", image = 'ImgProfile/$image_name'";
    }

    $query .= " WHERE userid = $userid";

    $result = mysqli_query($conn, $query);
    if ($result) {
        header("location: profile.php");
    } else {
        die('Error updating user profile');
    }

    mysqli_close($conn);
}
