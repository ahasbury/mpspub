<html>
  <head>
       
        <title>Multi Download</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mainstyle.css">
        <header class="pgalhead1">
        <h1><img src="logosmall.jpg" class="headlogo1"</img>Multiple Download</h1>
        <p class="halttext"></>    
       </header>  
    <link rel="stylesheet" type="text/css" href="mainstyle.css">
    <body class="photosbackground">    
        <p>Your Download Should Begin Automatically</p>
    	<br> </br>
        <a class="rtnbtn" a href="https://mooseplane.net/" formtarget="_blank" >Return to Gallery</a>
        <?php
        
   $hostlink = "https://mooseplane.net/fbuffer/";
   $ckff = $_COOKIE['skey'];
//   $hostlink = "http://$_SERVER[SERVER_NAME]:$_SERVER[SERVER_PORT]/fbuffer/";
   $imgdir4d = '/var/www/mps/img/';
   $ckdir = mkdir("/var/www/mps/fbuffer/" . $ckff, 0777);
   $fbufferdir = ('/var/www/mps/fbuffer/' . $ckff . "/");
   $zip = new ZipArchive();
   $filename = ($fbufferdir . "images" . $ckff . ".zip");
//   $filename = $fbufferdir . $fnamedir;
   $imgconfirm = $_POST['imgfilepost'];
   
//                var_dump($imgconfirm);


                 if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
                     exit("cannot open <$filename>\n");
                 }
                foreach($imgconfirm as $chkval){
                $imgfnamedir = ($imgdir4d . $chkval);
                $imgfname = ($chkval);        
                $zip->addFile($imgfnamedir, $imgfname);    
                
                
                }
                $dlink = (preg_filter("/\/var\/www\/mps\/fbuffer\//i" , $hostlink , $filename));
                echo "<iframe name=\"dwniframe\" src=$dlink style=\"border:none;\"></iframe>";
 
                                
		
                
?>

    
    </body>
</html>                
