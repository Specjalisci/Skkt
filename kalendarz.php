<?php
	if(isset($_GET['date']) )
	{
		$data = $_GET['date'];
		$data = str_replace('-', '.', $data);
		echo $data;
		$handle = mysql_connect("localhost", "root", "spec123");
		if(!$handle) die("Nie łącze z bazą: ".mysql_error());
		if(!mysql_select_db("skkt", $handle)) die("Nie można wybrać bazy: ".mysql_error());
		if( mysql_query("SELECT `nazwa`, `uwagi`, `organizator` FROM `rajdy` WHERE `data`='$data'", $handle) ===false )
			die("Błąd zapytania SQL: ".mysql_error());
		mysql_close($handle);
	}
	else
	{
		echo "Bład";
	}
?>
