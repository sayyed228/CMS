<?php
//$id = $_GET['id'];
$Add = $_GET['Add'];

$connect = mysql_connect('localhost','root','');

if(!$connect)
{
die('Could not connect' . mysql_error);	
}

mysql_select_db('sk_legal',$connect);


$sql = "INSERT INTO `sk_legal`.`banks_and_financial_institutions` (`id`, `Name`) VALUES (NULL, '".$Add."');";
mysql_query($sql) or die('Error updating database');



//echo($fname.'&nbsp;');
//echo($lname.'&nbsp;');


?>

