<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
will include the arg specified in the POST parameter "page"
<?php
include("../common/header.php");
include($_POST["page"]);
?>
