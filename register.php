<?php
$showAlert = false;
$showError = false;
if(isset($_POST['submit'])){
    include 'dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $addr = $_POST["addr"];    
    $city = $_POST["city"];    
    $state = $_POST["state"];    
    $zip = $_POST["zip"];    

    $sql = "INSERT INTO `user` ( `username`, `password`, `addr`, `city`, `state`, `zip`) VALUES ('$username', '$password', '$addr', '$city', '$state', '$zip')"; 
    $result = mysqli_query($conn, $sql);
    if ($result){
        $showAlert = true;
    }
    }
  

?>

    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
        </button>
        </div> ';
        
    
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
        </button>
    </div> ';
    }
    ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP login system!</title>
    <style>
        .link {
            position: absolute;
            right: 40px;
            color: white;

 }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Welcome</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
      
        <li class="nav-item">
          <a class="link" href="login.php">Log In </a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"></a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>

<div class="container mt-4">
<h3>Please Sign Up Here:</h3>
<hr>
<form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Username</label>
      <input type="text" name="username" class="form-control"  id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" name ="password" class="form-control"  id="inputPassword4" placeholder="Password">
    </div>
  </div>
 
  <div class="form-group">
    <label for="inputAddress2">Address </label>
    <input type="text" name="addr" class="form-control" id="inputAddress2"  placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" name="city" class="form-control" id="inputCity"  placeholder="Enter City">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <input type="text" name="state" class="form-control" id="inputState"  placeholder="Enter State">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="number" name="zip" class="form-control" id="inputZip"  placeholder="Enter Pin-Code">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
     
      
    </div>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
  
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    </body>
</html>