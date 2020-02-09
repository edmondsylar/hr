<?php
include_once "../functions/config.php";
$cur = new Config();

  if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // echo "This is working";

    $imagename = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $title = $_POST['name'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];

    // echo ($title . $desc . $address . $imagename);
    $cur->create_service($title, $desc, $price, $imagename);

    // $imagename;
  }else{
    echo "Somthing else is wrong";

  }


 ?>
