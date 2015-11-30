<?php
	$con = mysql_connect("localhost", "root", "");
	if (!$con) 
	{
		die("Can't connect: ".mysql_error());
	}
	$db = mysql_select_db("airplanes", $con);
	if (!$db) 
	{
		die("Can't select the database: ".mysql_error());
	}
	mysql_query("set names utf8");
?>