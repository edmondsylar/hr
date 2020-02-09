<?php
include_once "../functions/config.php";
$cur = new Config();

  if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // echo "This is working";
    $name = $_POST['name'];
    $msg = $_POST['message'];

    // echo ($name . $msg);
    $cur->testify($name, $msg);

    // $imagename;
  }else{
    echo "Somthing else is wrong";

  }


 ?>
