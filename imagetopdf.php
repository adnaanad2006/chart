<?php

//exec('gs -dSAFER -dBATCH -sDEVICE=jpeg -dTextAlphaBits=4 -dGraphicsAlphaBits=4 -r300 -s OutputFile=whatever.jpg pdf/1428263970.pdf');

$pdf_file   = 'hehe.pdf';
$save_to    = 'demo.jpg';

$pdf = 'hehe.pdf';
$image = new Imagick($pdf);
$image->resizeImage( 200, 200, imagick::FILTER_LANCZOS, 0);
$image->setImageFormat( "png" );
 $thumbnail = $image->getImageBlob();
echo "<img src='image/png;base64,".base64_encode($thumbnail)."' /><br />"

?>