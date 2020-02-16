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
      
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark m-auto">
  <a class="navbar-brand text-center" href="#">HALAMAN ADMIN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="icon ml-auto ">
   <a href=""> <i class="fas fa-sign-out-alt" style="color:white;" data-toggle="tooltip" tittle="log out"></i></a>
    </div>
  </div>
</nav>

<div class="row no-gutters">

<div class="col-md-2 bg-light ">
<ul class="nav flex-column pt-2">
  <li><a href="" class="nav-link text-dark "><i class="fas fa-tachometer-alt mr-3 ml-1"></i>Dashboard</a> <hr class="bg-secondary "></li>
</ul>
<ul class="nav flex-column ">
  <li><a href="" class="nav-link text-dark"><i class="fas fa-user-edit mr-3 ml-1"></i>Buat Artikel</a> <hr class="bg-secondary "></li>
</ul>
<ul class="nav flex-column ">
  <li><a href="" class="nav-link text-dark"><i class="fas fa-images mr-3 ml-1"></i>Tambah Foto</a> <hr class="bg-secondary "></li>
</ul>
<ul class="nav flex-column pt-5">
  <li></li>
</ul>

</div>

<div class="col-md-10  d-inline-block" style="background-color:#C9D8CE; ">
<h3 class="pt-2 ml-3 ">Dashboard</h3>
<hr style="border:3;">
<div class="container">
  <div class="row">
    <div class="col">
<div class="card " style="width: 18rem;">
  
  <div class="card1 card-body">
    
    <h2 class="card-text text-center">Buat Artikel</h2>
    
    </div>
    <p class="text-center">Buat Artikel</p>
    </div>
  </div>
  
  <div class="col">
<div class="card " style="width: 18rem;">
  
  <div class="card2 card-body">
    
    <h2 class="card-text text-center">Tambah Foto</h2>
    </div>
    <p class="text-center">Tambah Foto</p>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- footer -->
<footer>
<p class="text-center">copyright 2020 by Sistem Informasi Y.A.I</p>

</footer>
<!-- akhir footer -->
    
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