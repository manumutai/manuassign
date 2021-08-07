<?php
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['EMPID'])) {

?>
     <!DOCTYPE html>
     <html>

     <head>
          <title>HOME</title>
          <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
          <link rel="stylesheet" type="text/css" href="css/style.css">
          <script src="js/validfood.js"></script>
          <style>
               .container-fluid1 {
                    height: 80px;
                    line-height: 80px;
                    background: #fff;
                    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.25);
                    margin-bottom: 30px;
               }

               .container-fluid1 .logo {
                    line-height: 80px;
                    color: rgb(104, 171, 197);
                    font-size: 32px;
                    font-weight: 800;
                    text-transform: uppercase;
                    float: left;
                    -webkit-transition: all 0.3s ease 0s;
                    -moz-transition: all 0.3s ease 0s;
                    -o-transition: all 0.3s ease 0s;
                    transition: all 0.3s ease 0s;
               }

               .container-fluid1 .logo em {
                    font-style: normal;
                    color: #ed563b;
                    font-weight: 900;
               }

               table {
                    margin: 0 auto;
                    font-size: large;
                    border: 1px solid black;
               }

               h1,
               h2 {
                    text-align: center;
                    color: black;
                    font-size: xx-large;
                    font-family: ' Calibri';
               }

               td {
                    background-color: #E4F5D4;
                    border: 1px solid black;
               }

               th,
               td {
                    font-weight: bold;
                    border: 1px solid black;
                    padding: 10px;
                    text-align: center;
               }

               td {
                    font-weight: lighter;
               }

               .crd {
                    /* Add shadows to create the "card" effect */
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                    transition: all 0.3s ease;
                    padding: 5px;
                    width: calc(100% / 4);
                    margin: 10px;

               }



               .crd:hover {
                    transform: scale(1.2);
               }

               /* On mouse-over, add a deeper shadow */
               .crd:hover {
                    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
               }

               /* Add some padding inside the card container */
               .card-body {
                    padding: 2px 16px;
               }

               .price {
                    color: grey;
                    font-size: 22px;
                    text-align: center;
               }

               .gallery {
                    display: flex;
                    flex-wrap: wrap;
               }
          </style>
     </head>

     <body>
          <div class="container-fluid container-fluid1">
               <div class="row">
                    <div class="col-md-12">
                         <div class="col-md-6"><a href="#" class="logo">FAST<em>FOODS</em></a></div>
                    </div>
               </div>

          </div>


          <?php

          // Username is root
          $user = 'root';
          $password = '';

          // Database name is gfg
          $database = 'manu';

          // Server is localhost with
          // port number 3308
          $servername = 'localhost';
          $mysqli = new mysqli(
               $servername,
               $user,
               $password,
               $database
          );

          // Checking for connections
          if ($mysqli->connect_error) {
               die('Connect Error (' .
                    $mysqli->connect_errno . ') ' .
                    $mysqli->connect_error);
          }

          // SQL query to select data from database
          $sql = "SELECT * FROM menu ORDER BY ID DESC ";
          $result = $mysqli->query($sql);

          ?>
          <div class="container-fluid">
               <div class="row">
                    <div class="col-md-3 ">
                         <div class="card ">
                              <img src="images.jpg" class="img-4" alt="John" style="width:100%;height: 200px;">
                              <div class="row" style="margin-top:10px; padding:3px;margin-Left:10px;">
                                   <div class="col-md-6" style="margin-top:10px;">
                                        <p><b><?php echo $_SESSION['NAME']; ?></b></p>
                                   </div>
                                   <div class=" col-md-6" style="margin-Left:0px;"> <a href="logout.php" class="btn btn-primary">Logout</a></div>
                              </div>





                              <form name="myForm" onsubmit="return validateForm()" method="post" action="submit.php">

                                   <?php if (isset($_GET['error'])) { ?>
                                        <div class="error">
                                             <p class="errorp" style="color: red;   font-weight: bold;"><?php echo $_GET['error']; ?></p>
                                        </div>
                                   <?php } ?>



                                   <div class="form-grp">
                                        <label><b>Client name:</b></label><i class=" fa fa-check-square" style="margin-left: 10px;"></i>
                                        <input type="text" placeholder="" id="client" name="client" class="form-control" /><br>
                                        <i class="fa fa-dot-circle-o "></i>
                                        <small>Error message</small>

                                   </div>

                                   <div class="form-grp">
                                        <label><b>Food name:</b></label><i class=" fa fa-check-square" style="margin-left: 10px;"></i>
                                        <input type="text" placeholder="" id="username" name="food" class="form-control" /><br>
                                        <i class="fa fa-dot-circle-o "></i>
                                        <small>Error message</small>

                                   </div>

                                   <div class="form-grp">
                                        <label><b>Price:</b></label><br><i class=" fa fa-check-square" style="margin-left: 10px;"></i>
                                        <input type="text" placeholder="" id="price" name="price" class="form-control" />
                                        <br>
                                        <i class="fa fa-dot-circle-o "></i>
                                        <small>Error message</small>

                                   </div>
                                   <input type="submit" class="btn btn-danger btn-block" name="login" value="LOGIN">

                              </form>

                         </div>

                         <div class="row">
                              <div class="col-md-12">
                                   <div class="card bg-success">
                                        <div class="card-body text-center">
                                             <p class="card-text">Some text inside the third card</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-9">
                         <div class="wrappers">
                              <div class="gallery">
                                   <!-- PHP CODE TO FETCH DATA FROM ROWS-->
                                   <?php   // LOOP TILL END OF DATA 
                                   while (($rows = $result->fetch_assoc()) !== null) {
                                   ?>

                                        <div class="card crd">
                                             <img src="image/<?php echo $rows['IMG']; ?>" class="img-fluid" style="height: 100%;" alt="Avatar" style="width:100%">
                                             <div class="card-body">
                                                  <h4 id="foodtype<?php echo $rows['ID'] ?>"><b><?php echo $rows['NAME']; ?></b>

                                                  </h4>
                                                  <p class="price">ksh <b id="cardprice<?php echo $rows['ID'] ?>"><?php echo $rows['PRICE']; ?></b>/=</p>
                                                  <input onclick="setInputValue('username','foodtype<?php echo $rows['ID'] ?>','price', 'cardprice<?php echo $rows['ID'] ?>')" type="submit" class="btn btn-warning btn-block text-white text-bold" name="login" value="ORDER" style="font-weight:bold;">

                                             </div>
                                        </div>

                                        <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->


                                   <?php
                                   }
                                   ?>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <script>
               function setInputValue(input_food, valfood, input_price, price) {
                    // var x = document.getElementsByClassName().textContent;
                    var cat = document.getElementById(price).textContent;
                    document.getElementById(input_price).setAttribute('value', cat);

                    var dog = document.getElementById(valfood).textContent;
                    document.getElementById(input_food).setAttribute('value', dog);
               }
          </script>



          <script src=" js/jquery-2.1.0.min.js"></script>

          <!-- Bootstrap -->
          <script src=" js/popper.js"></script>
          <script src=" js/bootstrap.min.js"></script>

          <!-- Plugins -->
          <script src=" js/scrollreveal.min.js"></script>

          <script src=" js/jquery.counterup.min.js"></script>
          <script src="js/imgfix.min.js"></script>
          <script src="js/mixitup.js"></script>


     </body>

     </html>

<?php
} else {
     header("Location: index.php");
     exit();
}
?>