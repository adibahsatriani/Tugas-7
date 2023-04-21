<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpegawai";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$conn) {
    die("Connection failed:".mysqli_connect_error());
}

//membuat tabel pegawai
$pegawai = "CREATE TABLE pegawai (
    id INT(10) PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(50),
    alamat VARCHAR(100),
    no_telp VARCHAR(15),
    jabatan VARCHAR(50),
    gaji INT(10)
)";

//mengeksekusi query pembuatan tabel pegawai dan absensi
if(mysqli_query($conn, $pegawai)){
    echo "Tabel berhasil dibuat.";
} else {
    echo "Error: ".mysqli_error($conn);
}

mysqli_close($conn);
?>
    
