<?php     include("../common/header.php");   ?>

<!-- from http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/ -->

<!-- Hint change only; the code below is unchanged from upstream. Same as LFI-2,
     POST version: the NULL byte hint is obsolete, but the includes/ prefix is
     still traversable. -->
<?php hint("will include the arg specified in the POST parameter \"library\", appends .php to end - NULL byte is no longer usable, but the includes/ prefix is still traversable (mind the extra level); the appended .php suffix limits you to including PHP files"); ?>


<form action="/LFI-7/index.php" method="POST">
    <input type="text" name="library">
</form>

<?php
include("includes/".$_POST['library'].".php"); 
?>

