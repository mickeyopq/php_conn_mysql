<?php 

$oiu="f111111234342433";
$HOST="localhost";
$MHOST="localhost";
$DB="dbname";
$TABLE1="gbook";
$USER="root";
$PASS="";
$FACE=array("123","456","8787","789");
$PAGE=5;
$link=mysql_pconnect($MHOST,$USER,$PASS) or die("fq,u cut");
mysql_query("SET NAMES 'utf8'");
mysql_select_db($DB,$link);
$pagesize = 5;
 ?>