<?php     include("../common/header.php");   ?>
<!-- from https://www.owasp.org/index.php/Path_Traversal -->

<?php hint("will include the arg specified in the HTTP Cookie parameter \"TEMPLATE\""); ?>
<?php
$template = 'blue.php';
if ( is_set( $_COOKIE['TEMPLATE'] ) )
   $template = $_COOKIE['TEMPLATE'];
include ( "/Users/josenazario/templates/" . $template );
?>