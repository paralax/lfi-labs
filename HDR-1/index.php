<?php     include("../common/header.php");   ?>
<!-- from https://www.owasp.org/index.php/Path_Traversal -->

<?php hint("will include the arg specified in the HTTP Cookie parameter \"TEMPLATE\""); ?>
<?php
$template = 'blue.php';
if ( array_key_exists( $_COOKIE['TEMPLATE'] ) )
   $template = $_COOKIE['TEMPLATE'];
include ( dirname(FILE) . "/" . $template );
?>
