<?php
session_start();
// include everything:
require_once "lib/IT/IT.php";
require_once("dbh.php");
require_once("user.php");
require_once("Question.php");
try {
	// include config:
	require_once("config.php");
} catch(Exception $e) {
	die("config.php not found. Set up everything in the config-sample.php and rename it to config.php!");
}
// bootstrap the application:
DBH::connect();

