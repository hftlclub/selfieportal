<?php
// ini_set('display_errors', TRUE);
// error_reporting(E_ALL); 
function get_files($dir, $endungen) {
  $all = glob($dir.'/*');
  $file = $all[rand(0, count($all) - 1)];
  $path_parts = pathinfo($file);
  if (is_file($file) && isset($path_parts['extension']) && in_array($path_parts['extension'],$endungen)) {
    return $file;
  }
  
  if (is_dir($file)) {
    return get_files($file,$endungen);
  }

  return "selfi404.jpg";
}

$selfiedir = "../archiv/";
$bild = get_files($selfiedir, array('jpg'));

//create PHP image from source
$img = imagecreatefromjpeg($bild);

//output image
header('Content-Type: image/jpeg');
imagejpeg($img);
?>
