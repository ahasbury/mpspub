<html>

    <header>    
<?php include 'mph1.php'; ?>    
    </header>
    <body class="photosbackground">
    <div class="imgmainf">           
<?php      
   $imgdir3 = '/var/www/mps/img/';     
   $imgdir2 = '/var/www/mps/timg/';    
   $imgfiledir2 = (glob($imgdir2.'*.[jJ][pP][gG]'));     
   $hostlink = "https://mooseplane.net/timg/"; 
//   $hostlink = "http://$_SERVER[SERVER_NAME]:$_SERVER[SERVER_PORT]/timg/";
   $imgcatsd = $_POST['imgcat'];

echo "<form method=\"POST\" target=\"_self\">";   

//echo "<div class=\"sformw\">";
//include 'timgcatl.php';
//echo "</div";

foreach ($imgfiledir2 as $imgfiles){   

$imgcsvt = $imgfiles . "tag" . ".csv";
    
$imgcsvtfor = fopen ($imgcsvt, 'r');   
$imgcatcsv = fgetcsv($imgcsvtfor);           

$timgalink = array (preg_filter('/\/var\/www\/mps\/timg\//i' , $hostlink , $imgfiles));
$timgfname = array (preg_filter('/\/var\/www\/mps\/timg\//i' , '' , $imgfiles));

if ($imgcatsd == 'Nature') {    
    if  ($imgcatcsv[2] == 'Nature'){

echo "<div class=\"imgcontout\">";
echo "<input type=\"checkbox\" name=\"imgcname[]\" id=$imgcatcsv[0] class=\"imginput\" value=$imgcatcsv[0]></input>";
echo "<label for=$imgcatcsv[0] class=\"imglabel\" title=$imgcatcsv[1]><img src=$timgalink[0] class=\"imgcontin\" alt='$imgcatcsv[3]'></img></label>";
echo "<span class=\"imggtxt\">$imgcatcsv[1]</span>";
echo "</div>";
    }
}

if ($imgcatsd == 'Commercial') {    
    if  ($imgcatcsv[2] == 'Commercial'){   

echo "<div class=\"imgcontout\">";
echo "<input type=\"checkbox\" name=\"imgcname[]\" id=$imgcatcsv[0] class=\"imginput\" value=$imgcatcsv[0]></input>";
echo "<label for=$imgcatcsv[0] class=\"imglabel\" title=$imgcatcsv[1]><img src=$timgalink[0] class=\"imgcontin\" alt='$imgcatcsv[3]'></img></label>";
echo "<span class=\"imggtxt\">$imgcatcsv[1]</span>";
echo "</div>";
    }
}

if ($imgcatsd == 'Industrial') {    
    if  ($imgcatcsv[2] == 'Industrial'){   

echo "<div class=\"imgcontout\">";
echo "<input type=\"checkbox\" name=\"imgcname[]\" id=$imgcatcsv[0] class=\"imginput\" value=$imgcatcsv[0]></input>";
echo "<label for=$imgcatcsv[0] class=\"imglabel\" title=$imgcatcsv[1]><img src=$timgalink[0] class=\"imgcontin\" alt='$imgcatcsv[3]'></img></label>";
echo "<span class=\"imggtxt\">$imgcatcsv[1]</span>";
echo "</div>";
    }
}

if ($imgcatsd == 'Flowers') {    
    if  ($imgcatcsv[2] == 'Flowers'){

echo "<div class=\"imgcontout\">";
echo "<input type=\"checkbox\" name=\"imgcname[]\" id=$imgcatcsv[0] class=\"imginput\" value=$imgcatcsv[0]></input>";
echo "<label for=$imgcatcsv[0] class=\"imglabel\" title=$imgcatcsv[1]><img src=$timgalink[0] class=\"imgcontin\" alt='$imgcatcsv[3]'></img></label>";
echo "<span class=\"imggtxt\">$imgcatcsv[1]</span>";
echo "</div>";
    }
}

if ($imgcatsd == 'Animals') {    
    if  ($imgcatcsv[2] == 'Animals'){
    

echo "<div class=\"imgcontout\">";
echo "<input type=\"checkbox\" name=\"imgcname[]\" id=$imgcatcsv[0] class=\"imginput\" value=$imgcatcsv[0]></input>";
echo "<label for=$imgcatcsv[0] class=\"imglabel\" title=$imgcatcsv[1]><img src=$timgalink[0] class=\"imgcontin\" alt='$imgcatcsv[3]'></img></label>";
echo "<span class=\"imggtxt\">$imgcatcsv[1]</span>";
echo "</div>";
    }
}

if ($imgcatsd == 'Food') {    
    if  ($imgcatcsv[2] == 'Food'){
    

echo "<div class=\"imgcontout\">";
echo "<input type=\"checkbox\" name=\"imgcname[]\" id=$imgcatcsv[0] class=\"imginput\" value=$imgcatcsv[0]></input>";
echo "<label for=$imgcatcsv[0] class=\"imglabel\" title=$imgcatcsv[1]><img src=$timgalink[0] class=\"imgcontin\" alt='$imgcatcsv[3]'></img></label>";
echo "<span class=\"imggtxt\">$imgcatcsv[1]</span>";
echo "</div>";
    }
}

if ($imgcatsd == 'Textures') {    
    if  ($imgcatcsv[2] == 'Textures'){
    

echo "<div class=\"imgcontout\">";
echo "<input type=\"checkbox\" name=\"imgcname[]\" id=$imgcatcsv[0] class=\"imginput\" value=$imgcatcsv[0]></input>";
echo "<label for=$imgcatcsv[0] class=\"imglabel\" title=$imgcatcsv[1]><img src=$timgalink[0] class=\"imgcontin\" alt='$imgcatcsv[3]'></img></label>";
echo "<span class=\"imggtxt\">$imgcatcsv[1]</span>";
echo "</div>";
    }
}

if ($imgcatsd == 'Buildings') {    
    if  ($imgcatcsv[2] == 'Buildings'){
    

echo "<div class=\"imgcontout\">";
echo "<input type=\"checkbox\" name=\"imgcname[]\" id=$imgcatcsv[0] class=\"imginput\" value=$imgcatcsv[0]></input>";
echo "<label for=$imgcatcsv[0] class=\"imglabel\" title=$imgcatcsv[1]><img src=$timgalink[0] class=\"imgcontin\" alt='$imgcatcsv[3]'></img></label>";
echo "<span class=\"imggtxt\">$imgcatcsv[1]</span>";
echo "</div>";
    }
}


}

echo "<footer class=\"pgalfoot1\">";
echo "<li class=\"sellst\"><input type=\"submit\" value=\"Download Multiple\" formaction=\"imgconfirmdl.php\" class=\"dwnbtn\"></input>";


echo "<input type=\"submit\" value=\"Add Filter (Beta)\" formaction=\"imgedit.php\" class=\"afbtn\"></input>";
echo "<input type=\"reset\" value=\"Clear Selection\" class=\"rstbtn\"></input></li>";
echo "</form>";

echo "<script> </script>";
echo "</footer>";


?>
       
    </div>
       
