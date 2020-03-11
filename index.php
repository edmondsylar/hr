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
            horizon birdings
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
<div class="" style="margin: 10px;">

</div>
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
                     <p class="date col-lg-12 col-md-12 col-6"><a href="bookings.php?destination=<?php echo $value['id'] ?>">Make reseravtion</a> <span class="lnr lnr-calendar-full"></span></p>
                   </div>
                 </div>
                 <div class="col-lg-9 col-md-9 ">
                   <div class="feature-img">
                     <img class="img-fluid" src="data:image/jpg;charset=utf8;base64,<?php echo $image; ?>" style="width: 100%; height: 270px" alt="">
                   </div>
                   <a class="posts-title" href="bookings.php?destination=<?php echo $value['id'] ?>"><h3><?php echo $value['name'] ?></h3></a>
                   <p class="excert">
                     <?php echo $value['description'] ?>
                   </p>
                   <a href="bookings.php?destination=<?php echo $value['id'] ?>" class="primary-btn">Make reservation</a>
                 </div>
               </div>
             <?php endforeach; ?>
           <?php endif; ?>

      <nav class="blog-pagination justify-content-center d-flex">
        <a href="destinations.php" class="primary-btn">View More</a>
      </nav>
      </div>
        <div class="col-lg-4 sidebar-widgets">
          <div class="widget-wrap">
            <div class="single-sidebar-widget search-widget">
              <form class="search-form" action="destinations.php">
                  <input placeholder="Search Destinations" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search destinations'" >
                      <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>

            <div class="single-sidebar-widget tag-cloud-widget">
              <h4 class="tagcloud-title">Services</h4>
              <ul>
                <?php
                $services = $cur->get_service_home();
                // $destinations = $cur->get_destinations();
                ?>
                  <?php if (!empty($services)): ?>
                    <?php foreach ($services as $key => $value): ?>
                    <li><?php echo $value['name'] ?></li>
                  <?php endforeach; ?>
                <?php endif; ?>
              </ul>
            </div>

            <div class="single-sidebar-widget tag-cloud-widget">
              <h4 class="tagcloud-title">Important Birding Areas</h4>
              <ul>
                <?php
                // $services = $cur->get_service();
                $destinations = $cur->get_destinations();
                ?>
                  <?php if (!empty($destinations)): ?>
                    <?php foreach ($destinations as $key => $value): ?>
                    <li><a href="iba.php?park=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></li>
                  <?php endforeach; ?>
                <?php endif; ?>
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
