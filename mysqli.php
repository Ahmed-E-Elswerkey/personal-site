<?php
	if(session_status() == PHP_SESSION_NONE)
		session_start();
	if($_SERVER['HTTP_HOST'] == "ahmedelswerkey.ezyro.com"){
	    $conn = new mysqli("sql207.ezyro.com","ezyro_20244888","24682468951portfolio","ezyro_20244888_portfolio");
	    // if($conn)
	    	// echo "horray1";
	}
	else if($_SERVER['HTTP_HOST'] == "ahmedemad.net"){
	    $conn = new mysqli("ahmedemad.net.mysql","ahmedemad_net","Helloone@1","ahmedemad_net");
	    $to = "ahmedelswerkey@gmail.com";
	    $subject = "test";
	    $txt = "test dot test at test";
	    $headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'To: <ahmedelswerkey@gmail.com>' . "\r\n";
		$headers .= 'From: notify@ahmedemad.net' . "\r\n";
	    mail($to,$subject,$txt,$headers);
	    // if($conn)
	    	// echo "horray";
	}
	else {
	    $conn = new mysqli("localhost","root","","portfolio");
	    // if($conn)
	    // 	echo "horray2";
	}