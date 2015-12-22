<!-- from http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/ -->
will include the arg specified in the POST parameter "class", appends .php to end, attack with null byte
<?php
include("../common/header.php");
include('includes/class_'.addslashes($_POST['class']).'.php');
?>

