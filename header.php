<html>
<head>
<meta name="converter" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<title>Analysed</title>
</head>
<body style="background-color:powderblue"  >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #0000FF">
  <a class="navbar-brand" href="#">Analysed</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
  </div>
  <?php
      if(isset($_SESSION['un']))
      {
      ?>
       <div style="float:right;">
        <p style="color:#fff;" ><?php echo $_SESSION['un'] ;?></p>
        <a href="logout.php"><button class="btn btn-outline-success " >Logout</button></a>
        <a href="admindash.php"><button class="btn btn-outline-success " >Dashboard</button></a>

        </div>
        <?php
      }
      else
      {
        ?>
       <div style="float:right;">
         <a href="login.php"><button class="btn btn-outline-success " >Login</button></a>
         <a href="signup.php"><button  class="btn btn-outline-success " >signup</button></a>
       </div>
       <?php
     }
        ?>
</nav>
</body>
</html>
