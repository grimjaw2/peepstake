<!DOCTYPE html>
<html lang="en">
<style type="text/css">
  .c1{
    width: 100%;
    height: 500px;
    background-color: white;
  }

</style>


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
              <a class="nav-link" href="mycartoo.php">BACK TO CART</a>
              <span class="sr-only">(current)</span>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
<div class="container">
  <div class="c1">
    <center><h1>SHIPPING DETAILS</h1></center>
    <form action="add_details.php" method="get">
   
      <br>
    <b>
    <input type="text" id="1" name="name" placeholder="Name" size="45mm" style="height:30px;"></input>
    <br><br>
    <input type="text" id="2" name="addr1" placeholder="Address1" size="45mm" style="height:30px;"></input>
    <br/>
    <br/>
  
    <input type="text" id="3" name="addr2" placeholder="Address2" size="45mm" style="height:30px;"></input>
    <br/>
    <br/>
    <input type="text" id="3" name="street" placeholder="Street" size="45mm" style="height:30px;"></input>
    <br/>
    <br/>
    <input type="text" id="3" name="state" placeholder="State" size="45mm" style="height:30px;"></input>
    <br/>
    <br/>
    
    <input type="text" id="5" name="country" placeholder="Country" size="45mm" style="height:30px;" ></input>
    </b>
    <br/>
    <br/>
    <input type="text" id="3" name="cell" placeholder="CELL NUMBER" size="45mm" style="height:30px;"></input>
    <br/>
    <br/>

                <button class="btn btn-success">PROCEED TO PAYMENT</button></center>
    </div>
    </form>
  </div>


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