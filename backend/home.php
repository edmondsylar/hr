
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
        include_once "../functions/config.php";
        $cur = new Config();
        $intel = $cur->edit_home('admin');

        // fetched info from the database.
        $services = $intel['service'];
        $destinations = $intel['destinations'];
        $gallery = $intel['gallery'];
        $guides = $intel['guides'];
    ?>

    <div class="container">
      <div class="card">
        <div class="card-header">
          Manage Information
        </div>
        <div class="card-body">
          
            <h4 class="tagcloud-title card-header">Services</h4>
              <ul>
                  <?php if (!empty($services)): ?>
                    <?php foreach ($services as $key => $value): ?>
                    <li><?php echo $value['name'] ?><code><small> <a href="edits.php?id=<?php echo $value['id'] ?>&object=service">edit</a></small></code></li>
                  <?php endforeach; ?>
                <?php endif; ?>
              </ul>

              <h4 class="tagcloud-title card-header">Destination</h4>
              <ul>
                  <?php if (!empty($destinations)): ?>
                    <?php foreach ($destinations as $key => $value): ?>
                      <li><?php echo $value['name'] ?><code><small> <a href="edits.php?id=<?php echo $value['id'] ?>&object=destination">edit</a></small></code></li>
                  <?php endforeach; ?>
                <?php endif; ?>
              </ul>

              <h4 class="tagcloud-title card-header">Gallery</h4>
              <ul>
                  <?php if (!empty($gallery)): ?>
                    <?php foreach ($gallery as $key => $value): ?>
                      <li><?php echo $value['name'] ?><code><small> <a href="edits.php?id=<?php echo $value['id'] ?>&object=gallery">edit</a></small></code></li>
                  <?php endforeach; ?>
                <?php endif; ?>
              </ul>
              
              <h4 class="tagcloud-title card-header">Guides</h4>
              <ul>
                  <?php if (!empty($guides)): ?>
                    <?php foreach ($guides as $key => $value): ?>
                      <li><?php echo $value['name'] ?><code><small> <a href="edits.php?id=<?php echo $value['id'] ?>&object=guides">edit</a></small></code></li>
                  <?php endforeach; ?>
                <?php endif; ?>
              </ul>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
