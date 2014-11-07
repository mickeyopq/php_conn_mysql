<?php 

$oiu="f111111234342433";
$HOST="localhost";
$DB="dbname";
$TABLE1="gbook";
$USER="root";
$PASS="";
$FACE=array("123","456","8787","789");
$PAGE=5;
$link=mysql_pconnect($HOST,$USER,$PASS) or die("fq,u cut");
mysql_query("SET NAMES 'utf8'");
mysql_select_db($DB,$link);
 ?>