<?php session_start(); ?>
<?php include("conn.php"); ?>
<?php
//將session清空
unset($_SESSION['username']);
echo '登出中......';
header('Location: http://'.$HOST.'/g2book/index.php');
// header('Location: http://'.$HOST.'/g2book/index.php');

exit;

?>