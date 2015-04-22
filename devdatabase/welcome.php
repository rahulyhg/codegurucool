<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<style>
      #profile{
		font-family:verdana;
		margin-top:140px;
		right:0px;
	    background-color:#D8D8D8;
		border:2px outset #F0F0F0;
		position:fixed;
	  }
</style>
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="../database/logout.php">Log Out</a></b>
</div>
</body>
</html>
<!--Databse files are done-->