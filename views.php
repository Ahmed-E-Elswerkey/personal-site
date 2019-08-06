<?php 	
	include_once 'mysqli.php';
	if(isset($_REQUEST['t'])){
		$site = $_REQUEST['t'];
		if($site == 'shanta'){
			$GLOBALS['conn']->query("UPDATE projects SET views = views+1 WHERE name='Shanta'");
			echo "ok shanta";
		}
		if($site == 'piano'){
			$GLOBALS['conn']->query("UPDATE projects SET views = views+1 WHERE name='Piano'");
			echo "ok piano";
		}
		if($site == 'malvin'){
			$GLOBALS['conn']->query("UPDATE projects SET views = views+1 WHERE name='Malvin'");
		}
		if($site == 'draw'){
			$GLOBALS['conn']->query("UPDATE projects SET views = views+1 WHERE name='Draw'");
		}
	}
 ?>