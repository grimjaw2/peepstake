<?php
$id=$_REQUEST["id"];
include  "db2.php";

$result=mysqli_query($con,"select * from items where item_id=".$id."");
$arr=mysqli_fetch_assoc($result);

$img=$arr[item_pic];


header("content-type: image/jpeg");
echo $img;
?>