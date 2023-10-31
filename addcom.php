<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
 

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
          <a class="nav-link active" aria-current="page" href="complaint.php">Back</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link disabled"></a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>
<br>
    <center>
    <h2> Register Complaint</h2>
    </center>
<br> <br>
<form action="addcom1.php" method="POST">
<center>

<div>
    <label>
    <b>Complaint Type </b>
   
   &nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" name="cmt" placeholder="eg. Coverage issue"> <br><br>
    <label>
    <b> Facing Issue(indoor,outdoor) </b>  <input type="text" name="fi"> 
    </label>
<br><br>
    <label>
    <b> State </b>
     <input type="text" name="state">
    </label>
<br> <br>    <label>
   <b> Pin-Code </b>
    <input type="number" name="pin">

    </label>

    <br><br>
   <b> Describe your issue here in brief: </b>
   <br>
    <textarea rows="5" cols="50"    name="des">
    </textarea>
    <br> <br>

    <input type="submit" value="Submit" >

</div>
</center>
</form>
</body>
</html>