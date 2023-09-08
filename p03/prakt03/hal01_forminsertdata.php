<!DOCTYPE html>
<html lang="en">
<head>
  <title>01 FRM INSERT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>FORM MENAMBAH DATA BARU</h2>
  <form action="hal02_aksisimpaninsert.php" method="post">
    <div class="mb-3 mt-3">
      <label for="nim">NIM:</label>
      <input type="text" class="form-control" id="nim" placeholder="masukan nim anda" name="nim">
    </div>
    <div class="mb-3">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nim" placeholder="masukan nama anda" name="nama">
    </div>
    <div class="mb-3">
      <label for="prodi">Program Studi:</label>
      <select class="form-select mt-3" id="prodi" name="prodi">
        <option value="TRPL">01 TRPL</option>
        <option value="TRK">02 TRK</option>
        <option value="PVT">03 PVT</option>
        <option value="KMN">04 KMN</option>
        <option value="AKN">05 AKN</option>
      </select>   
    </div>
    <div class="mb-3">
         <label for="jk">Jenis Kelamin:</label>
         <br><input type="radio" class="form-check-input" id="jk" name="jk" value="L" checked> Laki-laki
         <br><input type="radio" class="form-check-input" id="jk" name="jk" value="P"> Perempuan
    </div>    
    <button type="submit" class="btn btn-primary">Simpan!</button>
    <a href="hal00_daftarmahasiswa.php#" class="btn btn-primary">Kembali ke hal daftar mahasiswa</a>
  </form>
</div>

</body>
</html>
