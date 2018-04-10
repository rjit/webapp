<?php

// server info
$server = 'phpdb.ciphlfrmcc2e.us-west-2.rds.amazonaws.com';
$user = 'root';
$pass = 'root1234';
$db = 'players';

// connect to the database
$mysqli = new mysqli($server, $user, $pass, $db);

// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);

?>
