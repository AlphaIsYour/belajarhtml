<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }

        th,td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;

        }

        th {
            background-color: white;
        }
    </style>
</head>
<body>
    <nav class="flex justify-center items-center p-6 gap-6 bg-blue-500">
        <h1 class="text-white font-bold text-2xl">Pertemuan 4 - PHP</h1>
    </nav>
    <div class="grid grid-cols-3 gap-6 p-6">
        <div class="bg-white shadow-lg gap-6 p-6 rounded-lg">
            <h1 class="font-bold text-xl ">Perulangan (Looping)</h1>
            <h2 class="mb-3 text-lg">Contoh penggunaan for, while, do while, & foreach</h2>

            <p class="text-gray-600">Contoh penggunaan for</p>
            <pre class="bg-gray-100 rounded p-3 mb-3 "><code><?php

                for ($i = 1; $i <= 5; $i++) {
                    echo "Cangkir kopi ke-$i siap disajikan!<br>";
                }

            ?></code></pre>

            <p class=" text-gray-600">Contoh penggunaan while</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php

                $gelas = 1;
                while ($gelas <= 3) {
                    echo "Isi kopi ke-$gelas sedang dituang...<br>";
                    $gelas++;
                }

            ?></code></pre>

            <p class=" text-gray-600">Contoh penggunaan do while</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php

                $jumlah = 3;
                do {
                    echo "Menikmati tegukan kopi ke-$jumlah<br>";
                    $jumlah++;
                } while ($jumlah <= 2);

            ?></code></pre>

            <p class=" text-gray-600">Contoh penggunaan foreach</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php

                $teman = ["Alpha", "Budi", "Citra", "Dewi"];

                foreach ($teman as $nama) {
                    echo "$nama sedang ikut ngopi bareng!<br>";
                }

            ?></code></pre>
        </div>
        <div class="bg-white shadow-lg gap-6 p-6 rounded-lg">
            <h1 class="font-bold text-xl">Pengkondisian</h1>
            <h2 class="mb-3 text-lg">Contoh penggunaan if else, if elseif else, ternary, switch </h2>

            <p class=" text-gray-600">Contoh penggunaaan if else</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php  

                $nilai = 80;
                if ($nilai >= 90) {
                    echo "Nilai kamu A";
                } else {
                    echo "Nilai kamu belum A";
                }

            ?></code></pre>

            <p class=" text-gray-600">Contoh penggunaaan if elseif else</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php 
                 
                 $umur = 18;

                if ($umur < 13) {
                    echo "Anak-anak";
                } elseif ($umur < 18) {
                    echo "Remaja";
                } else {
                    echo "Dewasa";
                }
                 
            ?></code></pre>

            <p class=" text-gray-600">Contoh penggunaaan ternary</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php 
                
                $login = false;

                // echo $login ? "Selamat datang!" : "Silakan login dulu.";

                if ($login == true) {
                    echo "Selamat datang!";
                } else {
                    echo "Silakan login dulu.";
                }

            ?></code></pre>

            <p class=" text-gray-600">Contoh penggunaaan switch</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php 
               
            $hari = "Rabu";

            switch ($hari) {
                case "Senin":
                    echo "Awal minggu nih, semangat!";
                    break;
                case "Rabu":
                    echo "Sudah pertengahan minggu!";
                    break;
                case "Jumat":
                    echo "Hampir weekend!";
                    break;
                default:
                    echo "Hari tidak dikenal";
            }

            ?></code></pre>

        </div>
        <div class="bg-white shadow-lg gap-6 p-6 rounded-lg">
            <h1 class="font-bold text-xl">Array</h1>
            <h2 class="mb-3 text-lg mb-3">Contoh penggunaan Array sederhana, asosiatif, multidimensi</h2>
            <p class=" text-gray-600">Contoh penggunaaan Array sederhana</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php
            
            $buah = ["Apel", "Jeruk", "Mangga"];
            echo $buah[0];
            
            ?></code></pre>

            <p class=" text-gray-600">Contoh penggunaaan Array asosiatif</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php
            
            $mahasiswa = [
                    "nama" => "Alpha",
                    "jurusan" => "TI",
                    "semester" => 1

            ];
            echo $mahasiswa["jurusan"];
            
            ?></code></pre>

            <p class=" text-gray-600">Contoh penggunaaan Array multidimensi</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php
            
            $kelas = [
                ["Alpha", "TI", 1],
                ["Budi", "SI", 2],
                ["Caca", "MI", 3]
            ];
            echo $kelas[1][0];
            
            ?></code></pre>
        </div>
        <div class="bg-white shadow-lg gap-6 p-6 rounded-lg">
            <h1 class="font-bold text-xl mb-4">Function Sederhana</h1>
            <p class="mb-3 text-gray-600 mb-3">Menggunakan function sederhana</p>
            <?php
            function salam($nama = "admin", $kondisi = "sehat") {
                date_default_timezone_set("Asia/Jakarta"); 
                $jam = date("H"); 
                
                if ($jam >= 5 && $jam < 11) {
                    $waktu = "Selamat pagi";
                } elseif ($jam >= 11 && $jam < 15) {
                    $waktu = "Selamat siang";
                } elseif ($jam >= 15 && $jam < 18) {
                    $waktu = "Selamat sore";
                } else {
                    $waktu = "Selamat malam";
                }

                return "$waktu, $nama! Semoga kamu $kondisi ";
            }
            ?>

            <pre class="bg-gray-100 rounded p-3"><code>              
                <h3><?php echo salam("Hasan", "ceria"); ?></h3>
                <h3><?php 
                $jam = date("i"); 
                echo "Sekarang menit $jam"; 
                ?></h3>
            </code></pre>
        </div>
        <div class="bg-white shadow-lg gap-6 p-6 rounded-lg">
            <h1 class="font-bold text-xl mb-4">Latihan 1</h1>
            <p class="mb-3 text-gray-600 mb-3">Latihan perulangan menggunakan Array</p>
            <pre class="bg-gray-100 rounded p-3 justify-center flex"><code>              
                <table>
                    <tr>
                        <th>nomor</th>
                        <th>nama</th>
                    </tr>
                    <?php 
                    $buah = ["apel", "pisang", "durian", "kelapa", "lemon", "semangka", "jeruk"];
                    $jumlah_buah = count($buah);
                    for ($i = 0; $i < $jumlah_buah; $i++) {
                        echo "<tr>";
                        echo "<td>".  $i + 1 . "</td>";
                        echo "<td>".$buah[$i]."</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </code></pre>
        </div>
  
        <div class="bg-white shadow-lg gap-6 p-6 rounded-lg">
            <h1 class="font-bold text-xl mb-4">Latihan 2</h1>
            <p class="mb-3 text-gray-600 mb-3">Latihan Pengkondisian dengan Array</p>
            <pre class="bg-gray-100 rounded p-3"><code><?php 
            
            $mahasiswa = [
                [
                    "nama" => "Alpha", 
                    "nilai" => 85
                ],
                [
                    "nama" => "Budi", 
                    "nilai" => 60
                ],
                [
                    "nama" => "Caca", 
                    "nilai" => 45
                ],
            ];

            foreach ($mahasiswa as $mhs) {
                if ($mhs["nilai"] >= 70) {
                    echo $mhs["nama"] . " dinyatakan Lulus<br>";
                } else {
                    echo $mhs["nama"] . " dinyatakan Tidak Lulus<br>";
                }
            }
            
            ?></code></pre>
        </div>
    </div>
</body>
</html>