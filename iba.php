<?php
  include_once "includes/head.php";
  // $cur->login();

  if(isset($_GET['park'])){
    // $park = $_GET['park'];
    $pack = $cur->get_dest($_GET['park']);
    $area = $bj = mysqli_fetch_assoc($pack);
    $image = base64_encode($area['image']);

  }else{
    header('Location: index.php');
  }
 ?>

 <body>
 <?php include_once "includes/header.php" ?>
 <section class="relative" style="background: url('data:image/jpg;charset=utf8;base64,<?php echo $image; ?>');">
   <div class="overlay overlay-bg"></div>
   <div class="container">
     <div class="row d-flex align-items-center justify-content-center">
       <div class="about-content col-lg-12">
         <h1 class="text-white">
           <?php echo $area['name'] ?>
         </h1>
         <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Important Birding Areas</a></p>
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
           <h3 class="text-uppercase">Important Birding Area</h3>
           <h1><?php echo $area['name'] ?></h1>
         	 <p>
             <?php echo $area['description'] ?>
           </p>
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
