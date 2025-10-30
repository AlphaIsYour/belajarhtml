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
                    <button type="submit" class="bg-blue-500 text-white font-bold px-4 py-2 rounded">Kirim</button>
                </form>
            </div>
            <div class="col-span-1 rounded-lg shadow-lg bg-white gap-6 p-6">
                <h1 class="font-bold text-lg">Contoh Penerapan POST memnggunakan $_POST</h1>
                <form action="post.php" method="POST">
                    masukan nama :
                    <input type="text" name="nama" class="border-2 border-gray-300 rounded p-1 mb-3">
                    <br> 
                    <button type="submit" class="bg-blue-500 text-white font-bold px-4 py-2 rounded">Kirim</button>
                </form>
            </div>
            <div class="col-span-1 rounded-lg shadow-lg bg-white gap-6 p-6">
                <h1 class="font-bold text-lg">Contoh penggunaan GET untuk mengirim data tanpa berpindah halaman</h1>
                <?php 
                
                if (isset($_GET['nama'])) {
                    echo "Halo, " . $_GET['nama'] . "! Selamat datang di situs kami.";
                } else {
                    echo "Silakan masukkan nama Anda di bawah dan klik Kirim.";
                }
                
                ?>
                <form action="" method="GET">
                    masukan nama :
                    <input type="text" name="nama" class="border-2 border-gray-300 rounded p-1 mb-3">
                    <br> 
                    <button type="submit" class="bg-blue-500 text-white font-bold px-4 py-2 rounded">Kirim</button>
                </form>
            </div>
            <div class="col-span-1 rounded-lg shadow-lg bg-white gap-6 p-6">
                <h1 class="font-bold text-lg">Contoh penggunaan POST untuk mengirim data tanpa berpindah halaman</h1>
                <?php 
                
                if (isset($_POST['nama'])) {
                    echo "Halo, " . $_POST['nama'] . "! Selamat datang di situs kami.";
                } else {
                    echo "Silakan masukkan nama Anda di bawah dan klik Kirim.";
                }
                
                ?>
                <form action="" method="POST">
                    masukan nama :
                    <input type="text" name="nama" class="border-2 border-gray-300 rounded p-1 mb-3">
                    <br> 
                    <button type="submit" class="bg-blue-500 text-white font-bold px-4 py-2 rounded">Kirim</button>
                </form>
            </div>
        </div>
    
</body>
</html>