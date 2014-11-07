<!doctype html>
<?php session_start(); ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
<?php include("conn.php"); ?>
<!-- 登入，登出的if -->
<?php if (!empty($_SESSION['username'])) { ?>
</form>
<form name ="form" method="post" action="logout.php">
<input type="submit" name="rrww" value="登出" />&nbsp;&nbsp;
</form>
<?php } else {?>
<form name ="form" method="post" action="login.php">
帳號：<input type="text" name="xname" /> <br>
密碼：<input type="password" name="pw" /> <br>
<input type="submit" name="button" value="登入" />&nbsp;&nbsp;輸入錯誤，請重來
</form>
<?php } ?>

	<h4>留言區<br></h4>

<form action="list.php" method="post">
<?php if (!empty($_SESSION['username'])) { 
$xxx =$_SESSION['username'];
echo "<input type=\"text\" name=\"name\" value=\"$xxx\" readonly><br>";
}
else{
echo "名字:<input type=\"text\" name=\"name\"><br>";
}
echo "內容:<textarea name=\"content\" rows=\"5\" cols=\"50\"></textarea><br>";
echo "<input type=\"submit\" name=\"submit\" value =\"送出去\"><br>";
echo "</form>";

?>

<a href="http://<?php echo $HOST; ?>/g2book/list.php">留言區？→會不會員區</a><br>
</body>
</html>