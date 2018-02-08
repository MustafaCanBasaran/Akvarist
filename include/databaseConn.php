<?php 
mysql_connect('localhost', 'root', '')or die("No Connection");
mysql_select_db('akvarist')or die('Database Not Found');
mysql_query("SET NAMES UTF8");
?>
