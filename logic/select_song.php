<?php

//TODO Check dates in past, then show all.
date_default_timezone_set('UTC');
$today= date("j");


$start_day = empty($_GET['day'])?$today:$_GET['day'];
$todays_song = ($today - START_DAY) * 5 + 1;
$last_visible_song = ($today - START_DAY) * 5 + 5;

$song_id = empty($_GET['song_id'])?$todays_song:$_GET['song_id'];
if(empty($song_id)){$song_id = 3;}
$my_query ="SELECT * FROM songs WHERE id IN (".$song_id.", ".($song_id-1).", ".($song_id+1).") ORDER BY order_nr";


$result = $mysqli->query($my_query);

$song3_list = array();
while($song = $result->fetch_assoc()) 
{
	$song3_list[] = $song;	
}

//get correct encoding for string fields
foreach($song3_list as $key => $song) {
 $song3_list[$key]['long_description'] = utf8_encode($song3_list[$key]['long_description']);
 $song3_list[$key]['title'] = utf8_encode($song3_list[$key]['title']);
 $song3_list[$key]['artistname'] = utf8_encode($song3_list[$key]['artistname']);
}

//TODO Ingrid: Loop through database fields
$empty_song =  array();
$empty_song['id'] = 0;
$empty_song['order_nr'] = 0;
$empty_song['long_description'] = "";
$empty_song['title'] = "";
$empty_song['artistname'] ="";

//for first song, replace previsou song with empty
if($song_id == 1)  {
	$song3_list[2] = $song3_list[1];
	$song3_list[1] = $song3_list[0];
	$song3_list[0] = $empty_song;
	
}
//for last song of current day, do not who next song
if($song_id == $last_visible_song || $song_id == 100)  {
	$song3_list[2] = $empty_song;
	
	$song3_list[1] = $song3_list[1];
	$song3_list[0] = $song3_list[0];
	
}



$currentsong =  $song3_list[1];