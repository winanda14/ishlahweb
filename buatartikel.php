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
    <link rel="stylesheet" href="css/admin.css">
    <link rel="icon" href="img/logo.png">
    <title> Buat Artikel</title>

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
   <a href=""> <i class="fas fa-sign-out-alt" style="color:white;" data-toggle="tooltip" data-placement="bottom" title="log out"></i></a>
    </div>
  </div>
</nav>
<div class="bg-light">
<br>
<div class="container mb-3">
<form>
<div class="form-group row">
    <label for="inputjudul" class="col-sm-2 col-md-1 col-form-label"><b>JUDUL : </b></label>
    <div class="col-sm-10 col-md-6">
      <input type="judul" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="form-group"
  <label for="inputcover" class="col-sm-2 col-md-2 col-form-label"><b>UPLOAD COVER :</b></label>
  <div class="custom-file col-sm-10 col-md-3">
  <input type="file" class="custom-file-input" id="customFile" accept="image/*">
  <label class="custom-file-label" for="customFile" style="margin-left:10px;">Choose file</label>
</div>
<button type="button" class="btn bg-primary mt-2" style="margin-left:20px; margin-right:20px;">Posting</button>
</div>

<center><div class="form-group col-sm-10 col-md-10">
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="20"></textarea>
  </div></center>
</form>
</div>
</div>

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