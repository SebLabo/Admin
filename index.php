<?php
/**
 * Created by PhpStorm.
 * User: webqa
 * Date: 21/07/2017
 * Time: 17:31
 */
?>
<html>
<head>
    <link rel="stylesheet" href="CSS/main.css">
</head>
<body>
<?php
include "Library/My/divers.php";
include "Master.php";
?>
<div id='matrix'>
    <p>Seb</p>
</div>
<?php
$master = new Master_Dispatch($_SERVER['REQUEST_URI']);
?>
</body>
</html>