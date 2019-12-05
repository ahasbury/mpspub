<html>
    <head style="display:none;">
       
        <title>Filter Preview</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mainstyle.css">
        
        
</head>
<body class="siframe">
<?php
header('Location:imgedit.php',TRUE,307);

$hostlink = "https://mooseplane.net/fbuffer/";
//$hostlink = "http://$_SERVER[SERVER_NAME]:$_SERVER[SERVER_PORT]/fbuffer/";
$timgdir = '/var/www/mps/timg/';
$mimgdir = '/var/www/mps/img/';    
$fbufferdir = '/var/www/mps/fbuffer/';
 
$ckcnt = $_COOKIE['scnt'];
$ckff = $_COOKIE['skey'];
$imgfchk = $_POST['imgcname'];
$imgfchkfp = $imgfchk[0];
$imgfsel = $_POST['filters'];
$imgfrng = floatval($_POST['imgfrng']);
$imgfprv = ($_POST['prev']);
$imgfbdir = $fbufferdir . $ckff;
$imgfbdirtx = $fbufferdir . $ckff . $imgfchk[0];

$imgftf = fopen($imgfbdirtx . ".csv", 'a');
fwrite($imgftf, $imgfsel . "=" . $imgfrng . "=" . " " . "=" . "90" . "=" . "40" . "=" . "black" . "=" . "OpenSans-Regular.ttf" . "=" . "24" . "=" . $ckcnt . ",");
fclose($imgftf);

$imgcsv = fopen($imgfbdirtx . ".csv", 'r');
//if (filesize($imgfbdirtx) >= 1048576) {
//    exit;
//}
//else {
$imgfarr = fgetcsv($imgcsv);





//file handling end

if(file_exists($imgfbdirtx)){

$imgwdir = ($imgfbdir . $imgfchkfp);    
    
}

else{
$imgwdir = ($timgdir . $imgfchkfp);    


}
if ($imgfsel == 'def') {
   
        $imgb = new Imagick($imgwdir);
        $imgb->writeimage($imgfbdirtx);       
            
}
elseif($imgfsel == 'blur') {  

    foreach($imgfarr as $imgfsplit){
    $imgfset = preg_split('|=|', $imgfsplit);    
    if ($imgfset[0] == 'blur'){
    $fvall = strlen($imgfset[1]);    
    $fvalb = str_split($imgfset[1], $fvall);
    
    } 
 
    }    
  
        $imgb = new Imagick($imgwdir);
        $imgb->blurimage(3,$fvalb[0]);     
        $imgb->writeimage($imgfbdirtx);       
        
        $imgln = ($hostlink . $ckff . $imgfchkfp);
        
    
}elseif($imgfsel == 'sep'){      
    

    foreach($imgfarr as $imgfsplit){
    $imgfset = preg_split('|=|', $imgfsplit);    
    if ($imgfset[0] == 'sep'){
    $fvall = strlen($imgfset[1]);    
    $fval = str_split($imgfset[1], $fvall);
    
    } 
 
    }    
       
        $imgs = new Imagick($imgwdir);   
        $imgs->sepiatoneimage($fval[0]);
        $imgs->writeimage($imgfbdirtx);
 
            
         $imgls = ($hostlink . $ckff . $imgfchkfp);   

         
//         echo "<img class=\"siframeimg\" src=\"$imgls\">";   
         
          

}elseif($imgfsel == 'con'){      
    

    foreach($imgfarr as $imgfsplit){
    $imgfset = preg_split('|=|', $imgfsplit);    
    if ($imgfset[0] == 'con'){
    
    $fvall = strlen($imgfset[1]);    
    $fval = str_split($imgfset[1],$fvall);
    
    } 
 
    }    
  
        $imgs = new Imagick($imgwdir);   
        $imgs->contrastimage($fval[0]);
        $imgs->writeimage($imgfbdirtx);
 
            
         $imgls = ($hostlink . $ckff . $imgfchkfp);   

         
         echo "<img class=\"siframeimg\" src=\"$imgls\">";   
         
 
//    }    
                
}

?>
    
    </body>
</html>
