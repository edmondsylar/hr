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

      function register($names, $email, $password){
        $pass = md5($password);
        $sqlQ = "INSERT INTO users(`Names`, `email`, `password`) VALUES ('$name', '$email', '$pass')";
        $res = mysqli_query($this->conn, $sqlQ);
        if($res){
          header("Location: ../backend/");

        }else{
          echo mysqli_error($this->conn);
        }

      }

      function login($user, $password){
        $pass = md5($password);
        $login = "SELECT * FROM users WHERE email='$user' AND password='$pass'";
        $res = mysqli_fetch_assoc(mysqli_query($this->conn, $login));

        if($res['id']){
            session_start();
              $_SESSION["loggedin"] = true;
              $_SESSION["email"] = $res['email'];
              // $_SESSION["name"] = $res['fullname'];

              // echo $_SESSION['name'];
             header("Location: ../backend/home.php");

          }

      }

      function get_destinations(){
        $query = "SELECT * FROM destinations";
        $results = mysqli_query($this->conn, $query);

        return $results;
      }

      function get_service(){
        $query = "SELECT * FROM services";
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

      function create_service($t, $d, $p, $i){
        $qu = "INSERT INTO services(`name`, `description`, `price`, `image`) VALUES('$t', '$d', '$p', '$i')";
        if(mysqli_query($this->conn, $qu)){
          header("Location: ../backend/services.php?msg=new service created");
        }else{
          echo mysqli_error($this->conn);
        }
      }

      function get_dest($id){
        $q= "SELECT * FROM destinations WHERE id='$id'";
        $results = mysqli_query($this->conn, $q);

        return $results;

      }


      function testify($name, $msg){
        $qu = "INSERT INTO testimony(`name`, `message`) VALUES ('$name', '$msg')";
        if(mysqli_query($this->conn, $qu)){
          header("Location: ../index.php");
        }else{
          echo "System Currently down please try again letter";
        }

      }

      function get_testy(){
        $q= "SELECT * FROM testimony";
        $results = mysqli_query($this->conn, $q);

        return $results;
      }

      function get_gellery(){
        $q= "SELECT * FROM gallery";
        $results = mysqli_query($this->conn, $q);

        return $results;
      }


      function add_gallery($name, $desc, $image){
        $qu = "INSERT INTO gallery(`name`, `description`, `image`) VALUES('$name', '$desc', '$image')";
        if(mysqli_query($this->conn, $qu)){
          header("Location: ../backend/gellery.php");
        }else{
          echo mysqli_error($this->conn);
        }
      }

      function create_guide($name, $pot, $image){
        $sq = "INSERT INTO guides(`name`, `potfolio`, `image`) VALUES('$name', '$pot', '$image')";
        if(mysqli_query($this->conn, $sq)){
          header("Location: ../backend/guides.php");
        }else{
          echo mysqli_error($this->conn);
        }
      }

      function get_guides(){
        $s = 'SELECT * FROM guides';
        $results = mysqli_query($this->conn, $s);

        return $results;
      }
// end fo function here
  }
 ?>
