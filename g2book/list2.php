<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h4>顯示區<br></h4>
	<?php include("conn.php"); ?>
	<a href="http://<?php echo $HOST; ?>/g2book/index.php">首頁發表留言index.php</a><br>
<?php
//當前頁數為
if(isset($_GET['p'])) {
$p = $_GET['p']?$_GET['p']:1;    ////fsdfsdfsdfsdfderwerewr;  //有收到就使用收到的值
}else{ 
$p = 1;  //沒有收到就設為1，從第1頁開始
// $pagesize = 10;
}
//計算該頁數對應的留言範圍
$offset = ($p-1)*$pagesize;

//查詢當前頁數的留言
$query_sql = "SELECT * FROM guestbook ORDER BY id DESC LIMIT  $offset , $pagesize";
$result = mysql_query($query_sql);
$str = "SELECT * FROM `gbook` ORDER BY `gbook`.`id` DESC LIMIT  $offset , $pagesize";

$result=mysql_query($str);

while(list($id,$name,$content,$ctime)=mysql_fetch_row($result)){
echo "<HR>";
echo "留言者:".$name."<br>";
echo "說了內容：".$content."<br>";
echo "時間：".$ctime."<br>";
echo "第：".$id."筆留言<br>";
//修改edit的按鈕；；
echo "<form action=\"list2.php?aa=$id\" method=\"post\">";
echo "<button type=\"submit\">修改內容</button></td>";
// echo "<input type=\"submit\" name=\"btn_edit\" value=\"edit\">";
echo "</form>";
if (!empty($_GET['aa'])){
	if($_GET['aa']==$id){
echo "fq if";
echo "<form action=\"reply.php?idname=$id&edit_content\" method=\"post\">";
echo "修改內容：<input type=\"text\" name=\"edit_content\" value=\"$content\"><br>";
// echo "<button type=\"submit\">修改送出</button></td>";
// echo "第<input type=\"text\" name=\"idname\" value=\"$id\" readonly>筆留言<br>";
echo "<input type=\"submit\" name=\"subm\" value=\"修改\">";
echo "</form>";
}
}
else{echo "fq else";
	}

?>
 <a href="reply.php?action=delete&id=<?=$id?>">刪除該留言</a> 刪除留言的超連結
<?php } ?>
<?php 
//顯示留言與頁數
$count_result = mysql_query("SELECT count(*) FROM gbook");
$count_array = mysql_fetch_array($count_result);
$pagenum=ceil($count_array['count(*)']/$pagesize);
echo '共 ',$count_array['count(*)'],' 筆留言';
if ($pagenum > 1) {
	for($i=1;$i<=$pagenum;$i++) {
		if($i==$p) {
			echo '&nbsp;[',$i,']';
		} else {
			echo '&nbsp;<a href="list2.php?p=',$i,'">'.$i.'</a>';
		}
	}
}
?>
</body>
</html>