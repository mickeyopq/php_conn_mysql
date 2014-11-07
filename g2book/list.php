<?php session_start(); ?>
<?php
include("conn.php");
if($_POST["submit"]){
$nameid = $_POST["name"];
$contentid = $_POST["content"];

$str="INSERT INTO `dbname`.`gbook` (`name`,`content`,`ctime`) VALUES ('$nameid', '$contentid',now())";
mysql_query($str,$link);
}
?>
<?php 
$str="SELECT * FROM `gbook` ORDER BY `gbook`.`id` DESC";
$result=mysql_query($str);

while(list($id,$name,$content,$ctime)=mysql_fetch_row($result)){
echo "<HR>";
echo "留言者:".$name."<br>";
echo "說了內容：".$content."<br>";
echo "時間：".$ctime."<br>";
}
?>

<!-- 顯示留言的if，會員區和非會員區 -->
<?php
if ($_SESSION['username'] != null) {
	header('Location: http://'.$HOST.'/g2book/list2.php');
}
else{
    header('Location: http://'.$HOST.'/g2book/list3.php');
    exit;
}
?>