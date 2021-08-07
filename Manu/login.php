<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=Employee Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM waiter WHERE EMPID='$uname' AND PASSWORD='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['EMPID'] === $uname && $row['PASSWORD'] === $pass) {
            	$_SESSION['EMPID'] = $row['EMPID'];
				$_SESSION['EMPNUM'] = $row['EMPNUM'];

            	$_SESSION['NAME'] = $row['NAME'];
            	$_SESSION['ID'] = $row['ID'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect Employee name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect Employee name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}