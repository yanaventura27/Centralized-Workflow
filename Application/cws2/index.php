<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");

echo "
<body>
<div id='wrapper'>
<div id='top'>Central Workflow System</div>
<div id='content'>
<div id='left-nav'>";
include("left-nav.php");
?>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
