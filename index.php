<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 5</title>
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
        <h1 class="text-white font-bold text-2xl">Pertemuan 4 - PHP Lanjutan</h1>
    </nav>
    <div class="grid grid-cols-3 gap-6 p-6">
        <div class="bg-white shadow-lg gap-6 p-6 rounded-lg">
            <h1 class="font-bold text-xl ">Perulangan (Looping)</h1>
            <h2 class="mb-3 text-lg">Contoh penggunaan for, while, do while, & foreach</h2>

            <p class="text-gray-600">Contoh penggunaan for</p>
            <pre class="bg-gray-100 rounded p-3 mb-3 "><code><?php



            ?></code></pre>

            <p class=" text-gray-600">Contoh penggunaan while</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php



            ?></code></pre>

            <p class=" text-gray-600">Contoh penggunaan do while</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php



            ?></code></pre>

            <p class=" text-gray-600">Contoh penggunaan foreach</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php



            ?></code></pre>
        </div>
        <div class="bg-white shadow-lg gap-6 p-6 rounded-lg">
            <h1 class="font-bold text-xl">Pengkondisian</h1>
            <h2 class="mb-3 text-lg">Contoh penggunaan if else, if elseif else, ternary, switch </h2>

            <p class=" text-gray-600">Contoh penggunaaan if else</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php  



            ?></code></pre>

            <p class=" text-gray-600">Contoh penggunaaan if elseif else</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php 
                 

                 
            ?></code></pre>

            <p class=" text-gray-600">Contoh penggunaaan ternary</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php 
                


            ?></code></pre>

            <p class=" text-gray-600">Contoh penggunaaan switch</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php 
               


            ?></code></pre>

        </div>
        <div class="bg-white shadow-lg gap-6 p-6 rounded-lg">
            <h1 class="font-bold text-xl">Array</h1>
            <h2 class="mb-3 text-lg mb-3">Contoh penggunaan Array sederhana, asosiatif, multidimensi</h2>
            <p class=" text-gray-600">Contoh penggunaaan Array sederhana</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php
            

            
            ?></code></pre>

            <p class=" text-gray-600">Contoh penggunaaan Array asosiatif</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php
            

            
            ?></code></pre>

            <p class=" text-gray-600">Contoh penggunaaan Array multidimensi</p>
            <pre class="bg-gray-100 rounded p-3 mb-3"><code><?php
            

            
            ?></code></pre>
        </div>
        <div class="bg-white shadow-lg gap-6 p-6 rounded-lg">
            <h1 class="font-bold text-xl mb-4">Function Sederhana</h1>
            <p class="mb-3 text-gray-600 mb-3">Menggunakan function sederhana</p>
            <pre class="bg-gray-100 rounded p-3"><code>              



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
            

            
            ?></code></pre>
        </div>
    </div>
</body>
</html>