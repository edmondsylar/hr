<?php include_once "./includes/head.php" ?>

<body>
  <?php include_once "./includes/header.php"; ?>
  <!-- start banner Area -->
  <section class="banner-area relative blog-home-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content blog-header-content col-lg-12">
          <h1 class="text-white">
            Over the horizon
          </h1>
          <p class="text-white">
            Specialists in Bird watching, if you really want to see the most Endemic bird species in the country.
          </p>
          <a href="contact.php" class="primary-btn">Contact Us</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner Area -->

  <!-- Start top-category-widget Area -->
  <section class="top-category-widget-area pt-90 pb-90 ">
    <div class="container">
      <div class="row">

        <div class="col-lg-4">
          <div class="single-cat-widget">
            <div class="content relative">
              <div class="overlay overlay-bg"></div>
                <a href="#" target="_blank">
                  <div class="thumb">
                   <img class="content-image img-fluid d-block mx-auto" src="assets/img/blog/bwatch.jpg" style="width: 100%; height: 200px;" alt="">
                  </div>
                  <div class="content-details">
                    <h4 class="content-title mx-auto text-uppercase">Bird watching</h4>
                    <span></span>
                    <p>
                      <!-- simple desc -->
                    </p>
                  </div>
                </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="single-cat-widget">
            <div class="content relative">
              <div class="overlay overlay-bg"></div>
                <a href="#" target="_blank">
                  <div class="thumb">
                   <img class="content-image img-fluid d-block mx-auto" src="assets/img/blog/gtrek.jpg" style="width: 100%; height: 200px;" alt="">
                  </div>
                  <div class="content-details">
                    <h4 class="content-title mx-auto text-uppercase">Gorilla Treking</h4>
                    <span></span>
                    <p>
                      <!-- simple desc -->
                    </p>
                  </div>
                </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="single-cat-widget">
            <div class="content relative">
              <div class="overlay overlay-bg"></div>
                <a href="#" target="_blank">
                  <div class="thumb">
                   <img class="content-image img-fluid d-block mx-auto" src="assets/img/blog/travel.jpg" style="width: 100%; height: 200px;" alt="">
                  </div>
                  <div class="content-details">
                    <h4 class="content-title mx-auto text-uppercase">Travel Advisory  </h4>
                    <span></span>
                    <p>
                      <!-- simple desc -->
                    </p>
                  </div>
                </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End top-category-widget Area -->

  <!-- Start post-content Area -->
  <section class="post-content-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 posts-list">
          <?php
            $destinations = $cur->get_destinations();
           ?>
           <?php if (!empty($destinations)): ?>
             <?php foreach ($destinations as $key => $value):
               $image = base64_encode($value['image']);
               ?>
               <div class="single-post row">
                 <div class="col-lg-3  col-md-3 meta-details">
                   <ul class="tags">
                     <li><a href="#">Hotels Around,</a></li>
                     <li><a href="#">More services,</a></li>
                     <!-- <li><a href="#">Politics,</a></li>
                     <li><a href="#">Lifestyle</a></li> -->
                   </ul>
                   <div class="user-details row">
                     <!-- <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span class="lnr lnr-user"></span></p> -->
                     <p class="date col-lg-12 col-md-12 col-6"><a href="#">Make reseravtion</a> <span class="lnr lnr-calendar-full"></span></p>
                   </div>
                 </div>
                 <div class="col-lg-9 col-md-9 ">
                   <div class="feature-img">
                     <img class="img-fluid" src="data:image/jpg;charset=utf8;base64,<?php echo $image; ?>" style="width: 100%; height: 270px" alt="">
                   </div>
                   <a class="posts-title" href="blog-single.html"><h3><?php echo $value['name'] ?></h3></a>
                   <p class="excert">
                     <?php echo $value['description'] ?>
                   </p>
                   <a href="#" class="primary-btn">Make reservation</a>
                 </div>
               </div>
             <?php endforeach; ?>
             <div class="single-post row">
               <p>
                 No destinations in the database
               </p>
             </div>
           <?php endif; ?>

      <nav class="blog-pagination justify-content-center d-flex">
        <a href="destinations.php" class="primary-btn">View More</a>
      </nav>
      </div>
        <div class="col-lg-4 sidebar-widgets">
          <div class="widget-wrap">
            <div class="single-sidebar-widget search-widget">
              <form class="search-form" action="#">
                  <input placeholder="Search Destinations" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search destinations'" >
                      <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
            <div class="single-sidebar-widget popular-post-widget">
              <h4 class="popular-title">Services</h4>
              <div class="popular-post-list">
                <?php for ($i=0; $i <1 ; $i++) {
                ?>
              <!-- the popular sites query -->
                <div class="single-post-list d-flex flex-row align-items-center">
                  <div class="thumb">
                    <img class="img-fluid" src="assets/img/blog/pp4.jpg" alt="">
                  </div>
                  <div class="details">
                    <a href="blog-single.html"><h6>Asteroids telescope</h6></a>
                    <p>02 Hours ago</p>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>

            <div class="single-sidebar-widget tag-cloud-widget">
              <h4 class="tagcloud-title">Quick navigate</h4>
              <ul>
                <?php
                  for ($i=0; $i < 2 ; $i++) {
                    ?>
                    <li><a href="#">Technology</a></li>
                  <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End post-content Area -->

  <!-- start footer Area -->
<?php include_once "./includes/footer.php" ?>
