<?php
$imgData = str_replace(' ','+',$_POST['image']);
$imgData =  substr($imgData,strpos($imgData,",")+1);
$imgData = base64_decode($imgData);
// Path where the image is going to be saved
$filePath = $_SERVER['DOCUMENT_ROOT'].'cctv/images/temp2.png';
// Write $imgData into the image file
$file = fopen($filePath, 'w');
fwrite($file, $imgData);
fclose($file);
echo 'success';
?>