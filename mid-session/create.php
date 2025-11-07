<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @font-face {
      font-family: 'MonaSans';
      src: url('../font/mona-sans.ttf') format('truetype');
    }
    body {
      font-family: 'MonaSans', sans-serif;
      background-color: #f1f5f9;
    }
  </style>
</head>
<body>

  <nav class="flex justify-center items-center h-20 bg-blue-700 shadow-md mb-4">
    <h1 class="text-2xl font-bold text-white tracking-wide">Dashboard Pengelolaan Data Mahasiswa</h1>
  </nav>

  <div class="max-w-lg mx-auto bg-white p-8 rounded-2xl shadow-lg border">
    <h2 class="text-xl font-semibold mb-6 text-center text-gray-800">Tambah Data Mahasiswa</h2>
    
    <form action="" method="post" class="space-y-2">
      <div>
        <label for="nama" class="block text-gray-700 mb-1 font-medium">Nama</label>
        <input type="text" name="nama" id="nama" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>

      <div>
        <label for="gambar" class="block text-gray-700 mb-1 font-medium">Gambar</label>
        <input type="text" name="gambar" id="gambar" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>

      <div>
        <label for="nim" class="block text-gray-700 mb-1 font-medium">NIM</label>
        <input type="text" name="nim" id="nim" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>

      <div>
        <label for="alamat" class="block text-gray-700 mb-1 font-medium">Alamat</label>
        <input type="text" name="alamat" id="alamat" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>

      <div>
        <label for="jurusan" class="block text-gray-700 mb-1 font-medium">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>

      <div>
        <label for="email" class="block text-gray-700 mb-1 font-medium">Email</label>
        <input type="email" name="email" id="email" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>

      <button type="submit" name="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 transition">
        Simpan Data
      </button>
    </form>
  </div>

</body>
</html>
