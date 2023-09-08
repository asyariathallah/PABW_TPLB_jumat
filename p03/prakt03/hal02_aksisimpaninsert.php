<?php

  //print_r($_POST);

include "hal00_konfigurasikoneksi.php"; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo "<p>";
 $sql = "INSERT INTO tabel_mahasiswa (nim, nama, prodi, kelamin)
VALUES ('".$_POST["nim"]."', '".$_POST["nama"]."', '".$_POST["prodi"]."','".$_POST["jk"]."')";

if ($conn->query($sql) === TRUE) {
  //echo "Data baru dengan nama ".$_POST["nama"]." telah disimpan ke db";
  header("Location:hal00_daftarmahasiswa.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>