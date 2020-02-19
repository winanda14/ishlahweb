<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <!-- javascript -->
    <link rel="stylesheet" href="js/admin.js" >
    
    <!-- font awesome -->
    <link rel="stylesheet" href="css/all.css">
    <!-- link owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">    
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
    <link rel="icon" href="img/logo.png">
    <title>  LDK ISHLAH Y.A.I</title>

    <style>

      ul.pagination {
      display: inline-block;
      padding: 0;
      margin: 0;
      }
      ul.pagination li {display: inline;}
      ul.pagination li a {
      color: black;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
      transition: background-color .3s;
      border: 1px solid #ddd;
      }
      ul.pagination li a.active {
      background-color: gray;
      color: white;
      border: 1px solid gray;
      }
      ul.pagination li a:hover:not(.active) {background-color: #ddd;}
      div.center {text-align: center;}
      
    </style>
  </head>
  <body>

    <!-- navbar -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark m-auto">  
  <a class="navbar-brand text-center" href="#">HALAMAN ADMIN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="icon ml-auto ">
    <a href=""><i class="fas fa-sign-out-alt" style="color:white;" data-toggle="tooltip" data-placement="bottom" title="log out"></i></a>
    </div>
  </div>
</nav>
<!-- akhir navbar -->

    <!-- awal content -->
<div class="row no-gutters">

<div class="col-md-2 bg-light ">
<ul class="nav flex-column pt-2">
  <li><a href="" class="nav-link text-dark "><i class="fas fa-tachometer-alt mr-3 ml-1"></i>Dashboard</a> <hr class="bg-secondary "></li>
</ul>
<ul class="nav flex-column ">
  <li><a href="buatartikel.php" class="nav-link text-dark"><i class="fas fa-user-edit mr-3 ml-1"></i>Buat Artikel</a> <hr class="bg-secondary "></li>
</ul>
<ul class="nav flex-column ">
  <li><a href="" class="nav-link text-dark"><i class="fas fa-images mr-3 ml-1"></i>Tambah Foto</a> <hr class="bg-secondary "></li>
</ul>
<ul class="nav flex-column pt-5">
  <li></li>
</ul>

</div>


<div class="col-md-10  d-inline-block" style="background-color:#C9D8CE; "><br><br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<button type="button" class="btn btn-info">Buat Baru</button>
&nbsp &nbsp <button type="button" class="btn btn-danger">Delete</button><br><br>


<div class="form-check">
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">"One Day One Hadist : Keutamaan Membaca Al-Qur'an"</label><hr width="90%">
</div>
<div class="form-check">
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
  <label class="form-check-label" for="defaultCheck2">"One Day One Hadist : Keutamaan Membaca Al-Qur'an"</label><hr width="90%">
</div>
<div class="form-check">
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
  <label class="form-check-label" for="defaultCheck2">"One Day One Hadist : Keutamaan Membaca Al-Qur'an"</label><hr width="90%">
</div>
<div class="form-check">
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
  <label class="form-check-label" for="defaultCheck2">"One Day One Hadist : Keutamaan Membaca Al-Qur'an"</label><hr width="90%">
</div>

   <div class="center">
      <ul class="pagination">
        <li><a class="active" href="artikelweb.php">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">...</a></li>
        <li><a href="#">>></a></li>

    </ul>
    </div> 


<div class="container">
  <div class="content row">
    <div class="backgroundcard1 col">
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>

<!-- akhir content -->
<footer>
<p class="text-center">copyright <i class="far fa-copyright"></i> 2020 by Sistem Informasi Y.A.I</p>

</footer>



<!-- test -->
<!-- test -->


    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js" ></script>
    <script src="js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script> 
<script>
    $('.carousel').carousel({
    interval: 3000,
    pause: 'hover',
    wrap: true,
    touch: true
});

$(function(){
  $("#customers-testimonials").owlCarousel({
    items:1,
    loop:true,  
    autoplay:true,
    autoplayTimeout:1000,
    
    look:true,
    autoPlayHoverPause:true,
    
  });
}); 
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

</script>


  </body>
</html>