<?php
$conn = mysqli_connect("127.0.0.1","root","","belajarphp", 3307);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function query($query) {
    global $conn;
    $rows = [];
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function create($data) {
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $nim = htmlspecialchars($data["nim"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);

    $query = "INSERT INTO mahasiswa (gambar, nama, nim, alamat, jurusan, email)
              VALUES ('$gambar', '$nama', '$nim', '$alamat', '$jurusan', '$email')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function read($data) {
    global $conn;

    $id = $data["id"];
    $query = "SELECT * FROM mahasiswa WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function update($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $nim = htmlspecialchars($data["nim"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);

    $query = "UPDATE mahasiswa SET 
    nama = '$nama', 
    gambar = '$gambar',
    nim = '$nim',
    alamat = '$alamat',
    jurusan = '$jurusan',
    email = '$email'
    WHERE id = $id
    ";

    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}
function delete($id) {
    global $conn;
    $query = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}



?>

