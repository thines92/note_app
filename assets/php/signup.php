<?php

	session_start(); // Allows for session variables and cookies

	include "connection.php";

	if ($_POST['submit'] == 'Sign up') {

		/* ===== Email and Password Validation ===== */

		if (!$_POST['email']) $error.="</br>Please enter your email";
			else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="</br>Please enter a valid email address";

		if (!$_POST['password']) $error.="</br>Please enter your password";
			else {
				if (strlen($_POST['password']) < 6) $error.="</br>Please enter a password with at least 6 characters";
				if (!preg_match('`[A-Z]`', $_POST['password'])) $error.="</br>Please include at least one capital letter.";
				if (!preg_match('`[0-9]`', $_POST['password'])) $error.="</br>Please include at least one number";
			}

		if ($error) $echo = "There were error(s) in your signup details:".$error;

		/* ===== Sign Up Code ===== */

		else {

			if (mysqli_connect_error()) die("could not connect to database"); // Checks db connection

			$query = "SELECT `email` FROM `users` WHERE `email`='".mysqli_real_escape_string($link, $_POST['email'])."'"; // checks db for email

			$result = mysqli_query($link, $query);

			$results = mysqli_num_rows($result);

			if ($results) echo "That email address is already registered. Do you want to log in?";
				else {

					$query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";

					mysqli_query($link, $query); // Runs the query and inserts user into db

					echo "You've been signed up!";

					$_SESSION['id'] = mysqli_insert_id($link); // Makes a session variable user the new user's ID

					// Redirect to logged in page

				}

		}

	}

?>