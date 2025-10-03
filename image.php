<?php

// header("Content-Type: image/png");
$im = @imagecreate(200, 80)
    or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 255, 255, 255);
$text_color = imagecolorallocate($im, 0, 0, 0);
imagestring($im, 5, 50, 25, "Hello, world!", $text_color);
imagepng($im);
// imagepng($im,"uploads/hello_world.png");
imagedestroy($im);  
?>

<img src="uploads/hello_world.png" alt="Hello World Image">