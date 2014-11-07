<?php
session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("conn.php");
$inp = $_POST['xname'];
$pw = $_POST['pw'];
$sql = "SELECT * FROM `users` WHERE `xname` = '".$inp."'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);
if($inp != null && $pw != null && $row[1] == $inp && $row[2] == $pw)
{
        $_SESSION['username'] = $inp;
        echo '登入成功!';
  		header('Location: http://'.$HOST.'/g2book/index.php');
 //php裡的header('location可以改成這種變數
// header('Location: http://'.$HOST.'/g2book/index.php');
 
}
else
{
        echo '登入失敗!';
		header('Location: http://'.$HOST.'/g2book/index.php');
		echo '登入error';
		die();
}
?>
