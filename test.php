<?php

if (isset($_POST['jstest'])) {
  $nojs = FALSE;
  } else {
  // create a hidden form and submit it with javascript
  echo '<form name="jsform" id="jsform" method="post" style="display:none">';
  echo '<input name="jstest" type="text" value="true" />';
  echo '<script language="javascript">';
  echo 'document.jsform.submit();';
  echo '</script>';
  echo '</form>';
  // the variable below would be set only if the form wasn't submitted, hence JS is disabled
  $nojs = TRUE;
}
if ($nojs){
  //JS is OFF, do the PHP stuff


echo "js is off</br>";
}



?>