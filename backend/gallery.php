<?php
include_once "../functions/config.php";
$cur = new Config();

  if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // echo "This is working";

    $imagename = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $name = $_POST['name'];
    $desc = $_POST['desc'];

    // echo ($title . $desc . $address . $imagename);
    $cur->add_gallery($name, $desc, $imagename);

    // $imagename;
  }else{
    echo "Somthing else is wrong";

  }


 ?>
