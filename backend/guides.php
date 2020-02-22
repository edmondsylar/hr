<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Horizon Backend </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<?php include_once "header.php" ?>

    <div class="container">
      <div class="card">
        <div class="card-header">
          Create Tour Guide.
        </div>
        <div class="card-body">
          <form action="addGuide.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Guid Name </label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter service Name" required>
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Sample Potfolio or Profile.</label>
              <textarea class="form-control" name="potfolio" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>

            <div class="custom-file form-group">
              <input name="image" type="file" class="custom-file-input" aria-required="true" required>
              <label class="custom-file-label" for="validatedCustomFile">Upload Profile Picture</label>
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary">Create Guide</button>
          </form>
        </div>
      </div>
    </div>
