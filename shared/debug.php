<?php
	
	if ( !defined("is_blog") ){ exit; }
	
	class debug {
	
		function send($from, $error){
			$to = "matte0809@gmail.com";
			$subject = "Errore nel Sistema di Bloging";
			$message = " � stato rivelato il seguente errore: " . $error. "/n";
			$message .= "user-agent �: " . $_SERVER['HTTP_USER_AGENT'] . "/n";
			$message .= "ip del client: " . $_SERVER['REMOTE_ADDR'] . "/n";
			$message .= "PHP Error: " . $php_errormsg;
			$message .= json_encode($_SERVER);
			$headers = "From:" . $from;
			mail($to,$subject,$message,$headers);
			
			$to = $from;
			mail($to,$subject,$message,$headers);
		}
		
	}

?>
