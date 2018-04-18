<?php

$name=$_REQUEST["name"];
$addr1=$_REQUEST["addr1"];
$addr2=$_REQUEST["addr2"];
$street=$_REQUEST["street"];
$state=$_REQUEST["state"];
$country=$_REQUEST["country"];
$cell=$_REQUEST["cell"];

if($name=="" || $addr1=="" || $addr2=="" || $street=="" || $state=="" ||$country=="" || $cell=="")
{
	header("location:shipping.php?error=FILL ALL THE BLANKS");
}
else
{


include "db2.php";
$result=mysqli_query($con,"select * from mycart;");
while($arr=mysqli_fetch_assoc($result))
{


	mysqli_query($con,"insert into cart values
		(".$arr["id"].",'".$arr["name"]."',".$arr["price"].",'".$name."','".$addr1."','".$addr2."','".$street."','".$state."','".$country."',".$cell.");");
}


mysqli_query($con,"delete from mycart;");


header("location:index.php?error=successfully done");
}
?>