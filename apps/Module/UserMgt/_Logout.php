<?php

//call config file for DB connection details
require_once '../../Control/config.php';

session_destroy();

// Redirect to view page
header("Location: " . "/ITMS/index.php");

?>
