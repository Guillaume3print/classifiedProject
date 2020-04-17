<?php
require_once( dirname(__FILE__) . "/components/header.php");

if(!isset($_SESSION["username"])){
    header("Location: login.php");
}

require_once(dirname(__FILE__) . "/components/navbar.php");
?>

<!-- Petit encart de bienvenu -->
<div class="presentation">
<h2>Bienvenue !</h2>
<h5>Ici on aide ceux qui ont du mal</h5>
<button type="button" class="btn btn-light" href="http://localhost:8888/classifiedProject/advert-list.php">Voir les propositions</button>

</div>
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000" style="width: 100%; height: 90vh;">
      <img src="https://images.unsplash.com/photo-1584265549884-cb8ea486a613?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000" style="width: 100%; height: 90vh;">
      <img src="https://images.unsplash.com/photo-1585435557343-3b092031a831?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" style="width: 100%; height: 90vh;">
      <img src="https://images.unsplash.com/photo-1583947215259-38e31be8751f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Fin de l'encart de bienvenue-->
<?php
require_once( dirname(__FILE__) . "/components/footer.php");
?>
