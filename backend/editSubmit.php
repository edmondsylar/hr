<?php
include_once "../functions/config.php";
$cur = new Config();
$option = $_GET['prop'];

switch($option){

    case 'service':
        echo "Updating a service";
    break;


    case 'destination':
        echo "Updating a destination";
    break;


    case 'guide':
        echo "Updating a guide";
    break;

    case 'gallery':
        echo "Updating A gallery Object";
    break;

    default:
        echo "Wrong or undifined option submited";  
    break;


}
  
 ?>
