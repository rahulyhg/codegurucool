<?php
if(isset($_POST['submit']))
{
  error_reporting(0);
$dbhost = 'localhost';
$dbuser = 'spyshiv';
$dbpass = '12345678';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $firstname = addslashes ($_POST['firstname']);
   $lastname = addslashes ($_POST['lastname']);
   $email = addslashes ($_POST['email']);
   $password = addslashes ($_POST['password']);
}
else
{  
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   
   
}

$sql = "INSERT INTO cg_student ".
       "(firstname,lastname,email,password) ".
       "VALUES('$firstname','$lastname','$email','$password')";
mysql_select_db('codegurudb');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  //die('Could not enter data: ' . mysql_error());
  $message='Email is  is already registered please choose a different email';
   echo "<script type='text/javascript'>alert('$message');
           window.location = '../overall/st_sign.html';
		   </script>";
		   die();
}
else{
  $message='Congratulations!!! Your Account is successfully created.';
  echo "<script type='text/javascript'>alert('$message');
       </script>";
}

include '../overall/st_login.html';
mysql_close($conn);
}
?>
