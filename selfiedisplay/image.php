<?php
$selfiedir = "../selfiestorage/aktuell";

$bilder = array();

$dir = opendir($selfiedir);
while($bild = readdir($dir)){
	if($bild == "." OR $bild == "..") continue;
	array_push($bilder, $selfiedir."/".$bild);
}
closedir($dir);

//if folder empty, add error image
if(!count($bilder)){
	array_push($bilder, "selfi404.jpg");
}

//randomly select one image
$bild = $bilder[rand(0, count($bilder) - 1)];


//create PHP image from source
$img = imagecreatefromjpeg($bild);
$white = imagecolorallocate($img, 0, 0, 0);

// imagettftext($img, 25, 0, 0, 25, $white, "font.ttf", substr ("Bild$bild" , 0 ,-4 ));

//output image
header('Content-Type: image/jpeg');
imagejpeg($img);
?>
