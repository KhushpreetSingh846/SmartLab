<?php

	$username = filter_input[INPUT_POST,'username'];
	$password = filter_input[INPUT_POST,'password'];
	$email = filter_input[INPUT_POST,'email'];
	$phone = filter_input[INPUT_POST,'phone'];
	
	
	if(!empty($username)&&!empty($password)&&!empty($$email)&&!empty($$phone)){
		
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "registration";
			
		//create connection
		$conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		else
		{
			$sql = "INSERT INTO register (username,password,email,phone)
			values('$username','$password','$email','$phone')";
			if($conn->query($sql) === TRUE){
				echo"NEW record inserted successfully";
			}
			else{
				echo"Error:".$sql."<br>".$conn->error;
			}
			$conn->close();
		}
	}
	else{
		echo"All fields are required."
		die();
	}
	

?>