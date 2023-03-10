<?php
include '../_dbconnect.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $updateQuery = "UPDATE activity SET status = 1, accept = 1 WHERE id ='$id'";
    $deletSql = mysqli_query($conn, $updateQuery);

    if($deletSql){
        header('location: activityNotification.php');
    }
    else{
        echo "Error";
    }
}
else{
    echo "error";
}
?>