<!-- from http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/ -->
will include the arg specified in the GET parameter "library", appends .php to end
<?php
include("../common/header.php");
include("includes/".$_GET['library'].".php"); 
?>

