<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
	<style>

	<!-- all yours thao -->

	</style>
</head>
<body>
<h2 align="center">Chat Room</h2>
<hr><center>
<form action="process.php" id="form" method="post" name="form" style="margin-top: 5%;" >
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "digital_kisan") or die ("could not connect to mysql");  
if(isset($_SESSION['email'])){
	$username = $_SESSION['username'];
}
else {
    header('Location: login.php');
   die();
}
	$user_active =$_SESSION['username'];
	$sqlCommand="select * from chat";
	$query=mysqli_query($conn, $sqlCommand) or die(mysql_error()) ;
echo "<div>";
		if($query) {
                while($row = mysqli_fetch_assoc($query) ) {
      if($row['status']==1){ 
			echo '<tr><td><div class="bullet"></div></td>';
	 } 
	 else {
	 	echo '<tr><td><div class="bye"></div></td>';
	 
	 }         	
echo '<td colspan="300px">
	'.$row["name"] .'</td> <td>:</td> <td>' .$row["msg"].'</td></tr></div>';
	}
}

echo "</table>";
?>
<br><br>
<textarea id="msg" name="message" placeholder="Message"></textarea>
<input  type="submit" value="Submit" name="submit" id="submit" required="">
</form><br><br>
<form action="logout.php">
	<input type="submit" value="Logout" name="submit" id="submit" value="logout" >
	</form>
</center>

</body>
</html>