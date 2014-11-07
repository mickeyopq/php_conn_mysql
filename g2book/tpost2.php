<?php
session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("giv.php");
$inp = $_POST['xname'];
$pw = $_POST['pw'];
$sql = "SELECT * FROM `users` WHERE `xname` = '".$inp."'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);
if($inp != null && $pw != null && $row[2] == $inp && $row[1] == $pw)
{
        $_SESSION['username'] = $inp;
        echo '登入成功!';
  		header('Location: http://123.195.42.32/g2book/index.php');
  
}
else
{
        echo '登入失敗!';
		echo '<meta http-equiv=REFRESH CONTENT=1;url=tpost.php>';
		echo '登入error';
		die();
}
?>
