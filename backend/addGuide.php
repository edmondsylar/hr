<?php

  include_once "../functions/config.php";
  $cur = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $imagename = addslashes(file_get_contents($_FILES['image']['tmp_name']));
      $name = $_POST['name'];
      $potfolio = $_POST['potfolio'];

      // echo $name . ' ' . $potfolio.' There is an image here '. $imagename;
      $cur->create_guide($name, $potfolio, $imagename);

    }
 ?>
