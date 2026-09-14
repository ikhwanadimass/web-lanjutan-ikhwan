<!DOCTYPE html>
<html>
<body>
<form method="post" action="">
    Username : <input type="text" name="username" required><br>
    Password : <input type="password" name="password" required><br>
    <input type="submit" name="login" value="Login">
</form>
<?php
$username_valid = "ikhwan";
$password_valid = "2507411022";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === $username_valid && $password === $password_valid) {
        echo "Selamat datang Admin";
    } else {
        echo "Login gagal";
    }
}
?>
</body>
</html>