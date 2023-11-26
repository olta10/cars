<?php include_once('header.php');?>

<style>
  /* Custom styles for better aesthetics */

  /* Carousel styles */
  #myCarousel {
    margin-top: 20px;
  }

  .carousel-image {
    max-height: 600px;
    object-fit: cover;
  }

  /* Product item styles */
  .product-item {
    margin-bottom: 20px;
  }

  /* Button styles */
  .btn-dark {
    background-color: #343a40; /* Bootstrap dark color */
    color: #ffffff; /* White text */
  }

 /* Add this CSS to your style.css file */
 .section-heading {
        margin-bottom: 30px;
    }

    .product-item {
        margin-bottom: 20px;
    }

    .product-item img {
        border-radius: 8px;
        transition: transform 0.3s ease; /* Add transition for image scaling */
    }

    .product-item img:hover {
        transform: scale(1.05); /* Increase image size on hover */
    }

    .btn-see-more {
        border-radius: 20px;
        padding: 10px 20px;
    }
</style>

<!--carousel-->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="../../images/car.jpg" class="d-block w-100 carousel-image" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="../../images/privatejet.jpg" class="d-block w-100 carousel-image" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="../../images/yacht.jpg" class="d-block w-100 carousel-image float-end" alt="...">
    </div>
  </div>
  <!-- Correct the target href attribute to match the ID of the carousel -->
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--carousel-->


<br>

<div class="row">
  <div class="col-md-12">
    <div class="section-heading text-center">
      <h1>CARS</h1>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4 col-md-6">
    <div class="product-item">
      <a href="car-details.html"><img src="../../images/caar.jpg" class="img-fluid" alt="Car 1"></a>
    </div>
  </div>

  <div class="col-lg-4 col-md-6">
    <div class="product-item">
      <a href="car-details.html"><img src="../../images/pcar.jpg" class="img-fluid" alt="Car 2"></a>
    </div>
  </div>

  <div class="col-lg-4 col-md-6">
    <div class="product-item">
      <a href="car-details.html"><img src="../../images/acar.jpg" class="img-fluid" alt="Car 3"></a>
    </div>
    <br>
    <div class="d-flex justify-content-end">
    <button type="button" class="btn btn-dark ms-auto">See More</button>
    </div>

  </div>
</div>

<br>
<br>

<div class="row">
  <div class="col-md-12">
    <div class="section-heading text-center">
      <h1>PRIVATE JET</h1>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4 col-md-6">
    <div class="product-item">
      <a href="car-details.html"><img src="../../images/private1.jpg" class="img-fluid" alt="Car 1"></a>
    </div>
  </div>

  <div class="col-lg-4 col-md-6">
    <div class="product-item">
      <a href="car-details.html"><img src="../../images/private2.jpg" class="img-fluid" alt="Car 2"></a>
    </div>
  </div>

  <div class="col-lg-4 col-md-6">
    <div class="product-item">
      <a href="car-details.html"><img src="../../images/private3.jpg" class="img-fluid" alt="Car 3"></a>
    </div>
    <br>
    <div class="d-flex justify-content-end">
    <button type="button" class="btn btn-dark ms-auto">See More</button>
    </div>
  </div>
</div>

<br>
<br>

<div class="row">
  <div class="col-md-12">
    <div class="section-heading text-center">
      <h1>YACHTS</h1>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4 col-md-6">
    <div class="product-item">
      <a href="car-details.html"><img src="../../images/yacht1.jpg" class="img-fluid" alt="Car 1"></a>
    </div>
  </div>

  <div class="col-lg-4 col-md-6">
    <div class="product-item">
      <a href="car-details.html"><img src="../../images/yacht2.jpg" class="img-fluid" alt="Car 2"></a>
    </div>
  </div>

  <div class="col-lg-4 col-md-6">
    <div class="product-item">
      <a href="car-details.html"><img src="../../images/yacht3.jpg" class="img-fluid" alt="Car 3"></a>
    </div>
    <br>
    <div class="d-flex justify-content-end">
    <button type="button" class="btn btn-dark ms-auto">See More</button>
    </div>
  


  </div>
</div>



<?php include_once('footer.php');?>