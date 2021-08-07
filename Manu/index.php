<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/valid.js"></script>
</head>

<body>
	<!-- <form action="login.php" method="post">
		<h2>LOGIN</h2>

		<label>User Name</label>
		<input type="text" name="uname" placeholder="User Name"><br>

		<label>User Name</label>
		<input type="password" name="password" placeholder="Password"><br>

		<button type="submit">Login</button>
	</form> -->
	<div class="containerfx container " style="margin-top: 10px; ">
		<div class="row">
			<div class="col-md-6">


				<img class="img-fluid" style="height: 100%;" src="css/waiter.jpg" alt="Card image">


			</div>
			<div class="col-md-6">
				<div class="card" style="width:400px; margin-Left: -30px;">
					<div class="card-body">
						<!-- <img class="card-img-left" src="css/waiter.jpg" alt="Card image"> -->

						<form name="myForm" action="login.php" method="post" onsubmit="return validateForm()" id="form" class="form">
							<?php if (isset($_GET['error'])) { ?>
								<div class="error">
									<p class="errorp" style="color: red;   font-weight: bold;"><?php echo $_GET['error']; ?></p>
								</div>
							<?php } ?>
							<h2 class="dss"> Please login</h2>

							<div class="form-grp">
								<label for="">Employee Name: </label><i class=" fa fa-check-square" style="margin-left: 10px;"></i>
								<input type="text" name="uname" class="form-control" placeholder="User Name"><br>
								<i class="fa fa-dot-circle-o "></i>
								<small>Error message</small>
							</div>
							<div class="form-grp">
								<label for="">Password:</label><i class=" fa fa-check-square" style="margin-left: 10px;"></i>
								<input type="password" name="password" class="form-control" placeholder="Password"><br>
								<i class="fa fa-dot-circle-o "></i>
								<small>Error message</small>
							</div><br>
							<button onclick="checkInputs()" class="btn btn-danger btn-block" type="submit">Login</button>
							<!-- <input type="submit"  name="login" value="LOGIN"> -->
						</form>
						<!-- <form id="form" class="form">
                            <div class="form-control">
                                <label for="username">Username</label>
                                <input type="text" placeholder="florinpop17" id="username" />
                               
                            </div>

                            <div class="form-control">
                                <label for="username">Password</label>
                                <input type="password" placeholder="Password" id="password" />
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>
                            </div>

                            <input type="submit" class="btn btn-danger btn-block" name="login" value="LOGIN">

                        </form>
                    </div> -->


						<!-- SOCIAL PANEL HTML -->

					</div>
				</div>


			</div>

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