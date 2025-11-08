<?php 
$conn = mysqli_connect("127.0.0.1", "root", "", "belajarphp", 3307);

function query($query) {
    global $conn;
    // mysqli_fetch_row
    // mysqli_fetch_assoc
    // mysqli_fetch_array
    // mysqli_fetch_object
    $keranjang = [];
    $result = mysqli_query($conn, $query);
    while ( $pembawaKeranjang = mysqli_fetch_assoc($result)  ) {
        $keranjang[] = $pembawaKeranjang;
    }
    return $keranjang;
}

function create($data) {
    global $conn;

    $nama = $data["nama"];
    $foto = $data["foto"];
    $nim = $data["nim"];
    $alamat = $data["alamat"];
    $jurusan = $data["jurusan"];
    $email = $data["email"];

    $query = "INSERT INTO mahasiswa (nama, foto, nim, alamat, jurusan, email) VALUES
    ('$nama', '$foto', '$nim', '$alamat', '$jurusan', '$email')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function read($data) {
    global $conn;
    $id = $data["id"];
    $query = "SELECT*FROM mahasiswa WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function update($data) {
    global $conn;

    $id = $data["id"];

    $nama = $data["nama"];
    $foto = $data["foto"];
    $nim = $data["nim"];
    $alamat = $data["alamat"];
    $jurusan = $data["jurusan"];
    $email = $data["email"];

    $query = "UPDATE mahasiswa SET 
    nama = '$nama',
    foto = '$foto',
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