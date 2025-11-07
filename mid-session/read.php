<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <style>
    @font-face {
    font-family: 'MonaSans';
    src: url('../font/mona-sans.ttf') format('truetype');
    }

    body {
    font-family: 'MonaSans', sans-serif;
    }
    </style>
</head>
<body>
    <nav class="flex justify-center items-center h-20 bg-blue-700 mb-4">
        <h1 class="text-2xl font-bold text-white">Dashboard Pengelolaan Data Mahasiswa</h1>
    </nav>

    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg border border-gray-200 mb-4">
    <h2 class="text-xl font-semibold mb-6 text-center text-gray-800">Tambah Data Mahasiswa</h2>
    
    <form action="" method="post" class="space-y-2 ">
      <div>
        <label for="nama" class="block text-gray-700 mb-1 font-medium">Nama</label>
        <input type="text" name="nama" id="nama" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" value="<?= $mhs["nama"] ?>" readonly>
      </div>

      <div>
        <label for="gambar" class="block text-gray-700 mb-1 font-medium">Gambar</label>
        <img src="img/<?= $mhs["gambar"] ?>" alt="Gambar" name="gambar" id="gambar" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" readonly>
      </div>

      <div>
        <label for="nim" class="block text-gray-700 mb-1 font-medium">NIM</label>
        <input type="text" name="nim" id="nim" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" value="<?= $mhs["nim"] ?>" readonly>
      </div>

      <div>
        <label for="alamat" class="block text-gray-700 mb-1 font-medium">Alamat</label>
        <input type="text" name="alamat" id="alamat" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" value="<?= $mhs["alamat"] ?>" readonly>
      </div>

      <div>
        <label for="jurusan" class="block text-gray-700 mb-1 font-medium">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" value="<?= $mhs["jurusan"] ?>" readonly>
      </div>

      <div class="mb-4">
        <label for="email" class="block text-gray-700 mb-1 font-medium">Email</label>
        <input type="email" name="email" id="email" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" value="<?= $mhs["email"] ?>" readonly>
      </div>

      <a href="mahasiswa.php" name="submit" class=" bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition">
        Kembali
      </a>
    </form>
  </div>
   
</body>
</html>