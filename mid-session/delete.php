<?php
require 'koneksi.php';

// pastikan ada id di URL
if (!isset($_GET["id"])) {
    header("Location: mahasiswa.php");
    exit;
}

$id = (int)$_GET["id"]; // amankan id biar pasti integer

if (delete($id) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'mahasiswa.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data gagal dihapus!');
        document.location.href = 'mahasiswa.php';
    </script>
    ";
}
?>
