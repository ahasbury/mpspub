<?php

$imgtitle = $_POST['imgtitle'];
$imgtags = $_POST['imgtags'];
$imgcat = $_POST['imgcat'];
$imgflink = $_POST['imgflink'];
//$imgaflag = "All";
$wrkdir = "/var/www/mps/timg/";

//$imgtfile = $wrkdir . $imgflink . ".txt";
$imgcsvt = $wrkdir . $imgflink . "tag" . ".csv";
$imgtwrt = fopen($imgcsvt, 'w');
$imgcatcsv = fgetcsv($imgtwrt);


fwrite($imgtwrt, $imgcatcsv[0] . $imgflink . ",");
fwrite($imgtwrt, $imgcatcsv[1] . $imgtitle . ",");
fwrite($imgtwrt, $imgcatcsv[2] . $imgcat . ",");
fwrite($imgtwrt, $imgcatcsv[3] . $imgtags . ",");

?>


