<?php

	include 'database.php';


	if (!isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['confirm_password'])) {	
		exit('Please complete the registration form!');
	}
	if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirm_password'])) {
		exit('Please complete the registration form');
	}
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		exit('Email is not valid!');
	}
	if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
		exit('Password must be between 5 and 20 characters long!');
	}

	if ($stmt = $conn->prepare('SELECT user_id, user_password FROM users WHERE user_email = ?')) {

		$stmt->bind_param('s', $_POST['email']);
		$stmt->execute();
		$stmt->store_result();
		
		if ($stmt->num_rows > 0) {
			
			echo 'Email exists, please choose another!';
		} else {
			if ($stmt = $conn->prepare('INSERT INTO users (user_name, user_email, user_password, level_id, user_experience, user_coins, lc_id) VALUES (?, ?, ?, 1, 0, 0,1)')) {
				
				$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
				$stmt->bind_param('sss', $_POST['name'], $_POST['email'], $password);
				$stmt->execute();

				header("location: ../tutorial.php");
				exit();
			} else {
				
				echo 'Could not prepare statement!';
			}
		}
		$stmt->close();
	} else {
		
		echo 'Could not prepare statement!';
	}
	$conn->close();
?>