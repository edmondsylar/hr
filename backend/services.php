
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Horizon Backend </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <?php include_once "header.php"; 
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
          header("Location: index.php");
          }
    ?>

    <div class="container">
      <div class="card">
        <div class="card-header">
          Create Service <?php if(isset($_GET['msg'])){ echo $_GET['msg']; } ?>
        </div>
        <div class="card-body">
          <form action="service.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Service Name </label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter service Name" required>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Price</label>
              <input type="text" class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Price" required>
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Enter Service Description</label>
              <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>

            <div class="custom-file form-group">
              <input name="image" type="file" class="custom-file-input" aria-required="true" required>
              <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary">Add Service</button>
          </form>
        </div>
      </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
