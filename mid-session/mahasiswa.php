<?php 
$mahasiswa = [
    [
        "id" => 1,
        "nama" => "Hasan",
        "gambar" => "img1.jpg",
        "nim" => "243140700111033",
        "alamat" => "Malang",
        "jurusan" => "Teknologi Informasi",
        "email" => "hasan@gmail.com",
    ],
    [
        "id" => 2,
        "nama" => "Bagas",
        "gambar" => "img2.jpg",
        "nim" => "243140700111034",
        "alamat" => "Malang",
        "jurusan" => "Teknologi Informasi",
        "email" => "bagas@gmail.com",
    ],
];
?>

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
<body class=" bg-gradient-to-b from-gray-100 via-gray-200 to-gray-300 min-h-screen">
    <nav class="flex justify-center items-center h-20 bg-blue-700 mb-8">
        <h1 class="text-2xl font-bold text-white">Dashboard Pengelolaan Data Mahasiswa</h1>
    </nav>
    <div class="px-20 w-8xl gap-4">
        <a href="create.php" class="bg-blue-500 rounded-sm p-2 text-white font-bold">Tambah</a>
            <table class="w-7xl mt-4 border border-gray-300 text-sm text-left text-gray-600 rounded-lg shadow-md">
                <thead class="bg-gray-100 text-gray-800 font-semibold">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">No</th>
                        <th class="border border-gray-300 px-4 py-2">Nama</th>
                        <th class="border border-gray-300 px-4 py-2">Gambar</th>
                        <th class="border border-gray-300 px-4 py-2">NIM</th>
                        <th class="border border-gray-300 px-4 py-2">Alamat</th>
                        <th class="border border-gray-300 px-4 py-2">Jurusan</th>
                        <th class="border border-gray-300 px-4 py-2">Email</th>
                        <th class="border border-gray-300 px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($mahasiswa as $mhs)  : ?>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-300 px-4 py-2"><?= $i; ?></td>
                            <td class="border border-gray-300 px-4 py-2 font-medium"><?= $mhs["nama"]; ?></td>
                            <td class="border border-gray-300 px-4 py-2">
                                <img src="img/<?= $mhs["gambar"]; ?>" alt="<?= $mhs["nama"]; ?>" class="w-12 h-12 object-cover  mx-auto">
                            </td>
                            <td class="border border-gray-300 px-4 py-2"><?= $mhs["nim"]; ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?= $mhs["alamat"]; ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?= $mhs["jurusan"]; ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-blue-500 underline"><?= $mhs["email"]; ?></td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="read.php?id=<?= $mhs['id']; ?>" class="bg-green-500 rounded-sm mb-2 p-2 text-white font-bold">Lihat</a>
                                <a href="update.php?id=<?= $mhs['id']; ?>" class="bg-yellow-500 rounded-sm mb-2 p-2 text-white font-bold">Edit</a>
                                <a href="delete.php?id=<?= $mhs['id']; ?>" class="bg-red-500 rounded-sm mb-2 p-2 text-white font-bold" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                </tbody>
            </table>

    </div>

</body>
</html>
