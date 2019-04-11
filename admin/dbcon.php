<?php
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_select_db('capstone',mysql_connect('localhost','root',''))or die(mysql_error());
?>
