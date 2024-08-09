<?php 
//Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "mahasiswa");
//ambil data dari table mahasiswa
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]);
    $tanggalLahir = htmlspecialchars($data["tanggalLahir"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $query = "INSERT INTO mahasiswa(nama, npm, tanggal_lahir, jurusan) VALUES ('$nama', '$npm', '$tanggalLahir', '$jurusan')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]); 
    $tanggalLahir = htmlspecialchars($data["tanggalLahir"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                npm = '$npm',
                tanggal_lahir = '$tanggalLahir',
                jurusan = '$jurusan'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);
    return
    mysqli_affected_rows($conn);
}
function cari($keyword) {
    $query = "SELECT * FROM mahasiswa WHERE
                nama LIKE '%$keyword%' OR
                npm LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
                ";
    return query($query);

}
?>

