<?php include_once "includes/head.php" ?>

<body>
<?php include_once "includes/header.php" ?>

<!-- <section class="relative" style="background: url(assets/img/blog/bwatch.jpg)"> -->
<section class="relative about-banner">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Our Gallery
        </h1>
        <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#">Gallery</a></p>
      </div>
    </div>
  </div>
</section>

<section class="destinations-area section-gap">
  <div class="container">
    <div class="row">
      <?php
        $gallery = $cur->get_gellery();
       ?>
       <?php if (!empty($gallery)): ?>
         <?php foreach ($gallery as $key => $value):
           $image = base64_encode($value['image']);
           ?>
              <div class="col-lg-4">
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
                    <div class="package-list">
                      <p>
                        <?php echo $value['description'] ?>
                      </p>
                    </div>
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


  <?php include_once "includes/footer.php" ?>
