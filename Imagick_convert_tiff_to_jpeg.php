<?php
// Create new object
$im = new Imagick('/var/www/html/img/MARBIBM.TIF');

$resolution = $im->getImageResolution();  
//Adjust resolution of width, if resolution of width and height were not same.
$im->resizeImage($im->getImageWidth() / ($resolution['x'] / $resolution['y']),
	$im->getImageHeight(), imagick::FILTER_MITCHELL, 1, false); 
$im->setImageFormat('jpg'); 

//write image
$im->writeImage('/var/www/html/img/new_image.jpg');

//display image
header("Content-type: image/jpeg");
echo $im->getImageBlob();

?>
