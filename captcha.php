<?php 
session_start();
$random = rand(1111111,9999999);
$_SESSION['code']=$random;
$layer = imagecreatetruecolor(70, 30);
$bground = imagecolorallocate($layer, 255, 230, 255);
imagefill($layer, 0, 0, $bground);
$captcha_color = imagecolorallocate($layer,0,0,0);
imagestring($layer, 6, 6, 6, $random, $captcha_color);
header('Content-Type:image/jpeg');
imagejpeg($layer);
?>