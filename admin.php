<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <?php
    if (isset($_POST['username'])) {
        echo "<h2>Halo, " . htmlspecialchars($_POST['username']) . "!</h2>";
        echo "<p>Selamat datang di halaman admin.</p>";
    } else {
        echo "<p>Tidak ada data yang dikirim!</p>";
    }
    ?>

</body>
</html>
