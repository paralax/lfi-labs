<?php     include("../common/header.php");   ?>
<!-- from http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/ -->

<!-- Hint change only; the code below is unchanged from upstream. The original
     hint pointed at NULL byte (%00) truncation, which has been dead since PHP
     5.3.4. The challenge is still solvable: PHP collapses ".." path components
     textually, and the component right after "includes/" is a clean "..", so
     the prefix can be climbed out of. The forced .php suffix is the real
     constraint - you can only include and execute PHP files, not read non-PHP
     files such as /etc/passwd. -->
<?php hint("will include the arg specified in the GET parameter \"library\", appends .php to end - NULL byte is no longer usable, but the includes/ prefix is still traversable (mind the extra level); the appended .php suffix limits you to including PHP files"); ?>

<form action="/LFI-2/index.php" method="GET">
    <input type="text" name="library">
</form>

<?php
include("includes/".$_GET['library'].".php"); 
?>

