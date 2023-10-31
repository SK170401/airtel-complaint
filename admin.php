<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<a href = "home.php">Home</a>
<h1> hello </h1>
<form action="adminlog.php" method= "POST">
<?php
session_start();
$conn = mysqli_connect('localhost','root','','shubham');
if($_SESSION['username']){
  echo "Welcome   ".$_SESSION['username'];
  ?>
  <table>
    <tr>
      <th>ID</th>
      <th>Complaint</th>
      <th>Facing Issue</th>
      <th>State</th>
      <th>Pin code</th>
      <th>Description</th>
    </tr>
    
<?php
  $sql = "select * from complaint where status ='In-Progress'";
  $res = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($res))
  {
    echo "<tr><td><input type ='radio' name = 'cmpl' value =".$row['id'].">".$row['id']."</td>";
    echo "<td>".$row['cmt']."</td>";
    echo "<td>".$row['fi']."</td><";
    echo "<td>".$row['state']."</td>";
    echo "<td>".$row['pin']."</td>";
    echo "<td>".$row['des']."</td></tr>";
  }
  echo "</table><input type ='submit' value='Resolve'/></form>";
}
?>
</body>
</html>