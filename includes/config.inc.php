<?php 
// In dit bestand vind je alle instellingen, zoals databasegegevens.

// Voor de veiligheid zou dit bestand boven de webroot geplaatst moeten worden. 

// Definieer de status van het project
//define('PROJECT_STATUS','production');
define('PROJECT_STATUS','development');

// Stel de instellingen in op Nederlands
setlocale(LC_ALL, 'nl_NL');

// databasegegevens
define('DB_HOST','127.0.0.1');
define('DB_NAME','tour');
//define('DB_NAME','test');
//define('DB_USERNAME','tour');
//define('DB_PASSWORD','geheim');
define('DB_USERNAME','root');
define('DB_PASSWORD','');

define('WEBSITE_TITLE', 'Tour top 100');
define('NUMBEROFCHARSPERPAGE', 150);

//start: 2nd of July
define('START_DAY',2);
$nr_of_songs_per_page = 5;
$total_number_of_days = 23;

//get day of today 
date_default_timezone_set('Europe/Amsterdam');
$today = date("j");


?>
