<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style> 
 
        .ab{
            position: absolute;
            right: 100px;

        }
         .link1 {
            position: absolute;
            right: 70px;
            color: white;

 }
 .link {
            position: absolute;
            right: 10px;
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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <div class="ab">
        <li class="nav-item">
          <a class="link1" href="login.php">Login</a>
        </li> 
        <li class="nav-item">
          <a class="link" href="register.php">SignUp </a>
        </li> </div>
        <li class="nav-item">
          <a class="nav-link disabled"></a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>
<br>


<div> <center>
<h1 class="wlc"> Welcome To Complaint Managment System </h1> </center>
</div>
<br>
<center>
<img src="cmpl.jpg"> </center> 
   <!-- <?php require 'partials/_nav.php' ?> -->

  </body>
</html>