<?php 
include("dbconnect.php");
$array	= $_POST['arrayorder'];

if ($_POST['update'] == "update"){
	
	$count = 1;
	foreach ($array as $idval) {
		$query = "UPDATE banks_and_financial_institutions SET listorder = " . $count . " WHERE id = " . $idval;
		mysql_query($query) or die('Error, insert query failed');
		$count ++;	
	}
	echo 'All saved! refresh the page to see the changes';
}
?>