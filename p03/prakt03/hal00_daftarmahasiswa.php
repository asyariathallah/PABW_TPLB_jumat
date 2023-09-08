<!DOCTYPE html>
<html lang="en">
<head>
  <title>00 DATA MHSW</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="tablesorter-master\dist\js\jquery.tablesorter.js"></script>

  <script>
    function dialogHapus(urlHapus,namanya){
      var konfirmasi = confirm("Apakah anda yakin akan menghapus data "+namanya+"?");
      if(konfirmasi == true){
        alert("Data berhasil dihapus");
        document.location=urlHapus;
      }else{
        alert("Data tidak jadi dihapus");
      }
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
$(function(){
  $("#myTableUtama").tablesorter({sortlist:[[0,0],[1,0]]});
});
</script>
</head>
<body>



<div class="container mt-3">
  <h2>Data Mahasiswa SV IPB</h2>
  
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
      Operasi Data
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="hal01_forminsertdata.php">Menambah data baru</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">info?</a></li>
    </ul>
  </div>
  <p></p>
  Filter data: <input id="myInput" type="text" placeholder="Search..">

  <table class="table table-hover" id="myTableUtama">
    <thead>
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
        <th>Jenis Kelamin</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
            include "hal00_konfigurasikoneksi.php";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM tabel_mahasiswa";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            $nomor = 1;
            $array_kelamin = array("P"=>"Perempuan","L"=>"Laki-laki");
            while($row = $result->fetch_assoc()) {
                //echo "row: " . $row["id"]. "-" . $row["nim"]. "-" . $row["nama"]."-". $row["prodi"]."-". $row["kelamin"]."<br>";
                echo "<tr>
                        <td>$nomor</td>
                        <td>".$row["nim"]."</td>
                        <td>" . $row["nama"]."</td>
                        <td>". $row["prodi"]."</td>
                        <td>". $array_kelamin [ $row["kelamin"] ]."</td>
                        <td><a href=\"hal03_formupdatedata.php?id=".$row["id"]."\" class=\"btn btn-primary\">Update</a></td>
                        <td><a href=\"javascript:dialogHapus('hal05_aksihapus.php?id=".$row["id"]."','".$row["nama"]."')\" class=\"btn btn-danger\">Delete</a></td>
                     </tr>";
                $nomor++;     
            }
            } else {
            echo "0 results";
            }
            $conn->close();
    ?>
      
    </tbody>
  </table>
</div>

</body>
</html>
