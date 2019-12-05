<?php

header('Location:imgtexto.php',TRUE,307);

https://mooseplane.net

$hostlink = "https://mooseplane.net/fbuffer/";

//$hostlink = "http://$_SERVER[SERVER_NAME]:$_SERVER[SERVER_PORT]/fbuffer/";
$timgdir = '/var/www/mps/timg/';
$mimgdir = '/var/www/mps/img/';    
$fbufferdir = '/var/www/mps/fbuffer/';
 

$ckff = $_COOKIE['skey'];
$ckcnt = $_COOKIE['scnt'];
$ckcnti = 1;
$imgfchkt = $_POST['imgcname']; 
$imgfchkst = $imgfchkt[0];
$imgth = floatval($_POST['imgtha']);
$imgtw = floatval($_POST['imgtwa']);
$imgtxti = $_POST['texti'];
$imgtxtc = $_POST['colour'];
$imgtxtf = $_POST['font'];
$imgtxtfse = floatval($_POST['fontse']);
//$imgfprv = ($_POST['prev']);
$imgfbdir = ($fbufferdir . $ckff . $imgfchkst);

//include 'imgpdf.php';

//file handling start

$imgftf = fopen($imgfbdir . ".csv", 'a');
fwrite($imgftf, "txt" . "=" . "00" . "=" . $imgtxti . "=" . $imgth . "=" . $imgtw . "=" . $imgtxtc . "=" . $imgtxtf . "=" . $imgtxtfse . "=" . $ckcnt . ",");
fclose($imgftf);



$imgcsv = fopen($imgfbdir . ".csv", 'r');
//if (filesize($imgcsv) >= 1048576) {
//    exit;
//}
//else {
$imgfarr = fgetcsv($imgcsv);


//file handling end


$imgwdir = ($timgdir . $imgfchkst);    

//var_dump ($imgfbdir);

    foreach($imgfarr as $imgfsplit){
    $imgfset = preg_split('|=|', $imgfsplit);

//var_dump ($imgfset);    
    
$imgfbdir = ($fbufferdir . $ckff . $imgfchkst);
$imgfbdirk = ($fbufferdir . $ckff . $imgfset[8] . $imgfchkst);



    if ($imgfset[0] == 'txt'){
        
    $tvali = strlen($imgfset[2]);    
    $tvalis = str_split($imgfset[2], $tvali);
            
    $tvalh = strlen($imgfset[3]);    
    $tvalhs = str_split($imgfset[3], $tvalh);
    
    $tvalw = strlen($imgfset[4]);    
    $tvalws = str_split($imgfset[4], $tvalw);
    
    $tvalc = strlen($imgfset[5]);    
    $tvalcs = str_split($imgfset[5], $tvalc);

    $tvalf = strlen($imgfset[6]);    
    $tvalfs = str_split($imgfset[6], $tvalf);
    
    $tvalfse = strlen($imgfset[7]);    
    $tvalfses = str_split($imgfset[7], $tvalfse);

    }
      
    }
    
    if (file_exists($imgfbdir)){
        $imgphwt = new Imagick($imgfbdirk);
        $imgt = new Imagick($imgfbdirk);
        
    }
    else{
        $imgphwt = new Imagick($imgwdir);
        $imgt = new Imagick($imgwdir);
    }
        $imgphtv = $imgphwt->getimageheight();
        $imgpwtv = $imgphwt->getimagewidth();         
    
        
        $imgtd = new ImagickDraw();
       
   
    $tvalhf = floatval($tvalhs[0] / 100 * $imgphtv);
    $tvalwf = floatval($tvalws[0] / 100 * $imgpwtv);
    
        $imgtd->setfillcolor($tvalcs[0]);
        $imgtd->setfont($tvalfs[0]);
        $imgtd->setfontsize($tvalfses[0]);
        $imgtd->annotation($tvalwf, $tvalhf, $tvalis[0]);
        
        $imgt->drawimage($imgtd);
              
        $imgt->writeimage($imgfbdirk);       
        
        $imglt = ($hostlink . $ckff . $imgfset[8] . $imgfchkt);
        
        
//setcookie("tvalh", "$tvalhs[0]", 0 , "/");
//setcookie("tvalw", "$tvalws[0]", 0 , "/");        
setcookie("tvalc", "$tvalcs[0]", 0 , "/");
setcookie("tvalf", "$tvalfs[0]", 0 , "/");        
setcookie("tvalfse", "$tvalfses[0]", 0 , "/");

//}




    
?>
   
 
