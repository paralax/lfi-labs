<!-- from http://hakipedia.com/index.php/Local_File_Inclusion -->
will include the arg specified in the POST parameter "file", strips prepended "../" strings. encode / as percent 2 F (%2F)
<?php
   $file = str_replace('../', '', $_POST['file']);
   if(isset($file))
   {
       include("pages/$file");
   }
   else
   {
       include("index.php");
   }
?>
