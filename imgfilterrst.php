<html>
    <html>
    <head style="display:none;">
       
        <title>Filter Preview</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mainstyle.css">
        </head>
<body class="siframe">

<?php
https://mooseplane.net
header('Location:imgedit.php',TRUE,307);

$hostlink = "https://mooseplane.net/fbuffer/";
// $hostlink = "http://$_SERVER[SERVER_NAME]:$_SERVER[SERVER_PORT]/fbuffer/";
 $timgdir = '/var/www/mps/timg/';
 $mimgdir = '/var/www/mps/img/';    
 $fbufferdir = '/var/www/mps/fbuffer/';
$imgfrchk = $_POST['imgcname']; 
$imgfrchksr = $imgfrchk[0]; 
$imgrst = $_POST['reset'];
$ckff = $_COOKIE['skey'];
$imgdefst = ("def" . "=" . "0" . "=" . " " . "=" . "90" . "=" . "40" . "=" . "black" . "=" . "OpenSans-Regular.ttf" . "=" . "24" . "=" . $ckcnt . ",");
//echo $imgfrchk;
//echo $imgrst;

if ($imgrst == 'Reset'){
        $value1 = $timgdir . $imgfrchksr;
        $fbdirl = $fbufferdir . $ckff . $imgfrchksr;
        $fbdircsv = $fbufferdir . $ckff . $imgfrchksr . ".csv";
        
        
        $imgr = new Imagick($value1);
//        $imgr->getimage($value1);
        $imgr->writeimage($fbdirl);  

$imgcsvrst = fopen($fbdircsv, 'w');
fwrite($imgcsvrst, $imgdefst);

$rimgn = $ckff . $imgfrchksr;

$imglr = ($hostlink . $rimgn);  
        
       
//         echo "<img class=\"siframeimg\"src=\"$imglr\">";   
         
}

?>
    
    </body>
</html>
