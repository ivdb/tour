<?php
//begin datum 2 juli, 20 dagen lang. 
//Geen rekening mee gehouden met andere jaren als
//de tour in verschillende maanden valt.


$day_list_available = array();
$day_list_greyedout = array();


$number_of_days_available = 
($today  - START_DAY) > $total_number_of_days ?  $total_number_of_days:($today  - START_DAY + 1);

$start_day = START_DAY;
for($i=$start_day;$i<$start_day+$number_of_days_available;$i++) {
	$day_list_available[] = $i;
}
for($i=$start_day+$number_of_days_available;$i<$start_day+$total_number_of_days;$i++) {
	$day_list_greyedout[] = $i;
}

