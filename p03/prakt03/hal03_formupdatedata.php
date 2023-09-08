<!DOCTYPE html>
<html lang="en">
<head>
  <title>03 FRM UPDATE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php

//print_r($_GET);
include "hal00_konfigurasikoneksi.php";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM tabel_mahasiswa WHERE id='".$_GET["id"]."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc()

?>

<div class="container mt-3">
  <h2>FORM UPDATE DATA</h2>
  <form action="hal04_aksisimpanupdate.php" method="post">
    <div class="mb-3 mt-3">
      <label for="nim">NIM:</label>
      <input type="text" class="form-control" id="nim" placeholder="masukan nim anda" name="nim" value="<?php echo $row["nim"]; ?>">
    </div>
    <div class="mb-3">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nim" placeholder="masukan nama anda" name="nama" value="<?php echo $row["nama"]; ?>">
    </div>
    <div class="mb-3">
      <label for="prodi">Program Studi:</label>
      <?php 
          
          function aksingeselect($x, $match){
             if ($x==$match)
                { echo "selected";}
          }

          function aksingecheck($x, $match){
            if ($x==$match)
               { echo "checked";}
         }

          //ksingeceklis("ABC","ABC"); 
          //echo $row["prodi"];         
          //aksingeceklis($row["prodi"],"PVT");  
      ?>
      <select class="form-select mt-3" id="prodi" name="prodi">
        <option value="TRPL" <?php aksingeselect($row["prodi"], "TRPL"); ?> >01 TRPL</option>
        <option value="TRK"  <?php aksingeselect($row["prodi"], "TRK"); ?>>02 TRK</option>
        <option value="PVT"  <?php aksingeselect($row["prodi"], "PVT"); ?>>03 PVT</option>
        <option value="KMN"  <?php aksingeselect($row["prodi"], "KMN"); ?>>04 KMN</option>
        <option value="AKN"  <?php aksingeselect($row["prodi"], "AKN"); ?>>05 AKN</option>
      </select>   
    </div>
    <div class="mb-3">
         <label for="jk">Jenis Kelamin:</label>
         <br><input type="radio" class="form-check-input" id="jk" name="jk" value="L" <?php aksingecheck($row["kelamin"], "L"); ?>> Laki-laki
         <br><input type="radio" class="form-check-input" id="jk" name="jk" value="P" <?php aksingecheck($row["kelamin"], "P"); ?>> Perempuan
    </div>    
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    <button type="submit" class="btn btn-primary">Simpan!</button>
    <a href="hal00_daftarmahasiswa.php#" class="btn btn-primary">Kembali ke hal daftar mahasiswa</a>
  </form>
</div>

</body>
</html>
