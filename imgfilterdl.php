<html>
  <head>
       
        <title>Editied Image HQ Download</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mainstyle.css">
        <header class="pgalhead1">
        <h1><img src="logosmall.jpg" class="headlogo1"</img>Editied Image HQ Download</h1>
        <p class="halttext"></>    
       </header>  
    <link rel="stylesheet" type="text/css" href="mainstyle.css">
    <body class="photosbackground">    
        
        <p>Your Download Should Begin Automatically</p>
    	        
        <br> </br>
        <a class="rtnbtn" a href="https://mooseplane.net/" formtarget="_blank" >Return to Gallery</a>
        
        <?php
//header('Location:imgedit.php',TRUE,307);        
   $hostlink = "https://mooseplane.net/fbuffer/";
//$hostlink = "http://$_SERVER[SERVER_NAME]:$_SERVER[SERVER_PORT]/fbuffer/";
$timgdir = '/var/www/mps/timg/';
$mimgdir = '/var/www/mps/img/';    
$fbufferdir = '/var/www/mps/fbuffer/';
$ckff = $_COOKIE['skey']; 
$imgfchk = $_POST['imgcname']; 
$imgfchksd = $imgfchk[0];
$imgfsel = $_POST['filters'];
$imgfrng = floatval($_POST['imgfrng']);         
$imgdwn = ($_POST['download']);
$imgfbdir = $fbufferdir . $ckff . $imgfchksd;
$imgwdir = $mimgdir . $imgfchksd;


    $imgzipdir = $fbufferdir . "hq" . $ckff . $imgfchksd;
    $imgzip =  "hq" . $ckff .$imgfchksd;
    $imgzname = $fbufferdir . "images" . rand() . ".zip";

$imgcsv = fopen($imgfbdir . ".csv", 'r');
$imgfarr = (fgetcsv($imgcsv));

$img = new Imagick($imgwdir);

$fbdirl = ($fbufferdir . "hq" . $ckff . $imgfchksd);

for ($itxtc = 0; $itxtc < count($imgfarr); ++$itxtc){  

$imgfset = PREG_SPLIT('|=|', $imgfarr[$itxtc]);      

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
        
    
        $imgphwt = new Imagick($imgwdir);      
    
        $imgphtv = $imgphwt->getimageheight();
        $imgpwtv = $imgphwt->getimagewidth();         
        
        $imgptv = ($imgphtv + $imgpwtv);
        
                
        $imgtd = new ImagickDraw();
       
   
    $tvalhf = floatval($tvalhs[0] / 100 * $imgphtv);
    $tvalwf = floatval($tvalws[0] / 100 * $imgpwtv);
     
    
    $tvalfsc = floatval($tvalfses[0] / 500 * $imgptv);
   
    
        $imgtd->setfillcolor($tvalcs[0]);
        $imgtd->setfont($tvalfs[0]);
        $imgtd->setfontsize($tvalfsc);
        $imgtd->annotation($tvalwf, $tvalhf, $tvalis[0]);
        
        $img->drawimage($imgtd);
    

}

    if ($imgfset[0] == 'sep'){
        
    $fvall = strlen($imgfset[1]);   
    $fvalb = str_split($imgfset[1], $fvall);

    $img->sepiatoneimage($fvalb[0]);
        
}
    if ($imgfset[0] == 'blur'){
        $imgfsel++;

        $fvall = strlen($imgfset[1]);   
    $fvalb = str_split($imgfset[1], $fvall);
       
    
    $imgphwt = new Imagick($imgwdir);      
    
        $imgphtv = $imgphwt->getimageheight();
        $imgpwtv = $imgphwt->getimagewidth();         
        
        $imgptv = ($imgphtv + $imgpwtv);
        
        
    $img->blurimage(15, $fvalb[0] / 100 * $imgptv);     

}
    if ($imgfset[0] == 'con'){


    $fvall = strlen($imgfset[1]);   
    $fvalb = str_split($imgfset[1], $fvall);
    
    $fvalbc = floatval($fvalb[0] / 100 * $imgptv);
                         

        $img->contrastimage($fvalbc);

    }        
        

}


$img->writeimage($fbdirl);


        $zip = new ZipArchive();
        
               
                 if ($zip->open($imgzname, ZipArchive::CREATE)!==TRUE) {
                     exit("cannot open <$imgzip>\n");
                 }
                 else{
                $zip->addFile($imgzipdir, $imgzip);
                 }
                $dlink = (preg_filter('/\/var\/www\/mps\/fbuffer\//i' , $hostlink , $imgzname));
                $imgls = ($hostlink . $ckff . $imgfchksd);   

                   
                
        
                echo "<iframe name=\"dwniframe\" src=\"$dlink\" style=\"border:none;\"></iframe>";

    
           
                
        
		

?>

    
    </body>
</html>                
