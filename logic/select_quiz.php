<?php
//TODO Check dates in past, then show all.

$todays_date = date("Y-m-d");

$my_query ="SELECT * FROM quiz WHERE startdate <= '" . $todays_date . "' AND enddate >= '" . $todays_date . "'";

$result = $mysqli->query($my_query);

if($result)
	$quiz = $result->fetch_assoc();
else 	
{
	//TODO 
	$quiz['question'] = "";
}

//get song info
$my_query ="SELECT * FROM songs WHERE id = " . $quiz['song_id'];
$result = $mysqli->query($my_query);
$quiz_song = $result->fetch_assoc();