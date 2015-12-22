<!-- from http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/ -->
will include the arg specified in the POST parameter "library", appends .php to end, use null byte %00 to bypass
<?php
include("../common/header.php");
include("includes/".$_POST['library'].".php"); 
?>

