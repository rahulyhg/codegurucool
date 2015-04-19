<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit']))
{   
			// Define $username and $password
			$email=$_POST['email'];
			$password=$_POST['password'];
			
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			error_reporting(0);
			$connection = mysql_connect('localhost', 'spyshiv', '12345678');

			$select_db = mysql_select_db('codegurudb');
             $qry = "SELECT email FROM cg_student WHERE email = '".mysql_real_escape_string($email)."' and password= '".mysql_real_escape_string($password)."'";
             $rows=mysql_num_rows(mysql_query($qry));
			if ($rows == 1) {
				//echo "Successful";
			$_SESSION['login_user']=$email; // Initializing Session
			header("location: ../stdatabase/profile.php"); // Redirecting To Other Page
			} else {
			  $error = "Username or Password is invalid";
			  echo $error;
			  /*echo "<script type='text/javascript'>alert('$error');
              window.location = 'loginpage.php';
		      </script>";*/
			}
			mysql_close($connection); // Closing Connection
}
?>