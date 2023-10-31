<?php

    $conn = mysqli_connect('localhost','root','','shubham');
    $cid = $_POST['cmpl'];

    $sql = "update complaint set status = 'Resolved' where id = $cid";
    $res = mysqli_query($conn, $sql);
    echo $cid;

    if($res){
        header('Location:http://localhost/php/admin.php');
    }
    else{
//        header('Location:http://localhost/php/admin.php');
    }

?>