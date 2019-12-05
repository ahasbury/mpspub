<html>

    <body class="photosbackground">
    <div class="imgmainf">           

<?php      
   $imgdir3 = '/var/www/mps/img/';     
   $imgdir2 = '/var/www/mps/timg/';    
   $imgfiledir2 = (glob($imgdir2.'*.[jJ][pP][gG]'));     
   $hostlink = "https://mooseplane.net/timg/"; 
//   $hostlink = "http://$_SERVER[SERVER_NAME]:$_SERVER[SERVER_PORT]/timg/";
   $imgcatsd = $_POST['imgcat'];

   
foreach ($imgfiledir2 as $imgfiles){   

$imgcsvt = $imgfiles . "tag" . ".csv";
$imgtwrt = fopen($imgcsvt, 'r');
$imgcatcsv = fgetcsv($imgtwrt);
    
$timgalink = array (preg_filter('/\/var\/www\/mps\/timg\//i' , $hostlink , $imgfiles));
$timgfname = array (preg_filter('/\/var\/www\/mps\/timg\//i' , '' , $imgfiles));

echo "<div class=\"imgcontout\">";
echo "<input type=\"checkbox\" name=\"imgcname[]\" id=$timgfname[0] class=\"imginput\" value=$timgfname[0]></input>";
echo "<label for=$timgfname[0] class=\"imglabel\" title=$imgcatcsv[1]><img src=$timgalink[0] class=\"imgcontin\" alt='$imgcatcsv[3]'></img></label>";
echo "<span class=\"imggtxt\">$imgcatcsv[1]</span>";
echo "</div>";
  
 
}


echo "<footer class=\"pgalfoot1\">";
echo "<li class=\"sellst\"><input type=\"submit\" value=\"Download Multiple\" formaction=\"imgconfirmdl.php\" class=\"dwnbtn\"></input>";


echo "<input type=\"submit\" value=\"Edit Image\" formaction=\"imgedit.php\" class=\"afbtn\"></input>";
//echo "<input type=\"submit\" value=\"Add Text (Beta)\" formaction=\"imgtexto.php\" class=\"afbtn\"></input>";
echo "<input type=\"reset\" value=\"Clear Selection\" class=\"rstbtn\"></input></li>";


echo "<script> </script>";
echo "</footer>";


?>
    </div>
       
