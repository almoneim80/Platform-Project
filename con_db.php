<?php

$dsn = 'mysql:host=localhost;dbname=platform';
$username = 'root';
$password = '';
$option =array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');


$connection = new PDO($dsn, $username, $password,$option);

if(!$connection)
{
	echo 'not connect';
}
?>