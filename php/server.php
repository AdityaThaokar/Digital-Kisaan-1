	<?php
	   $errors = array(); 

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
	
		
		if (empty($username)) { array_push($errors, "username is required."); }
		if (empty($password)) { array_push($errors, "password is required."); }
		if (empty($confirmpassword)) { array_push($errors, "confirmpassword is required."); }
		if (empty($phone)) { array_push($errors, "Phone number is required."); }
		if (empty($aadhar)) { array_push($errors, "aadhar is required."); }
		if (empty($jandhan)) { array_push($errors, "jandhan is required."); }
		if (empty($location)) { array_push($errors, "location is required."); }
		if (empty($date)) { array_push($errors, "date is required."); }
		if (empty($pincode)) { array_push($errors, "pincode is required."); }

		if ($password != $confirmpassword) {
			echo "<script>alert('The two passwords do not match.')</script>";
		}

		if (count($errors) == 0) {
		$query = "INSERT INTO farmerdetails (username,password,email,phone,aadhar,jandhan,location,date_now,pincode) 
		VALUES('$username','$password','$email','$phone','$aadhar','$jandhan','$location','$date','$pincode')";
		$sql = mysqli_query($conn, $query);
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

?>