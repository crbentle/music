<?php
require_once('mp3file.class.php');
$files = glob('songs/*.{mp3,oog}', GLOB_BRACE);
$arr=array();
  foreach($files as $file) {
	$mp3file = new MP3File($file);
	$duration = $mp3file->getDurationEstimate();
	$data = [ 'song' => $file, 'duration' => MP3File::formatTime($duration) ];
	$arr[] = $data;
  }
 header('Content-Type: application/json');
 echo json_encode($arr);


/*
require_once('mp3file.class.php');
$mp3file = new MP3File("songs/Mad World.mp3");//http://www.npr.org/rss/podcast.php?id=510282
$duration1 = $mp3file->getDurationEstimate();//(faster) for CBR only
$duration2 = $mp3file->getDuration();//(slower) for VBR (or CBR)
echo "duration: $duration1 seconds"."\n";
echo "estimate: $duration2 seconds"."\n";
echo MP3File::formatTime($duration2)."\n";




$option = $_GET['option'];

if ( $option == 1 ) {
    $data = [ 'a', 'b', 'c' ];
    // will encode to JSON array: ["a","b","c"]
    // accessed as example in JavaScript like: result[1] (returns "b")
} else {
    $data = [ 'name' => 'God', 'age' => -1 ];
    // will encode to JSON object: {"name":"God","age":-1}  
    // accessed as example in JavaScript like: result.name or result['name'] (returns "God")
*/
?>