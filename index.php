<?php
$action = "";
// Gebruikersnaam, wachtwoord van de database etc ophalen
include('includes/config.inc.php');
// Laad de Smarty bibliotheek in
include('libs/Smarty.class.php');
// Voer instellingen uit en stel template parser in
include('includes/bootstrap.inc.php');
// Maak de database connectie
include('includes/database.inc.php');

// Zet dagen klaar voor menu
include('logic/build_day_lists.php');
$templateParser->assign('day_list_available' , $day_list_available);
$templateParser->assign('day_list_greyedout' , $day_list_greyedout);

// Koppel de waarde van de paginatitel aan te smarty tag 'title'
$templateParser->assign('title', WEBSITE_TITLE);
// Toon de template: output html
$templateParser->display('head.tpl');
// Header en navigatie
$templateParser->display('header.tpl');



switch ($action) {

	case 'search':
		// toon hier het zoekresultaat
		include('logic/get_searchresult.php');
		$templateParser->assign('search' , $searchString);
		$templateParser->assign('searchList' , $itemList);
		$templateParser->display('searchresult.tpl');
		break;
		/*
		 case 'tourdates':
		 // Maak dit af!
		 // Haal de tourdata op
		 include('logic/select_tourdates.php');
		 $templateParser->assign('x' , $x);
		 $templateParser->display('x.tpl');
		 break;
		 */
	case 'getsongs':
		// Haal de songs op
		include('logic/select_songs.php');
		$templateParser->assign('song_list' , $song_list);
		$templateParser->display('songs.tpl');
		break;
	case 'view_song':
		// Haal een song op, en de twee eromheen
		include('logic/select_song.php');
		$templateParser->assign('song' , $currentsong);
		$templateParser->assign('song3_list' , $song3_list);
		$templateParser->display('song.tpl');
		break;
	case 'top100':
		// Haal alle songs op
		include('logic/select_songs.php');
		$templateParser->assign('song_list' , $song_list);
		$templateParser->display('top100.tpl');
		break;
	case 'prijsvraag':
		include('logic/select_quiz.php');
		include('logic/select_song.php');
		$templateParser->assign('quiz' , $quiz);
		$templateParser->assign('quiz_song' , $quiz_song);
		$templateParser->display('prijsvraag.tpl');
		break;
	case 'bn':
		include('logic/select_bn.php');
		$templateParser->assign('bn_list' , $bn_list);
		$templateParser->display('bn.tpl');
		break;
	case 'test':
		// toon hier het zoekresultaat
		include('logic/get_searchresult.php');
		$templateParser->assign('search' , $searchString);
		$templateParser->assign('searchList' , $itemList);
		$templateParser->display('searchresult.tpl');
		break;
	default:
		include('logic/select_songs.php');
		$templateParser->assign('song_list' , $song_list);
		$templateParser->display('songs.tpl');

}




$templateParser->display('footer.tpl');




