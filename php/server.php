	<?php
	//$errors = array(); 

		$conn = mysqli_connect('localhost', 'root', '', 'digital_kisan');

//signup for farmers
	if (isset($_POST['submit'])) {

		$username = $_POST['username'];
		$password =$_POST['password'];
		$email = $_POST['email'];
		$confirmpassword=$_POST['confirmpassword'];
		$phone =$_POST['phone'];
		$aadhar = $_POST['aadhar'];
		$jandhan = $_POST['jandhan'];
		$location = $_POST['location'];
		$date = $_POST['date'];
		$pincode = $_POST['pincode'];
	
		
		/*if (empty($firstname)) { array_push($errors, "Firstname is required."); }
		if (empty($lastname)) { array_push($errors, "Lastname is required."); }
		if (empty($email)) { array_push($errors, "Email is required."); }
		if (empty($phno)) { array_push($errors, "Phone number is required."); }
		if (empty($sem)) { array_push($errors, "semester is required."); }
		if (empty($password_1)) { array_push($errors, "Password is required."); }
		if (empty($password_2)) { array_push($errors, "Please confirm your password."); }*/

		if ($password != $confirmpassword) {
			alert("The two passwords do not match.");
		}
			
		
		
		//$password = md5($confirmpassword);
		$query = "INSERT INTO farmerdetails (username,password,email,phone,aadhar,jandhan,location,date_now,pincode) 
		VALUES('$username','$password','$email','$phone','$aadhar','$jandhan','$location','$date','$pincode')";
		$sql = mysqli_query($conn, $query);
	if ($sql) {
		echo "<script>alert('Sucessfully registered')</script>";
		header('location: index.php');
	}
	else{
		echo "<script>alert('Error Registering')</script>";
	}	
	}

	//login user
	/*if (isset($_POST['login'])) {

		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['passwrd']);

		if (empty($email)) { array_push($errors, "Email ID is required."); }
		if (empty($password)) { array_push($errors, "Password is required."); }

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE email='$email' AND password='$password' ";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				header('location: profile.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	*/


	function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>