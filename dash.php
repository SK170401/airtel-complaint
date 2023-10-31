<?php
    session_start();

    $conn = mysqli_connect("localhost", "root", "", "shubham");

if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$uid = $_SESSION['uid'];
$sql = "select * from complaint, user where uid = $uid";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{
    echo "<br/>Complaint : ".$row['cmt'];
    echo "<br/>Status : ".$row['status'];
}
?>