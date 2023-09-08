<?php
include "hal00_konfigurasikoneksi.php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

echo $sql = "UPDATE tabel_mahasiswa 
        SET nim='".$_POST["nim"]."', nama='".$_POST["nama"]."',
            prodi='".$_POST["prodi"]."', kelamin='".$_POST["jk"]."' 
        WHERE id=".$_POST["id"];

if (mysqli_query($conn, $sql)) {
    header("Location:hal00_daftarmahasiswa.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>