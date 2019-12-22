<?php
  $data = "";
  foreach($_REQUEST as $key=>$value)
  {
	$data .= "$key=>$value \n";  
  }

  $fp = fopen("text.txt","w");
  fwrite($fp,$data);
  fclose($fp); 
?>