<?php
	if(isset($_GET['date']) )
	{
		$data = $_GET['date'];
		$data = str_replace('-', '.', $data);
		//echo $data;
		$handle = mysql_connect("localhost", "root", "spec123");
		if(!$handle) die("Nie łącze z bazą: ".mysql_error());
		if(!mysql_select_db("skkt", $handle)) die("Nie można wybrać bazy: ".mysql_error());
		mysql_query("SET CHARSET utf8"); // polskie znaki
		mysql_query("SET NAMES `utf8` COLLATE `utf8_general_ci`"); // polskie znaki 
		$qr = "SELECT `nazwa`, `uwagi`, `organizator` FROM `rajdy` WHERE `data`='$data'";
		if( ($wynik = mysql_query($qr, $handle)) ===false )
			die("Błąd zapytania SQL: ".mysql_error());
		$json = "{";
		if(mysql_num_rows($wynik))
		{
			$dane = mysql_fetch_assoc($wynik);
			//echo $dane['nazwa'];
			//echo $dane['uwagi'];
			//echo $dane ['organizator'];
			foreach((array)$dane as $key => $value)
			{
				$json.="\"$key\":\"$value\"";
				if($key!='organizator') $json.=",";
			}
			
		}
		else
		{
			$json.='"nazwa":"brak"';
		}
		$json.="}";
		echo $json;
		mysql_close($handle);
	}
	else
	{
		echo "none";
	}
?>