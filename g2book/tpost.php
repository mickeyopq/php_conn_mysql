<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>登入吧</h1>

</form>
<form name ="form" method="post" action="tlogout.php">
<input type="submit" name="rrww" value="登出" />&nbsp;&nbsp;
</form>
<?php
session_start();
if ($_SESSION['username'] != null) {
	echo "請到會員區";
}
else{
?>
<form name ="form" method="post" action="tpost2.php">
帳號：<input type="text" name="xname" /> <br>
密碼：<input type="password" name="pw" /> <br>
<input type="submit" name="button" value="登入" />&nbsp;&nbsp;
<!-- <a href="register.php">申請帳號</a> -->




<?php } ?>
</body>
</html>
<br>
<a href="http://123.195.42.32/g2book/tpost.php">打帳號密碼tpost.php</a><br>
<a href="http://123.195.42.32/g2book/index.php">發表留言index.php</a><br>
