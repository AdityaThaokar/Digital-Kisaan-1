<?php
		session_start();
			$myConnection= mysqli_connect("localhost","root","", "digital_kisan") or die ("could not connect to mysql"); 
			$msg= $_POST['message'];
			$sqlCommand="insert into chat (user_id,name,msg,status) values (".$_SESSION["id"].",'".$_SESSION["username"]."','$msg',1)";
		$query=mysqli_query($myConnection, $sqlCommand) or die(mysql_error()) ;
		echo $sqlCommand;
		header('Location: chat.php');
?>