<?php include_once "includes/head.php" ?>

<body>
<?php include_once "includes/header.php" ?>

<section class="relative about-banner">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Our Destinations
        </h1>
        <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Destinations Us</a></p>
      </div>
    </div>
  </div>
</section>

<section class="destinations-area section-gap">
  <div class="container">
          <!-- <div class="row d-flex justify-content-center">
              <div class="menu-content pb-40 col-lg-8">
                  <div class="title text-center">
                      <h1 class="mb-10">Popular Destinations`</h1>
                      <p>All O</p>
                  </div>
              </div>
          </div> -->
    <div class="row">
      <?php
        $destinations = $cur->get_destinations();
       ?>
       <?php if (!empty($destinations)): ?>
         <?php foreach ($destinations as $key => $value):
           $image = base64_encode($value['image']);
           ?>
              <div class="col-lg-4" onclick="window.location.href='bookings.php?destination=<?php echo $value['id'] ?>'">
                <div class="single-destinations">
                  <div class="thumb">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo $image; ?>" style="width: 100%; height: 200px" alt="">
                  </div>
                  <div class="details">
                    <h4 class="d-flex justify-content-between">
                      <span><?php echo $value['name'] ?></span>
                      <div class="star">
                        <span class="fa fa-star checked"></span>
                      </div>
                    </h4>
                    <p>
                    </p>
                    <ul class="package-list">

                      <li class="d-flex justify-content-between align-items-center">
                        <span>Restaurant</span>
                        <span>Yes</span>
                      </li>
                      <li class="d-flex justify-content-between align-items-center">
                        <span>Package Price</span>
                        <a href="#" class="price-btn"><?php echo $value['price'] ?></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <div class="single-post row">
              <p>
                No destinations in the database
              </p>
            </div>
          <?php endif; ?>

    </div>
  </div>
</section>


<<?php include_once "includes/footer.php" ?>
