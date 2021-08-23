<?php
include('db/connection.php');
$id=$_GET['del'];
$query=mysqli_query($conn,"delete from category where id='$id'");
if($query) {
    echo "<script> alert('Category deleted!')</script>";
    echo "<script>window.location='http://localhost:8081/Project-visionedu/category.php';</script>";
}else {
    echo "Please Try Again";
}


?>