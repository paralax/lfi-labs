<?php     include("../common/header.php");   ?>
<!-- from https://www.owasp.org/index.php/Path_Traversal -->

<?php hint("will include the arg specified in the HTTP Cookie parameter \"TEMPLATE\""); ?>
<?php
/* Two defects made this challenge unexploitable on any PHP version:
   1) array_key_exists() was called with a single argument (a warning and a
      NULL return under PHP 7), so the condition was always false and
      $_COOKIE['TEMPLATE'] was never used. This came from the 2016 change for
      issue #2 that replaced is_set(), but it was the wrong fix.
   2) FILE in dirname(FILE) is an undefined constant and was meant to be
      __FILE__. PHP 7 treats the undefined constant as the string "FILE", so
      dirname() returned ".", which only worked because the CWD happened to be
      the script directory.
   Using isset() and __FILE__ restores the intent of the challenge: the Cookie
   is untrusted input too. */
$template = 'blue.php';
if ( isset($_COOKIE['TEMPLATE']) )
   $template = $_COOKIE['TEMPLATE'];
include ( dirname(__FILE__) . "/" . $template );
?>
