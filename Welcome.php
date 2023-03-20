<?php

$time = date('H');

if($time >= 06 && $time < 12){
   $background_image = 'image/morning.png';
   echo '<h1> Goede morgen! <br> Het is nu: '. date('H').':'.date('i').'<h1/>';
   echo '<style> body { background-image: url(' .$background_image. ')}; </style>';
}elseif($time >= 12 && $time < 18){
   $background_image = 'image/afternoon.png';
   echo '<h1> Goede middag! <br> Het is nu: '. date('H').':'.date('i').' <h1/>';
   echo '<style> body { background-image: url(' .$background_image. ')}; </style>';
}elseif($time >= 18 && $time < 24){
   $background_image = 'image/evening.png';
   echo '<h1> Goede avond! <br> Het is nu: '. date('H').':'.date('i').' <h1/>';
   echo '<style> body { background-image: url(' .$background_image. ')}; </style>';
}elseif($time >= 00 && $time < 06){
   $background_image = 'image/night.png';
   echo '<h1> Goede nacht! <br> Het is nu: '. date('H').':'.date('i').' <h1/>';
   echo '<style> body { background-image: url(' .$background_image. ')}; </style>';
}
