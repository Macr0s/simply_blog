<?php

	if ( !defined("is_blog") ){ exit; }
	
	$con = mysql_connect(db_server,db_user,db_pass);
	
	mysql_select_db(db_data);

?>
