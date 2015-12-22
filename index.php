<?php

$file_arr = scandir(".");

foreach ($file_arr as $file) {
   echo "<b><div class='item'><a href='" . $file . "'>" . $file . "</a></div></b><p>";
}
?>
