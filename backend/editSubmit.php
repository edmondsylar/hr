<?php
include_once "../functions/config.php";
$cur = new Config();
$option = $_GET['prop'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    switch($option){

        case 'service':
            $cur->update_service($_POST['id'], $_POST['name'], $_POST['desc']);
        break;


        case 'destination':
            $cur->update_destination($_POST['id'], $_POST['name'], $_POST['desc']);
        break;


        case 'guide':
            $cur->updae_guide($_POST['id'], $_POST['name'], $_POST['potfolio']);
        break;

        case 'gallery':
            $cur->update_gallery($_POST['id'], $_POST['name'], $_POST['desc']);
        break;

        default:
            echo "Wrong or undifined option submited";  
        break;

    }
}
  
 ?>
