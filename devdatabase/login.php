<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit']))
{   
			// Define $username and $password
			$username=$_POST['username'];
			$password=$_POST['password'];
			// To protect MySQL injection for Security purpose
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$connection = mysql_connect("localhost", "root", "");
			// Selecting Database
			$db = mysql_select_db("shiv", $connection);
			// SQL query to fetch information of registerd users and finds user match.
			$query = mysql_query("select * from users where password='$password' AND username='$username'", $connection);
			$rows = mysql_num_rows($query);
			if ($rows == 1) {
			$_SESSION['login_user']=$username; // Initializing Session
			header("location: home.php"); // Redirecting To Other Page
			} else {
			  $error = "Username or Password is invalid";
			  echo "<script type='text/javascript'>alert('$error');
              window.location = 'loginpage.php';
		      </script>";
			}
			mysql_close($connection); // Closing Connection
}
?>