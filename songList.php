<?php
$files = glob('songs/*.{mp3,oog}', GLOB_BRACE);
  //foreach($files as $file) {
  //do your work here
  //}
 header('Content-Type: application/json');
 echo json_encode($files);
?>