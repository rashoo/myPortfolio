<?php
require_once "header.php";
require_once "database.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    $checkUser = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($con, $checkUser);

    if (mysqli_num_rows($result) > 0) {
        echo '<script> alert("That username is taken")</script>';
    }elseif (empty($username)) {
        echo '<script> alert("Please fill in the username!")</script>';
    } elseif (empty($password) || empty($repeat_password)) {
        echo '<script> alert("Please fill in both password fields!")';
    } elseif ($password !== $repeat_password) {
        echo '<script> alert("Your passwords do not match!")</script>';
    } elseif (!empty($username) && !empty($password)) {
        $query = "INSERT INTO users (username, password) VALUES ('$username','".md5($password)."')";
        mysqli_query($con, $query);
    } else {
        echo "Could not register user!";
        header("Location: index.php");
    }
}
?>
<title>Sign Up</title>
<body>
<form method="post">
    <input id="text" type="text" name="username" placeholder="Username"> <br><br>
    <input id="text" type="password" name="password" placeholder="Password"><br><br>
    <input id="text" type="password" name="repeat_password" placeholder="Confirm Password"><br><br>
    <input class="register-button" id="button" type="submit" value="Signup"><br><br>
    <p>Already have an account? <a href=sign_in.php> Sign-in here</p></a>

</form>
<br><br>

