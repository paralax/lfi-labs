<!-- from http://hakipedia.com/index.php/Local_File_Inclusion -->
will include the arg specified in the GET parameter "file", strips prepended "../" strings
<?php
   $file = str_replace('../', '', $_GET['file']);
   if(isset($file))
   {
       include("pages/$file");
   }
   else
   {
       include("index.php");
   }
?>
