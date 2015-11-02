<?php

$my_query =  "SELECT * FROM bners WHERE visible = 1";

$result = $mysqli->query($my_query);

$bn_list = array();

while ($bn_er = $result->fetch_assoc()) {	
	$bn_list[] = $bn_er;	
}

