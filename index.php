<?php     include("common/header.php");   ?>

<?php

$file_arr = scandir(".");

function startsWith($haystack, $needle)
{
     $length = strlen($needle);
     return (substr($haystack, 0, $length) === $needle);
}

foreach ($file_arr as $file) {
    if (startsWith($file, ".")) { continue ; }
    echo "<b><div class='item'><a href='" . $file . "'>" . $file . "</a></div></b><p>";
}
?>
