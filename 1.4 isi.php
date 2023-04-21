<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buku_tamu";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$conn) {
    die("Connection failed:".mysqli_connect_error());
}

$sql = "INSERT INTO buku_tamu (id_bt, nama, email,isi)
VALUES ('001', 'Adibah', 'dibah.adibah@gmail.com', 'hadir'), 
('002', 'Dewi', 'dewi.adibah@gmail.com', 'hadir'), 
('003', 'Satriani', 'satriani.adibah@gmail.com', 'hadir') ";

if (mysqli_query($conn, $sql)){
    echo "New record created successfully";
} else{
    echo "Error: ".$sql."<br>". mysqli_error($conn);
}

mysqli_close($conn);
?>
