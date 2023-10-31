<?php
session_start();
$con = new mysqli("localhost", "root", "", "shubham");

$username = $_POST['username'];
$password =$_POST['password'];
$sql = "select uid from user where username = '$username' and password = '$password'";
$res = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($res))
    $_SESSION['uid'] = $row['uid']; 
if($con->connect_error){
die("failed to connect : ".$con->connect_error);

}else{

    $stmt = $con->prepare("select * from user where username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) {
       $data = $stmt_result->fetch_assoc();
       if($data['password'] === $password){
           $_SESSION['username'] = $username;
           header('Location:complaint.php');
       }else{
           echo "<h2>Invalid username or Password</h2>";
       }
    }else{

        echo "<h2>Invalid username or Password</h2>";
    }
}

?>
