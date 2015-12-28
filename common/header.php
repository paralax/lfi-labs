<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- via http://forums.phpfreaks.com/topic/99601-click-to-reveal-text/ -->
<script type="text/javascript">

function displayPara(fieldID, displayBol) {

  var paraObj = document.getElementById(fieldID);
  var showObj = document.getElementById(fieldID+'_show');
  var hideObj = document.getElementById(fieldID+'_hide');

  paraObj.style.display = (displayBol)? '' : 'none' ;
  showObj.style.display = (!displayBol)? '' : 'none' ;
  hideObj.style.display = (displayBol)? '' : 'none' ;

}

</script>

<title>LFI labs</title>
    <h1>LFI labs</h1>
</head>

<body bgcolor="#FFFFFF">
<font size="3" color="#0a0a0a">

<?php
function hint($value) {
    echo "<a href=\"#\" onclick=\"displayPara('para1', false);\" id=\"para1_hide\" style=\"display:none;\">Hide Hint</a>";
    echo "<a href=\"#\" onclick=\"displayPara('para1', true);\" id=\"para1_show\" style=\"\">Show Hint</a>";
    echo "<div id=\"para1\" style=\"display:none;\">$value</div>";
}
?>