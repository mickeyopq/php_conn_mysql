<?php session_start(); ?>
<?php
//將session清空
unset($_SESSION['username']);
echo '登出中......';
header('Location: http://123.195.42.32/g2book/index.php');
exit;

?>