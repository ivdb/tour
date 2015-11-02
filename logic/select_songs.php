<?php


$day_of_page = empty($_GET['day'])?$today:$_GET['day'];
if($day_of_page > 21){$day_of_page = 21;}
$my_query =($day_of_page == 100)?  "SELECT * FROM songs":"SELECT * FROM songs LIMIT ". ($day_of_page - START_DAY)*$nr_of_songs_per_page . ", " . $nr_of_songs_per_page ;

$result = $mysqli->query($my_query);

$song_list = array();

while ($song = $result->fetch_assoc()) {	
	$song_list[] = $song;	
}


//replace the long_description with shorter version
//get correct encoding for string fields
foreach($song_list as $key => $song) {
 $longdescription =	$song_list[$key]['long_description'];
 $description = substr($longdescription, 0, NUMBEROFCHARSPERPAGE);
 $song_list[$key]['long_description'] = $description ;
 $song_list[$key]['title'] = utf8_encode($song_list[$key]['title']);
 $song_list[$key]['artistname'] = utf8_encode($song_list[$key]['artistname']);
}
