<?php
$id=$_REQUEST["id"];

include "db2.php";

$result=mysqli_query($con,"select * from items where item_id=".$id.";");
$arr=mysqli_fetch_assoc($result);

$name=$arr["item_name"];
$price=$arr["item_price"];


mysqli_query($con,"insert into mycart values(".$id.",'".$name."',".$price.");");

//file_put_contents("array_name.json",json_encode($name1));
//file_put_contents("array_price.json",json_encode($price1));
//file_put_contents("array_id.json",json_encode($id1));



header("location:index.php?error=ITEM ADDED SUCESSFULLY");


?>