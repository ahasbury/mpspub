<html>
    <head>
       
        <title>Add Filter</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mainstyle.css">
        <header class="pgalhead1">
        <h1><img src="logosmall.jpg" class="headlogo1"</img>Edit Selection</h1>
        <?php 
//        $hostlink = "http://$_SERVER[SERVER_NAME]:$_SERVER[SERVER_PORT]/main.php";
        $hostlink = "https://mooseplane.net";
        echo        "<a href=$hostlink class=\"sellnkl\">Back To Gallery</a>";
        ?>
        <p class="halttext"></>    
       </header>
</head>
    <body class="photosbackground">

<section> 
    
<?php


$hostlinkt = "https://mooseplane.net/timg/";
$hostlinkfb = "https://mooseplane.net/fbuffer/";

//$hostlinkt = "http://$_SERVER[SERVER_NAME]:$_SERVER[SERVER_PORT]/timg/";
//$hostlinkfb = "http://$_SERVER[SERVER_NAME]:$_SERVER[SERVER_PORT]/fbuffer/";
$fbufferdir = '/var/www/mps/fbuffer/';
$imgchk = $_POST['imgcname'];
$imgchks = $imgchk[0];
$ckff = $_COOKIE['skey'];
$imgfilsel = $_POST['filters'];
$imgfbdir = $fbufferdir . $ckff;
$imgfbdirtx = $fbufferdir . $ckff . $imgchk[0];
$timgdir = '/var/www/mps/timg/';
$imgfbdircsv = $fbufferdir . $ckff . $imgchk[0] .".csv";
$imgdefst = ("def" . "=" . "0" . "=" . " " . "=" . "90" . "=" . "40" . "=" . "black" . "=" . "OpenSans-Regular.ttf" . "=" . "24" . "=" . $ckcnt . ",");
//include 'imgpdf.php';

if (file_exists($imgfbdircsv)) {

$imgwdir = ($imgfbdir . $imgfchks);
    
}
else{
$imgftf = fopen($imgfbdirtx . ".csv", 'a');
fwrite($imgftf, $imgdefst);

}

echo "<form action=\"imgedit.php\" method=\"POST\" target=\"_self\" class=\"imgflabel\">";

              if(empty($imgchk)) {
                  
                  echo "<p>Nothing Selected</p>";
              }
             else{
               if(isset($imgchk[1])){    
 //                 echo "<p>Multiple Image Selection Currently Not Supported when Adding filters</p>";
               }
             }
             if(file_exists($imgfbdirtx)){
  

      $imglinklist = $hostlinkfb . $ckff . $imgchks;
      $imgconfb = $imgchks;
             }
else{
       $imglinklist = $hostlinkt . $imgchks;
       $imgconfb = $imgchks;

}      

echo "<label for=$imgconfb><img src=$imglinklist class=\"imgprevt\"></label>"; 
echo "<input type=\"checkbox\" name=\"imgcname[]\" id=$imgconfb value=$imgconfb checked readonly>";
              
echo "</div>";

echo "</section>";
 
echo "<footer class=\"pgalfoot1\">";

if($imgfilsel == "sep"){

echo "<select name=\"filters\" class=\"drpsles\" onchange=\"this.form.submit()\">";  
    
echo "<option value=\"sep\" class=\"drpsle-contnent\">Sepitone</option>";
echo "<option value=\"blur\" class=\"drpsle-contnent\">Blur</option>";
echo "<option value=\"con\" class=\"drpsle-contnent\">Contrast</option>";

echo "</select>";

}    

if($imgfilsel == "blur"){
    
echo "<select name=\"filters\" class=\"drpsles\" onchange=\"this.form.submit()\">";    

echo "<option value=\"blur\" class=\"drpsle-contnent\">Blur</option>";    
echo "<option value=\"sep\" class=\"drpsle-contnent\">Sepitone</option>";
echo "<option value=\"con\" class=\"drpsle-contnent\">Contrast</option>";

echo "</select>";

}

if($imgfilsel == "con"){
    
echo "<select name=\"filters\" class=\"drpsles\" onchange=\"this.form.submit()\">";    

echo "<option value=\"con\" class=\"drpsle-contnent\">Contrast</option>";
echo "<option value=\"blur\" class=\"drpsle-contnent\">Blur</option>";    
echo "<option value=\"sep\" class=\"drpsle-contnent\">Sepitone</option>";

echo "</select>";
}
elseif($imgfilsel == ''){

echo "<select name=\"filters\" class=\"drpsles\" onchange=\"this.form.submit()\">";


echo "<option value=\"sep\" class=\"drpsle-contnent\">Sepitone</option>";
echo "<option value=\"con\" class=\"drpsle-contnent\">Contrast</option>";
echo "<option value=\"blur\" class=\"drpsle-contnent\">Blur</option>";

echo "</select>";

}

$fbdircsv = $imgfbdircsv;


if ($imgfilsel == 'sep'){

echo "<select name=\"imgfrng\" class=\"drpsles\">";

echo "<option value=\"70\" class=\"drpsle-contnent\">Light</option>";
echo "<option value=\"80\" class=\"drpsle-contnent\">Medium</option>";
echo "<option value=\"90\" class=\"drpsle-contnent\">Dark</option>";

echo "</select>";

}

if ($imgfilsel == 'blur'){
       
echo "<select name=\"imgfrng\" class=\"drpsles\">";

echo "<option value=\"1\" class=\"drpsle-contnent\">Slightly Blurry</option>";
echo "<option value=\"25\" class=\"drpsle-contnent\">Very Blurry</option>";
echo "<option value=\"50\" class=\"drpsle-contnent\">Much too Blurry</option>";

echo "</select>";

}

if ($imgfilsel == 'con'){
       
echo "<select name=\"imgfrng\" class=\"drpsles\">";

echo "<option value=\"25\" class=\"drpsle-contnent\">Light</option>";
echo "<option value=\"50\" class=\"drpsle-contnent\">Dark</option>";
echo "<option value=\"75\" class=\"drpsle-contnent\">Darker</option>";

echo "</select>";

}
elseif($imgfilsel == '') {
    
echo "<select name=\"imgfrng\" class=\"drpsles\">";


echo "<option value=\"70\" class=\"drpsle-contnent\">Light</option>";
echo "<option value=\"80\" class=\"drpsle-contnent\">Medium</option>";
echo "<option value=\"90\" class=\"drpsle-contnent\">Dark</option>";

echo "</select>";          
    
}



echo "<input type=\"submit\" formaction=\"imgfilter.php\" value=\"Apply\" name=\"prev\" class=\"sellnke\">";


echo "<input type=\"submit\" formaction=\"imgfilterrst.php\" value=\"Reset\" name=\"reset\" class=\"sellnke\" method=\"POST\">";
echo "<input type=\"submit\" formaction=\"imgfilterdl.php\" value=\"Download (HQ)\" name=\"download\" class=\"sellnke\" method=\"POST\">";

echo "</form>";
echo "<form target=\"_self\" method=\"POST\">";
echo "<input type=\"checkbox\" name=\"imgcname[]\" id=$imgconfb value=$imgconfb checked readonly>";
echo "<input type=\"submit\" formaction=\"imgtexto.php\"  value=\"Add Text\" class=\"sellnke\"></input>";
echo "</form>";
echo "<script> </script>";
echo "</footer>";

?>

    </body>
</html>                

    
