<?php include_once "includes/head.php";

if(!isset($_GET['destination'])){
  header("Location: index.php");
}
$pack = $cur->get_dest($_GET['destination']);
$package = $bj = mysqli_fetch_assoc($pack);
$image = base64_encode($package['image']);

$test = $cur->get_testy();

?>

<body>
<?php include_once "includes/header.php" ?>

<section class="relative about-banner">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Book Your Trip
        </h1>
        <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> bookings</a> <span class="lnr lnr-arrow-right"></span>  <a href="#"> <?php echo $package['name'] ?></a></p>
      </div>
    </div>
  </div>
</section>

<section class="insurence-one-area section-gap">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 insurence-left">
          <img class="img-fluid img-one" src="data:image/jpg;charset=utf8;base64,<?php echo $image; ?>" alt="">
        </div>
        <div class="col-lg-6 insurence-right">
          <h6 class="text-uppercase">Booking Details</h6>
          <h1><?php echo $package['name'] ?></h1>
        	<form class="form-area contact-form text-right z-depth-1" action="destinations.php" method="post">
            <div class="row">
              <div class="col-lg-8 form-group">
                <input name="checkin" placeholder="CheckIn date" class="common-input mb-20 form-control" required="" type="text">

                <input name="checkout" placeholder="CheckOut date" class="common-input mb-20 form-control" required="" type="text">

                <span style="float:left;" ><input type="checkbox"  name="kids" value="Got kids"> are you having kids</span>

                <span style="float:left;" ><input type="checkbox"  name="hotel" value="Got kids"> Make Hotel reservations too?</span>

                <select class="common-input mb-20 form-control" name="bfor">
                  <option disabled>Booking for?</option>
                  <option selected value="1">1 person</option>
                  <option value="2">2 people</option>
                  <option value="3">3 people</option>
                  <option value="4">4 people</option>
                  <option value="" disabled>we have a max of only 4</option>
                </select>
              <input type="submit" class="genric-btn primary" value="Complete Booking" style="float: right;">
          </form>
        </div>
      </div>
    </div>
  </section>


  <section class="testimonial-area section-gap">
      <div class="container">
          <div class="row d-flex justify-content-center">
              <div class="menu-content pb-70 col-lg-8">
                  <div class="title text-center">
                      <h1 class="mb-10">Testimonials</h1>
                      <!-- <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p> -->
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="active-testimonial">
                <?php if (!empty($test)): ?>
                  <?php foreach ($test as $key => $value): ?>
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="http://getdrawings.com/free-icon/anonymous-icon-png-52.png" style="width: 50px; height: 50px;" alt="">
                        </div>
                        <div class="desc">
                            <p>
                                <?php echo $value['message'] ?>
                            </p>
                            <h4><?php echo $value['name'] ?></h4>
                        </div>
                    </div>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
          </div>

          <form action="backend/testimony.php" method="POST" class="subscription relative">
            <h2>Leave a Comment</h2>
            <div class="col-lg-6 form-group">
              <input name="name" placeholder="Enter Name" class="common-input mb-20 form-control" required="" type="text">
              <textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
              <div class="mt-10 info"></div>
              <button class="genric-btn primary" style="float: right;">Send Message</button>
            </div>
            <div class="mt-10 info"></div>
          </form>
        </div>
  </section>

<?php include_once "./includes/footer.php" ?>
