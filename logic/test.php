<?php

$searchString = trim($_POST['searchstring']);

$sql = "SELECT * FROM test 
		WHERE date > 0"; 


//echo $sql;

$result = $mysqli->query($sql);
							
print_r($result);
