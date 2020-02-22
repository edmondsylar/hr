<?php include_once "includes/head.php" ?>

<body>
<?php include_once "includes/header.php" ?>
<?php
  $guides = $cur->get_guides();
 ?>

<section class="relative contact-banner">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Our Guides
        </h1>
        <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#">Our Guides</a></p>
      </div>
    </div>
  </div>
</section>

<section  class="insurence-one-area section-gap" >
<?php if (!empty($guides)): ?>
  <?php foreach ($guides as $key => $value):
    $image = base64_encode($value['image']);
    ?>

    <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-4 insurence-left">
  					<img class="img-fluid img-one" src="data:image/jpg;charset=utf8;base64,<?php echo $image; ?>" alt="Stop thining it was for" style="height: 250px;">
  				</div>

          <div class="col-lg-8 insurence-right">
  							<p>
  							<h1><?php echo $value['name']; ?></h1>
                  <?php echo $value['potfolio']; ?>
                </p>
  							<div class="list-wrap">
  								<ul>
  									<li> <a href="destinations.php">service one</a> </li>
  								</ul>
  							</div>
  				</div>
      </div>
    </div>
    <hr>
  <?php endforeach; ?>
<?php endif; ?>

</section>
