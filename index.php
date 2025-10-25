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
            <h1 class="font-bold text-xl mb-4">Perulangan (Looping)</h1>
            <p class="mb-3 text-gray-600">Contoh penggunaan for, </p>
            <pre class="bg-gray-100 rounded p-3"><code>

            <?php 
                // for ($i = 0; $i < 5; $i++){
                //     echo "ini for </br>";
                // }

                // $i = 5;
                // while ($i < 5) {
                //     echo "ini while </br>";
                //     $i++;
                // }
                

                // $j = 0;
                // do {
                //     echo "ini do while </br>";
                //     $j++;
                // } while ($j < 5);
               


            ?>

            <table>
                <tr>
                    <th>nomor</th>
                    <th>nama</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>pisang</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>apel</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>lemon</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>pepaya</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>kelapa</td>
                </tr>
            </table>

            </code></pre>
        </div>
        <div class="bg-white shadow-lg gap-6 p-6 rounded-lg">
            <h1 class="font-bold text-xl mb-4">Pengkondisian</h1>
            <p class="mb-3 text-gray-600 mb-3">Contoh penggunaan if else, </p>
            <pre class="bg-gray-100 rounded p-3"><code>
                <?php 
                
                 $i = 10;
                $j = "10";
                if ($i === $j) {
                    echo "benar";
                }else if ( $i == 10) {
                    echo "i = 10";
                } else {
                    echo "salah";
                }

                ?>
            </code></pre>
        </div>
        <div class="bg-white shadow-lg gap-6 p-6 rounded-lg">
            <h1 class="font-bold text-xl mb-4">Card 3</h1>
            <p class="mb-3 text-gray-600 mb-3">test</p>
            <pre class="bg-gray-100 rounded p-3"><code>              
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

    </div>
</body>
</html>