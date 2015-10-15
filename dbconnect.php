<?php
if(!mysql_connect("localhost","root",""))
{
	die(' Reconnect "waliwo obuzibu" ! --> '.mysql_error());
}
if(!mysql_select_db("tusha_db"))
{
	die('Reconnect "waliwo obuzibu" ! --> '.mysql_error());
}

?>