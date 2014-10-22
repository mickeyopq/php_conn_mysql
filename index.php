<html>
<head>
<title>PHP TEST</title>
</head>
<body>
<?php
	if(empty($_GET['username'])){
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
Name: <input type="text" name="username"/>
Pass: <input type="password" name="pass"/>
<input type="submit" value="Send"/>
</form>
<?php
	}
	else{
		echo $_GET['username'];
	}
?>
</body>
</html>
