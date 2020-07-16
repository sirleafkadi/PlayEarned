<!DOCTYPE html>
<html lang="en">

<head>
<?php include('templets/head.php'); ?>
</head>

<body onload="index()">

  <!-- Navigation -->
  <?php require_once('templets/nav.php') ?>
 <!-- End |Navigation -->




<div id="slide_show">
  <div  class="py-5 bg-black">
    <div class="container-fluid">
  </div>
</div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  class=" img_one d-block w-100" src="https://futhead.cursecdn.com/static/uploads/news/fifa-fut-20-beta.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="img_two d-block w-100" src="https://images.unsplash.com/photo-1564061333-853adc4721b8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=891&q=80" alt="Second slide">
      <div class="test animate__animated animate__fadeInLeftBig " >
         <div class="slide_info " >
          <h4 class="slide-title">Player of The Week</h4>
           <p class="second_slide_text" >
            I love coding all day
            bhyjbjhbjhbjhbhbhhbbh
            yjhvghvhvhvhvhgvhvhv
            lnkjbhbjhbhvvvgvgvgvhg
             vgmvhgvgvhghgvhgvhgvgv
           </p>
        </div>
      </div>
      
  </div>
    <div class="carousel-item">
      <img class="ima_last d-block w-100" src="https://images.unsplash.com/photo-1564061333-853adc4721b8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=891&q=80" alt="Third slide">
      
      <div class="last_slide_text " >
          <p class="slide_body" >
            I love coding all day
            bhyjbjhbjhbjhbhbhhbbh
            yjhvghvhvhvhvhgvhvhv
            lnkjbhbjhbhvvvgvgvgvhg
             vgmvhgvgvhghgvhgvhgvgv
           </p>
      </div>
       
      </div>



    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</div>

  
  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>
  <!--End|Footer -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
