<?php 
  session_start();

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php" target="_blank">Horizon Backend</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php"> Home </span></a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="dest.php"> Destinations </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php"> services </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="gellery.php"> Gallery </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="guides.php"> Guides </a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    &nbsp;  <a href="logout.php" class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</a>
  </div>
</nav>
<br>
