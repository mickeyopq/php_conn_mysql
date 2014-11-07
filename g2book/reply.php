<?php 
include("conn.php");
//刪除id編號的留言

echo "dfsdf111";
if (!empty($_GET['idname'])){
	
echo "dfsdf111";
$ss = $_GET['edit_content'];
// if($_GET['edit_content'] == 'edit_content'){
	$edit_sql = "UPDATE `dbname`.`gbook` SET `content` = '$ss' WHERE id = $_GET[idname]";
	if(mysql_query($edit_sql)){
		exit('<script language="javascript">alert("edit成功");self.location = "list2.php";</script>');
	} else {
		exit('edit失敗'.mysql_error().'[ <a href="javascript:history.back()">確認</a> ]');
	}
// }
}


if (!empty($_GET['action'])){
if($_GET['action'] == 'delete'){
	$delete_sql = "DELETE FROM gbook WHERE id = $_GET[id]";
	if(mysql_query($delete_sql)){
		exit('<script language="javascript">alert("刪除成功");self.location = "list2.php";</script>');
	} else {
		exit('刪除失敗'.mysql_error().'[ <a href="javascript:history.back()">確認</a> ]');
	}
}
}
 ?>

