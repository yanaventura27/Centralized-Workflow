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

echo "
</div>
<div id='main'>


<head>
  <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Raleway' />
  <link rel='stylesheet' type='text/css' href='assets/css/demo.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='assets/css/form-builder.min.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='assets/css/form-render.min.css'>
  <meta name='viewport' content='user-scalable=no, width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1'>
</head>

<body>
  <div class='content2'>
    <div class='build-wrap'></div>
    <div class='render-wrap'></div>
    <button id='edit-form'>Edit Form</button>
  </div>
  <script src='assets/js/jquery.min.js'></script>
  <script src='assets/js/form-builder.min.js'></script>
  <script src='assets/js/form-render.min.js'></script>
  <script src='assets/js/demo.js'></script>
</body>


</div>
<div id='bottom'></div>
</div>
</body>
</html>";

?>
