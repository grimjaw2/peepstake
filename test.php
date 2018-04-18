<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <div class="container">
    <div class="row">
                <div class="col-lg-8">       
                <?php include  "db2.php";
                  $result=mysqli_query($con,"select * from cart");
                 while($arr=mysqli_fetch_assoc($result)):
                 ?>
                 <li>
                  <?php echo $arr[item_name];
                  	
                   ?>     
                 </li>
                 </div>
                
                <div class="col-lg-4">
                  <?php include  "db2.php";
                  $result=mysqli_query($con,"select * from cart");
                 while($arr=mysqli_fetch_assoc($result)):
                 ?>
                 <li>
                  Rs/- <?php echo $arr[item_price];  end while;?>     
                 </li>
                </div>
</div>
</div>
</body>
</html>