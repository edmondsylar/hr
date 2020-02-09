<?php
  /**
   *
   */
  class Config
  {

    public $conn;

      function __construct()
      {
        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'dev');
        define('DB_PASSWORD', 'password');
        define('DB_NAME', 'horizon');

        $this->conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if($this->conn === false){
          echo "App not loving your database setup";
        }
      }

      function get_destinations(){
        $query = "SELECT * FROM destinations";
        $results = mysqli_query($this->conn, $query);

        return $results;
      }

      function create_destination($t, $d, $p, $i){
        $qu = "INSERT INTO destinations(`name`, `description`, `price`, `image`) VALUES('$t', '$d', '$p', '$i')";
        if(mysqli_query($this->conn, $qu)){
          header("Location: ../backend/index.php");
        }else{
          echo mysqli_error($this->conn);
        }

      }
// end fo function here
  }
 ?>
