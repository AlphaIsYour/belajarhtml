<?php 
session_start();

if (isset($_POST['submit'])) {
    // set nilai dari username dan password 
    $default_user = "admin";
    $default_pass = "admin123";

    // kemudian disini untuk mengambil input dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Pengecekan sederhana
    if (empty($username) || empty($password)) {
        echo "<script>alert('Harap isi username dan password!');</script>";
    } elseif ($username !== $default_user) {
        echo "<script>alert('Username salah!');</script>";
    } elseif ($password !== $default_pass) {
        echo "<script>alert('Password salah!');</script>";
    } else {
        // kalau login berhasil maka diarahkan ke halaman admin
        $_SESSION['username'] = $username;
        header('Location: admin.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-80 text-center">
        <h2 class="text-2xl font-semibold mb-6 text-gray-800">Form Login</h2>
        <form action="admin.php" method="POST" class="space-y-4">
            <div>
                <input 
                    type="text" 
                    name="username" 
                    placeholder="Username" 
                    required 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                >
            </div>
            <div>
                <input 
                    type="password" 
                    name="password" 
                    placeholder="Password" 
                    required 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                >
            </div>
            <button 
                type="submit" 
                name="submit" 
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-lg transition duration-200"
            >
                Login
            </button>
        </form>
    </div>
</body>
</html>
