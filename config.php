<?php
$databaseHost = 'localhost';
$databaseName = 'barokah_minimarket';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName)or die('Error Connection Network');
?>