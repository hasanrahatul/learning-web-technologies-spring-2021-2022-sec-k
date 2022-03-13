<?php 
	session_start();

	
	if(isset($_REQUEST['submit'])){
		
		// $username = $_REQUEST['username'];
		// $password = $_REQUEST['password'];
		// $email = $_REQUEST['email'];
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
        $confirmPassword = $_REQUEST['confirmPassword'];
		$gender = $_REQUEST['gender'];
		$date = $_REQUEST['date'];
		// $dob = ['dd' => $_REQUEST['dd'], 'mm' => $_REQUEST['mm'], 'yyyy' => $_REQUEST['yyyy'] ];
		
		if($name != null && $email != null && $username != null && $password != null && $confirmPassword != null 
		&& $gender != null && $date != null){
			// $user = $name."|".$username."|".$password."|".$email."|"."Active"."\r\n";
			$user = $username."|".$password."|".$name."|".$email."|".$confirmPassword."|".$gender."|".$date."|"."Active"."\r\n";
			$file = fopen('../models/user.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: ../views/login.php');
		}
		else{
			echo "null submission";
		}
	}
?>
