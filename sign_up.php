<?php
    require_once "header.php";
    require_once "database.php";
/*
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "login_sample_db";

    $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);*/

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $query = "INSERT INTO users (username, password) VALUES ('$username','$password')";
        mysqli_query($con, $query);

    } else {
        echo "Could not register user!";
    }
}
?>
<title>Sign Up</title>
<body>
<form method="post"> <!--action="login_project/sign_up.php"-->
    <input id="text" type="text" name="username" placeholder="Username"> <br><br>
    <input id="text" type="password" name="password" placeholder="Password"><br><br>
    <input class="register-button"id="button" type="submit" value="Signup"><br><br>
    <p>Already have an account? <a href=sign_in.php > Sign-in here</p></a>

</form>
<br><br>

