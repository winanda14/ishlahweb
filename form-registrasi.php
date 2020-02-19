<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <!-- javascript -->
    <link rel="stylesheet" href="js/script.js" >
    
    <!-- font awesome -->
    <link rel="stylesheet" href="css/all.css">
    <!-- link owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">    
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png">
    <title>  LDK ISHLAH Y.A.I</title>

    <style>
      
    </style>
  </head>
  <body>
<form action="action_page.php">
    <div class="container">
        <h1 class="text-center">REGISTRASI</h1>
        <p class="text-center">Menjadi Anggota Ishlah</p>
        <hr class="bg-primary" >

        <form>
  <div class="row">
    <div class="col">
        <label for="nama">Nama Depan</label>
      <input type="text" class="form-control" placeholder="Nama Depan">
    </div>
    <div class="col">
        <label for="nama">Nama Belakang</label>
      <input type="text" class="form-control" placeholder="Nama Belakang">
    </div>
  </div>
<br>

    <label for="jkel">Jenis Kelamin:</label><br>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="jkel" id="laki" value="option1">
  <label class="form-check-label" for="Laki-laki">
    Laki-laki
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="jkel" id="perempuan" value="option2">
  <label class="form-check-label" for="Perempuan">
    Perempuan
  </label>
</div>
<br>

    <div class="form-group">
        <label for="address">Alamat</label>
      <input type="text" class="form-control" placeholder="Alamat">
    </div>
  <div class="form-group">
    <label for="telephone">Nomor Telepon</label>
    <input type="text" class="form-control" id="1234567890" placeholder="Nomor Telepon">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="kaorixviolet@example.com" placeholder="name@example.com">
    <small id="emailHelp" class="form-text text-muted">Kami tidak akan pernah membagikan email Anda ke siapapun.</small>
  </div>
  <div class="form-group">
    <label for="university">Universitas</label>
    <input type="text" class="form-control" placeholder="Universitas">
  </div>
<br>

  <div class="col">
    <select class="form-control" id="PilihFakultas">
        <h5>Pilih Fakultas</h5>
        <option hidden>-Pilih Fakultas-</option>
        <option>-Pilih Fakultas-</option>
        <option>Teknik</option>
        <option>Ekonomi</option>
        <option>Psikologi</option>
        <option>Ilmu Komunikasi</option>
        <option>Akademi Akuntansi</option>
        <option>STIE</option>
      </select>
  </div>
<br>

  <div class="col">
    <select class="form-control" id="PilihJurusan">
        <h5>Pilih Jurusan</h5>
        <option hidden>-Pilih Jurusan-</option>
        <option>Teknik Informatika</option>
        <option>Sistem Informasi</option>
        <option>Ekonomi</option>
        <option>Psikologi</option>
        <option>Akuntansi</option>
        <option>Manajemen</option>
        <option>Teknik Industri</option>
        <option>Teknik Arsitektur</option>
        <option>Teknik Sipil</option>
        <option>Desain Komunikasi Visual</option>
        <option>Ilmu Komunikasi</option>
    </select>
  </div>
<br>

<div class="col">
    <select class="form-control" id="TahunAngkatan">
        <h5>Tahun Angkatan</h5>
        <option hidden>-Tahun Angkatan-</option>
        <option>2014/2015</option>
        <option>2015/2016</option>
        <option>2016/2017</option>
        <option>2017/2018</option>
        <option>2018/2019</option>
        <option>2019/2020</option>
    </select>
  </div>
<br>

  <div class="form-group">
    <label for="masukkan">Alasan masuk Ishlah?</label>
    <textarea class="form-control" id="LettersFromViolet" rows="4"></textarea>
</div>
    <br>

    <label for="keterangan">Pastikan Anda merupakan mahasiswa Universitas Persada Indonesia Y.A.I.</label><br>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="keterangan" id="Y" value="option1">
  <label class="form-check-label" for="keterangan">YA</label>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="keterangan" id="N" value="option2">
  <label class="form-check-label" for="keterangan">TIDAK</label>
</div>
</form>
<br>
  
    </div>
  </div>
  
  <div class="container text-right">
  <button type="submit" class="btn btn-primary ">SUBMIT</button>
  </div>  
</form>
<br>
     </body>
</html>