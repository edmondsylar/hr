
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Horizon Backend </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php
    include_once "../functions/config.php";
    $cur = new Config();
    $id = $_GET['id'];

      switch (($_GET['object'])) {
        case 'service':
          // servoces...
          break;
        case 'destination':
          $data = $cur->get_dest($id);

          break;

        case 'gallery':
          // gallery
          break;
        case 'guides':
          // guides....
          break;


        default:
          // code...
          break;
      }
     ?>

<?php include_once "header.php" ?>

<?php switch ($_GET['object']) {
  case 'destination':
    $get = $cur->get_dest($_GET['id']);
    $object = mysqli_fetch_assoc($get);
?>
    <div class="container">
      <div class="card">
        <div class="card-header">
          Edit Destination
        </div>
        <div class="card-body">
          <form action="editSubmit.php?prop=destination" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Destination</label>
              <input type="hidden" value="<?php echo $object['id']; ?>" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Destination Name" required>

              <input type="text" value="<?php echo $object['name']; ?>" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Destination Name" required>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Price</label>
              <input type="text" class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter starting Price" required value="<?php echo $object['price']; ?>">
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Enter Desniation Description</label>
              <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3" required><?php echo $object['description'];?> </textarea>
            </div>

            <div class="custom-file form-group">
              <input name="image" type="file" class="custom-file-input" aria-required="true">
              <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary">Add Destination</button>
          </form>
        </div>
      </div>
    </div>
  <?php break; ?>


  <?php 
  case 'service': 
    $get = $cur->get_ser($_GET['id']);
    ?>
    <div class="container">
      <div class="card">
        <div class="card-header">
          Edit Service <?php if(isset($_GET['msg'])){ echo $_GET['msg']; } ?>
        </div>
        <div class="card-body">
          <form action="editSubmit.php?prop=service" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Service Name </label>
              <input type="hidden" value="<?php echo $get['id'] ?>" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter service Name" required>

              <input type="text" value="<?php echo $get['name'] ?>" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter service Name" required>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Price</label>
              <input type="text" value="<?php echo $get['price'] ?>" class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Price" required>
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Enter Service Description</label>
              <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3" required><?php echo $get['description'] ?></textarea>
            </div>

            <div class="custom-file form-group">
              <input name="image" type="file" class="custom-file-input" aria-required="true">
              <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary">Add Service</button>
          </form>
        </div>
      </div>
    </div>
  <?php break; ?>



  <?php case 'gallery': 
    $obj = $cur->get_gallery_objcet($_GET['id']);
  ?>
    <div class="container">
      <div class="card">
        <div class="card-header">
          Edit Bird Profile
        </div>
        <div class="card-body">
          <form action="editSubmit.php?prop=gallery" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Bird Name </label>
              <input type="hidden" class="form-control" value="<?php echo $obj['id'];?>" name="id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter service Name" required>

              <input type="text" class="form-control" value="<?php echo $obj['name'];?>" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter service Name" required>
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Enter Service Description</label>
              <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3" required><?php echo $obj['description']?></textarea>
            </div>

            <div class="custom-file form-group">
              <input name="image" type="file" class="custom-file-input" aria-required="true">
              <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary">Add Service</button>
          </form>
        </div>
      </div>
    </div>

  <?php break; ?>


  <?php 
    case 'guides':
    $guide = $cur->get_guide($_GET['id']);

  ?>
    <div class="container">
      <div class="card">
        <div class="card-header">
          Edit Tour Guide Information
        </div>
        <div class="card-body">
          <form action="editSubmit.php?prop=guide" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Guid Name </label>
              <input type="text" class="form-control" value="<?php echo $guide['name']?>" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter service Name" required>

              <input type="hidden" class="form-control" value="<?php echo $guide['id']?>" name="id" aria-describedby="emailHelp" placeholder="Enter service Name" required>
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Sample Potfolio or Profile.</label>
              <textarea class="form-control" name="potfolio" id="exampleFormControlTextarea1" rows="3" required><?php echo $guide['potfolio']?></textarea>
            </div>

            <div class="custom-file form-group">
              <input name="image" type="file" class="custom-file-input" aria-required="true">
              <label class="custom-file-label" for="validatedCustomFile">Upload Profile Picture</label>
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary">Create Guide</button>
          </form>
        </div>
      </div>
    </div>
  <?php break; ?>

  <?php default: ?>
    Unrecognised request please Are sure you belong with is son
  <?php break; ?>


<?php } ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
