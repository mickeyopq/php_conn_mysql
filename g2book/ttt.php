
<?php 
echo "<form action=\"ttt.php?idname=444;&subm;idname=444\" method=\"post\">";
echo "修改內容：<input type=\"text\" name=\"edit_content\" value=\"9999\"><br>";
echo "<button type=\"submit\">edit</button></td>";
// echo "第<input type=\"text\" name=\"idname\" value=\"$id\" readonly>筆留言<br>";
// echo "<input type=\"submit\" name=\"subm\" value=\"修改\">";
echo "</form>";



echo "<form action=\"ttt.php?aa=33\" method=\"post\">";
echo "<button type=\"submit\">edit</button></td>";
// echo "<input type=\"submit\" name=\"btn_edit\" value=\"edit\">";
echo "</form>";
?>
<form method="post" action="ttt.php?dd=33">
<button type="submit">登入入</button></td>
</form>












<form method="post" autocomplete="off" id="lsform" action="member.php?mod=logging&amp;action=login&amp;loginsubmit=yes&amp;infloat=yes&amp;lssubmit=yes" onsubmit="return lsSubmit();">
<div class="fastlg cl">
<span id="return_ls" style="display:none"></span>
<div class="y pns">
<table cellspacing="0" cellpadding="0">
<tr>
<td>
<span class="ftid">
<select name="fastloginfield" id="ls_fastloginfield" width="40" tabindex="900">
<option value="username">用戶名</option>
<option value="email">Email</option>
</select>
</span>
<script type="text/javascript">simulateSelect('ls_fastloginfield')</script>
</td>
<td><input type="text" name="username" id="ls_username" autocomplete="off" class="px vm" tabindex="901" /></td>
<td class="fastlg_l"><label for="ls_cookietime"><input type="checkbox" name="cookietime" id="ls_cookietime" class="pc" value="2592000" tabindex="903" />自動登錄</label></td>
<td>&nbsp;<a href="javascript:;" onclick="showWindow('login', 'member.php?mod=logging&action=login&viewlostpw=1')">找回密碼</a></td>
</tr>
<tr>
<td><label for="ls_password" class="z psw_w">密碼</label></td>
<td><input type="password" name="password" id="ls_password" class="px vm" autocomplete="off" tabindex="902" /></td>
<td class="fastlg_l"><button type="submit" class="pn vm" tabindex="904" style="width: 75px;"><em>登錄</em></button></td>
<td>&nbsp;<a href="member.php?mod=register" class="xi2 xw1">立即註冊</a></td>
</tr>
</table>
<input type="hidden" name="quickforward" value="yes" />
<input type="hidden" name="handlekey" value="ls" />
</div>
</div>
</form>



<?php include("conn.php"); ?>
<?php session_start(); ?>

請 <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>登錄</strong></a> 後使用快捷導航<br />沒有帳號？<a href="member.php?mod=register" class="xi2 xw1">立即註冊</a>

</form>
<form name ="form" method="post" action="tlogout.php">
<input type="submit" name="rrww" value="登出" />&nbsp;&nbsp;
</form>
測試小小代碼區<br>

<?php if (!empty($_GET['username'])) { 
// $xxx =$_SESSION['username'];
echo "test if";
}
else{
echo "test else";
}
?>



<a href="http://<?php echo $HOST; ?>/g2book/index.php">首頁發表留言index.php</a><br>




<?php 
//PHP裡放HTML的插入變數
// echo "超連結：<a href=\"http://$HOST/g2book/tpost.php\">tpost.php登入</a><br>";  

//php裡的header('location可以改成這種變數
// header('Location: http://'.$HOST.'/g2book/index.php');
?>

<!-- <a href="http://<?php echo $HOST; ?>/g2book/tpost.php">tpost.php登入</a><br> -->
<!-- HTML超連結裡面插入PHP變數 -->





<?php if (!empty($_GET['btn_edit'])){
	}?>
	 <!-- if ($_GET['btn_edit']=="edit")) {  -->

<form action="" method="get">
	<input type="text" name="edit_content" value=<?php echo $content; ?>><br>";
	<input type="submit" name="subm" value="修改">
</form>
 --><!-- $edit_sql = "UPDATE FROM gbook WHERE id = $_GET[id]";
	if(mysql_query($edit_sql)){ -->
<?php echo $id; ?>

 <?php  ?>

<!-- <a href="reply.php?action=edit&id=<?=$id?>">edit該留言</a> edit留言的超連結 -->
<!-- <form action="" method="get">
<input type="submit" name="btn_edit" value="edit"><br>"
</form>
 -->
