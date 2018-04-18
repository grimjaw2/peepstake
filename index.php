<!DOCTYPE html>
<html lang="en">
<?php 
  if(isset($_REQUEST['error']))
{
    $err=$_REQUEST["error"];
    echo '<script language="javascript">';

    echo "alert('".$err."')";
    echo '</script>';


}
?>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Item</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">WELCOME TO MYSITE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login/SignUP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mycartoo.php">Cart</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
    <div class="row">
    <div class="col-lg-3">          
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              <?php       include  "db2.php";
                  $result=mysqli_query($con,"select * from items where item_id=1");
                  $arr=mysqli_fetch_assoc($result);
               echo "$arr[item_name]"; ?><br>
        
            </div>
            <div class="card-body">
            <img src="photo/s9+.jpeg" height="100%" width="100%"></img>
              <a href="add.php?id=1" class="btn btn-success">ADD TO CART</a>
            </div>
            <div class="card-footer">
             RS/- <?php include  "db2.php";
                  $result=mysqli_query($con,"select * from items where item_id=1");
                  $arr=mysqli_fetch_assoc($result);
              echo "$arr[item_price]";

              ?>
            </div>
          </div>
    </div>
    <div class="col-lg-3">          
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
               <?php       include  "db2.php";
                  $result=mysqli_query($con,"select * from items where item_id=2");
                  $arr=mysqli_fetch_assoc($result);
               echo "$arr[item_name]"; ?>
            </div>
            <div class="card-body">
            <img src="photo/pixel.jpeg" height="100%" width="100%"></img>
              <a href="add.php?id=2" class="btn btn-success">ADD TO CART</a>
            </div>
            <div class="card-footer">
              RS/- <?php include  "db2.php";
                  $result=mysqli_query($con,"select * from items where item_id=2");
                  $arr=mysqli_fetch_assoc($result);
              echo "$arr[item_price]";

              ?>
            </div>
       </div>
    </div>
    <div class="col-lg-3">          
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
               <?php       include  "db2.php";
                  $result=mysqli_query($con,"select * from items where item_id=3");
                  $arr=mysqli_fetch_assoc($result);
               echo "$arr[item_name]"; ?>
            </div>
            <div class="card-body">
            <img src="photo/samsung_note.jpeg" height="100%" width="100%"></img>
              <a href="add.php?id=3" class="btn btn-success">ADD TO CART</a>
            </div>
            <div class="card-footer">
              RS/- <?php include  "db2.php";
                  $result=mysqli_query($con,"select * from items where item_id=3");
                  $arr=mysqli_fetch_assoc($result);
              echo "$arr[item_price]";

              ?>
          </div>
    </div>
    </div>
    <div class="col-lg-3">          
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
               <?php       include  "db2.php";
                  $result=mysqli_query($con,"select * from items where item_id=4");
                  $arr=mysqli_fetch_assoc($result);
               echo "$arr[item_name]"; ?>
            </div>
            <div class="card-body">
            <img src="photo/honor.jpeg" height="100%" width="100%"></img>
              <a href="add.php?id=4" class="btn btn-success">ADD TO CART</a>
            </div>
            <div class="card-footer">
              RS/- <?php include  "db2.php";
                  $result=mysqli_query($con,"select * from items where item_id=4");
                  $arr=mysqli_fetch_assoc($result);
              echo "$arr[item_price]";

              ?>
          </div>
    </div>
    </div>
</div>
          <!-- /.card -->
         
        

</div>
  
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; peepstake 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
