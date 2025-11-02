<?php 

if (isset($_GET['submit'])) {
    header("Location: get.php");
    exit;
}

if (isset($_POST['submit'])) {
    header("Location: post.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 5 GET & POST</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

        <nav class="w-full h-20 bg-blue-500 flex justify-center items-center">
            <h1 class="text-2xl text-white font-bold">Pertemuan 5 GET & POST</h1>
        </nav>

        <div class="grid grid-cols-2 gap-6 p-6 w-full">
            <div class="col-span-1 rounded-lg shadow-lg bg-white gap-6 p-6">
                <h1 class="font-bold text-lg">Contoh Penerapan GET menggunakan $_GET</h1>

                <form action="get.php" method="GET">
                    masukan nama :
                    <input type="text" name="nama" class="border-2 border-gray-300 rounded p-1 mb-3">
                    <br> 
                    <button type="submit" name="submit" class="bg-blue-500 text-white font-bold px-4 py-2 rounded">Kirim</button>
                </form>
            </div>
            <div class="col-span-1 rounded-lg shadow-lg bg-white gap-6 p-6">
                <h1 class="font-bold text-lg">Contoh Penerapan POST memnggunakan $_POST</h1>
                <form action="post.php" method="POST">
                    masukan nama :
                    <input type="text" name="nama" class="border-2 border-gray-300 rounded p-1 mb-3">
                    <br> 
                    <button type="submit" name="submit" class="bg-blue-500 text-white font-bold px-4 py-2 rounded">Kirim</button>
                </form>
            </div>
            <div class="col-span-1 rounded-lg shadow-lg bg-white gap-6 p-6">
                <h1 class="font-bold text-lg">Contoh penggunaan GET untuk mengirim data tanpa berpindah halaman</h1>

            </div>
            <div class="col-span-1 rounded-lg shadow-lg bg-white gap-6 p-6">
                <h1 class="font-bold text-lg">Contoh penggunaan POST untuk mengirim data tanpa berpindah halaman</h1>

            </div>
        </div>
    
</body>
</html>