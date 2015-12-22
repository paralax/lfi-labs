<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
will include the arg specified in the GET parameter "page"
<?php
include("../common/header.php");
include($_GET["page"]);
?>
