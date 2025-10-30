<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = file('users.txt', FILE_IGNORE_NEW_LINES);
    $login_success = false;

    foreach ($users as $user) {
        list($saved_user, $saved_pass) = explode('|', $user);
        if ($username == $saved_user && $password == $saved_pass) {
            $login_success = true;
            break;
        }
    }

    if ($login_success) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Form Login</h2>
    <form method="POST">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
</body>
</html>
