<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
error_reporting(0);
$connection = mysql_connect("localhost", "spyshiv", "12345678");
// Selecting Database
$db = mysql_select_db("codegurudb", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select email from cg_student where email='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['email'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location:../main/index2.php'); // Redirecting To Home Page
exit();
}
?>