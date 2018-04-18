<!DOCTYPE html>
<html lang="en">
<style type="text/css">
  .c1{
    width: 100%;
    height: 500px;
    background-color: white;
  }

</style>
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
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login/SignUP</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="mycartoo.php">Cart</a>
              <span class="sr-only">(current)</span>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

    <div class="row">
                <div class="col-lg-8">
                <div class="c1">
                <ol>
                
                <?php include  "db2.php";
                  $result=mysqli_query($con,"select * from mycart;");
                 while($arr=mysqli_fetch_assoc($result)):
                 ?>
                 <li>
                  <?php echo $arr["name"]; ?>     
                 </li>
               <?php endwhile; ?>
                TOTAL
               </ol>
                 </div>
                  </div>       
                <div class="col-lg-4">
                <div class="c1">
                
                  <?php include  "db2.php";
                    $sum=0;
                  $result=mysqli_query($con,"select * from mycart;");
                 while($arr=mysqli_fetch_assoc($result)):
                 ?>
                  Rs/- <?php echo $arr["price"]; 
                        $sum=$sum+$arr["price"];
                        ?>     
                   <br>     
               <?php endwhile; 
                echo $sum;
               ?> rupees

                </div>

                </div>

</div>
<center>
                <a href="shipping.php" class="btn btn-success">PROCEED TO SHIPPING</a></center>
</div>


    
          <!-- /.card -->
  
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