<?php     include("../common/header.php");   ?>

<!-- from http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/ -->
<!-- Upstream was include('includes/class_'.addslashes($x).'.php'), which relied
     on NULL byte (%00) truncation of the appended suffix. That trick has been
     dead since PHP 5.3.4, and because there is no slash right after "class_"
     the first path component became "class_.." - not a valid ".." - so
     directory traversal was blocked as well and the challenge was unsolvable.
     Dropping the "includes/class_" prefix while keeping addslashes() and the
     .php suffix preserves both points the challenge makes - that addslashes()
     is not a path security function, and that a concatenated suffix is not a
     defence - and makes it solvable again via php://filter. -->
<?php hint("will include the arg specified in the GET parameter \"class\", appends .php to end - note that addslashes() is not a path security function, and the appended suffix does not stop php://filter"); ?>


<form action="/LFI-4/index.php" method="GET">
    <input type="text" name="class">
</form>

<?php
include(addslashes($_GET['class']).'.php');
?>

