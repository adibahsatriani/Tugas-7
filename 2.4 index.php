<!-- Form input pegawai -->
<form method="POST">
    <p>
        <label>Id:</label><br/>
        <input type="text" name="id" required>
    </p>
    <p>
        <label>Nama:</label><br/>
        <input type="text" name="nama" required>
    </p>
    <p>
        <label>Alamat:</label><br/>
        <textarea name="alamat" required></textarea>
    </p>
    <p>
        <label>No Telp:</label><br/>
        <input type="text" name="no_telp" required>
    </p>
    <p>
        <label>Jabatan:</label><br/>
        <input type="text" name="jabatan" required>
    </p>
    <p>
        <label>Gaji:</label><br/>
        <input type="number" name="gaji" required>
    </p>
    <button type="submit" name="simpan">Simpan</button>
    <button type="submit" name="ubah">Ubah</button>
    <button type="submit" name="hapus">Hapus</button>
</form>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'dbpegawai');

if(!$conn){
    die('Koneksi gagal:'.mysqli_connect_error());
}

if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $jabatan = $_POST['jabatan'];
    $gaji = $_POST['gaji'];

    $sql = "INSERT INTO pegawai (id, nama, alamat, no_telp, jabatan, gaji) VALUES ('$id','$nama','$alamat','$no_telp','$jabatan','$gaji')";
    if(mysqli_query($conn, $sql)){
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: ".mysqli_error($conn);
    }
}

if(isset($_POST['ubah'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $jabatan = $_POST['jabatan'];
    $gaji = $_POST['gaji'];

    $sql = "UPDATE pegawai SET nama='$nama', alamat='$alamat', no_telp='$no_telp', jabatan='$jabatan', gaji='$gaji' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "Data berhasil diubah.";
    } else {
        echo "Error: ".mysqli_error($conn);
    }
}

if(isset($_POST['hapus'])){
    $id = $_POST['id'];

    $sql = "DELETE FROM pegawai WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: ".mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
