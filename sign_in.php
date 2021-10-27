<?php
require_once "header.php";
require_once "database.php";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $query = "SELECT * FROM users WHERE username = '$username' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password'] === $password) {
                    echo "Login successful, welcome!" . $username;
                    die;
                }
            }
        }
        echo "Sorry, username or password does not exist!";
    } else {
        echo "Sorry, username or password does not exist!";
    }
}

?>
<form action="/sign_in.php" method="post" class="login-about">
    <p>After creating an account, a user can then sign-in.
        The backend checks if a username exists in the database.
        If true, the password is then checked with the database by re-hashing
        the user's password. If the hash matches with the database, the user can
        sign in.</p>
    <input id="text" type="text" name="username" placeholder="Username"> <br><br>
    <input id="text" type="password" name="password" placeholder="Password"><br><br>
    <input class="register-button" id="button" type="submit" value="Sign-in"><br><br>
</form>
</body>
</html>