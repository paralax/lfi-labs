<?php     include("../common/header.php");   ?>

<!-- from http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/ -->
<!-- Same as LFI-4, POST version: upstream relied on NULL byte truncation,
     which is dead under PHP 7, and the "class_" prefix blocked traversal too.
     Dropping the prefix keeps addslashes() and the .php suffix and makes the
     challenge solvable again via php://filter. -->
<?php hint("will include the arg specified in the POST parameter \"class\", appends .php to end - note that addslashes() is not a path security function, and the appended suffix does not stop php://filter"); ?>

<form action="/LFI-9/index.php" method="POST">
    <input type="text" name="class">
</form>

<?php
include(addslashes($_POST['class']).'.php');
?>

