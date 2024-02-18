<?php
session_start();

if (isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];
    // echo $id;
    $conn = mysqli_connect('localhost', 'root', '', 'projectmini');
    if (!$conn) {
        die("Connection Failed!");
    }
    $query = "select * from user where userid = '$userid' ";
    $result = mysqli_query($conn, $query);
    if ($result == null) {
        die('error');
    } else {
        $profile = mysqli_fetch_array($result);
    }
    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./Profile/profile.css" rel="stylesheet">
    <title>Profile Page</title>
</head>

<body>
    <?php include('header.php'); ?>
    <div class="container-profile">
        <header>
            <h1>Profile Page</h1>
        </header>
        <form action="./Profile/process-profile.php" method="post" enctype="multipart/form-data">
            <section class="profile-info">
                <div class="avatar">
                    <img src="./Profile/<?= isset($profile['image']) ? $profile['image'] : 'ImgProfile/avartar-basic.jpg' ?>" alt="Profile Picture">
                    <input type="file" id="avatar-upload" name="image" accept="image/*">
                    <label for="avatar-upload">Choose Photo</label>
                </div>
                <div class="info">
                    <ul>
                        <input type="text" name="userid" value="<?= $profile['userid'] ?>" hidden>
                        <li>
                            <label for="username">Username</label>
                            <input type="text" name="username" value="<?= isset($profile['username']) ? $profile['username'] : '' ?>">
                        </li>
                        <li>
                            <label for="email">Email</label>
                            <input type="email" name="email" value="<?= isset($profile['email']) ? $profile['email'] : '' ?>">
                        </li>
                        <li>
                            <label for="phone">Phone Number</label>
                            <input type="tel" name="phone" value="<?= isset($profile['phone']) ? $profile['phone'] : ''  ?>">
                        </li>
                        <li>
                            <label for="location">Location</label>
                            <input type="text" name="location" value="<?= isset($profile['location']) ? $profile['location'] : ''  ?>">
                        </li>
                    </ul>
                </div>

            </section>
            <section class="actions">
                <button type="submit">Save</button>
            </section>
        </form>
    </div>
</body>

</html>