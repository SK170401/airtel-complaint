<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "shubham");

if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$_SESSION['cmt'] = $_REQUEST['cmt'];
$_SESSION['fi'] = $_REQUEST['fi'];
$_SESSION['state'] = $_REQUEST['state'];
$_SESSION['pin'] = $_REQUEST['pin'];
$_SESSION['des'] = $_REQUEST['des'];


$cmt = $_REQUEST['cmt'];
$fi = $_REQUEST['fi'];
$state =  $_REQUEST['state'];
$pin = $_REQUEST['pin'];
$des = $_REQUEST['des'];

$sql = "INSERT INTO complaint (cmt, fi, state, pin, des) VALUES ('$cmt',
    '$fi','$state','$pin','$des')";

if(mysqli_query($conn, $sql)){
    echo "<h3>Complaint register successfully. </h3>";
}
else{
    echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<br>
<br>

<center>
    <a href="complaint.php">Go Back</a>
</center>
</body>
</html>