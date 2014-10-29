<?php
	mysql_connect("localhost","root","");
	mysql_select_db("absworkout");
	
	/*if(trim($_POST["username"]) == "")
	{
		echo "Please input Username!";
		exit();	
	}
	
	if(trim($_POST["password"]) == "")
	{
		echo "Please input Password!";
		exit();	
	}	
		
	
	
	if(trim($_POST["txtName"]) == "")
	{
		echo "Please input Name!";
		exit();	
	}	
	*/

	if($_POST["password"] != $_POST["repassword"])
	{
		echo "Password not Match!";
		exit();
	}

	$strSQL = "SELECT * FROM member WHERE username = '".trim($_POST['username'])."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{
			echo "Username already exists!";
	}
	else
	{	
		
		$strSQL = "INSERT INTO member (username,password,email,weight,height,age) VALUES 
		('".$_POST["username"]."', '".$_POST["password"]."', '".$_POST["email"]."', '".$_POST["weight"]."', '".$_POST["height"]."',
			 '".$_POST["age"]."')";
		$objQuery = mysql_query($strSQL);
		
		echo "Register Completed!<br>";		
	
		echo "<br> Go to <a href='login.php'>Login page</a>";
		
	}

	mysql_close();
?>
