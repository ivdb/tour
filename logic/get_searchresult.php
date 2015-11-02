<?php

$searchString = trim($_POST['searchstring']);

$sql = "SELECT * FROM songs 
		WHERE title 
		LIKE '%".$searchString."%'
		OR long_description
		LIKE '%".$searchString."%'";

//echo $sql;

$result = $mysqli->query($sql);
							
$itemList = array();

while ($item = $result->fetch_array())
{
	$itemList[] = $item;
}	
	
