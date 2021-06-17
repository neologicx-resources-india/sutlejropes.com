<?php
  
// Store the file name into variable
$file = 'iso.pdf';
$filename = 'iso.pdf';
// Header content type
header('Content-type: application/pdf');
  
header('Content-Disposition: inline; filename="' . $filename . '"');
 

header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');
       header("Content-Type: application/download");

// Read the file
@readfile($file);

?>

