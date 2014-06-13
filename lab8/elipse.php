<?php 
// Create a blank image.
$image = imagecreatetruecolor(400, 300);

// Select the background color.
$bg = imagecolorallocate($image, 50, 50, 50);

// Fill the background with the color selected above.
imagefill($image, 0, 0, $bg);

// Choose a color for the ellipse.
$col_ellipse = imagecolorallocate($image, 0, 200, 0);

// Draw the ellipse.
imageellipse($image, 100, 150, 200, 200, $col_ellipse);

imageellipse($image, 300, 150, 200, 200, $col_ellipse);

imageellipse($image, 100, 150, 50, 50, $col_ellipse);

imageellipse($image, 300, 150, 50, 50, $col_ellipse);

// Output the image.
header("Content-type: image/png");
imagepng($image); 
?>