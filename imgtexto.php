<html>
    <head>
       
        <title>Add Text</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mainstyle.css">
        <header class="pgalhead1">
        <h1><img src="logosmall.jpg" class="headlogo1"</img>Add Text</h1>
        <?php
        $imgchk = $_POST['imgcname'];
        $imgchks = $imgchk[0];
        $imglinklist = $hostlinkfb . $ckff . $imgchks;
         $imgconfb = $imgchks;
     
//        $hostlink = "http://$_SERVER[SERVER_NAME]:$_SERVER[SERVER_PORT]/imgedit.php";
        $hostlink = "https://mooseplane.net";
        echo "<form action=\"imgedit.php\" method=\"POST\" target=\"_self\">";
        echo "<input type=\"checkbox\" name=\"imgcname[]\" id=$imgconfb value=$imgconfb checked readonly>";
        echo "<input type=\"submit\" value=\"Back to Edit\" class=\"sellnkl\"></input>";
        echo "</form>";
        ?>
        
        <p class="halttext"></>
            </header>
           
    </head>
    <body class="photosbackground">

<section> 
    
   


    
<?php

echo "<div class=\"helptxt\"><span>Click Radio Button to Adjust Preset Area the text appears on the Image</span></div>";

$hostlinkt = "https://mooseplane.net/timg/";
$hostlinkfb = "https://mooseplane.net/fbuffer/";


//$hostlinkt = "http://$_SERVER[SERVER_NAME]:$_SERVER[SERVER_PORT]/timg/";
//$hostlinkfb = "http://$_SERVER[SERVER_NAME]:$_SERVER[SERVER_PORT]/fbuffer/";
$fbufferdir = '/var/www/mps/fbuffer/';
$imgchk = $_POST['imgcname'];
$imgchks = $imgchk[0];
$ckff = $_COOKIE['skey'];
$imgfbdir = $fbufferdir . $ckff . $imgchks;
$imgfbdirtx = $fbufferdir . $ckff . $imgchk[0];
$timgdir = '/var/www/mps/timg/';

echo "<form action=\"imgtextp.php\" method=\"POST\" target=\"_self\" class=\"imgflabel\">";

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
//echo "file does not exists";
       $imglinklist = $hostlinkt . $imgchks;
       $imgconfb = $imgchks;
              
             }            

echo "<div class=\"imgradw\">";

if(file_exists($imgfbdirtx . ".csv")){

$imgcsv = fopen($imgfbdirtx . ".csv", 'r');
$imgfarr = fgetcsv($imgcsv);

foreach($imgfarr as $imgfsplit){
$imgfset = preg_split('|=|', $imgfsplit);
if($imgfset[3] > 0){
   
$imghtrim = rtrim($imgfset[3], "0");   
$imghtrimnc = $imghtrim -1;
$imghtrimpc = $imghtrim +1;
$imgh = $imghtrim . 0;

}
if($imgfset[4] > 0){
    

$imgwtrim = rtrim($imgfset[4], "0");   
$imgwtrimnc = $imgwtrim -1;
$imgwtrimpc = $imgwtrim +1;
$imgw = $imgwtrim . 0;

}

}
}

for ($imglnklp = 1; $imglnklp <= $imgwtrimnc ;$imglnklp++){

$imglnkm = $imglnklp . 0;    

echo "<input type=\"radio\" value=$imglnkm class=\"imgradwtxt\" name=\"imgtwa\"></input>";   


}
echo "<input type=\"radio\" value=$imgw class=\"imgradwtxt\" name=\"imgtwa\" checked></input>";

for ($imglnklp = $imgwtrimpc; $imglnklp <= 9 ;$imglnklp++){
    
$imglnkm = $imglnklp . 0;
    
echo "<input type=\"radio\" value=$imglnkm class=\"imgradwtxt\" name=\"imgtwa\"></input>";
}

echo "</div>";

echo "<label for=$imgconfb><img src=$imglinklist class=\"imgprevt\" checked></label>";

echo "<div class=\"imgradh\">";

for ($imglnklp = 2; $imglnklp <= $imghtrimnc ;$imglnklp++){ 

    
$imglnkm = $imglnklp . 0;

echo "<input type=\"radio\" value=$imglnkm class=\"imgradhtxt\" name=\"imgtha\"></input>";
}
echo "<input type=\"radio\" value=$imgh class=\"imgradhtxt\" name=\"imgtha\" checked></input>";
    
for ($imglnklp = $imghtrimpc; $imglnklp <= 9 ;$imglnklp++){

$imglnkm = $imglnklp . 0;

echo "<input type=\"radio\" value=$imglnkm class=\"imgradhtxt\" name=\"imgtha\"></input>";

}



echo "</div>";



echo "<div>";

//echo "<label for=$imgconfb><img src=$imglinklist class=\"imgprevt\"></label>"; 
echo "<input type=\"checkbox\" name=\"imgcname[]\" id=$imgconfb value=$imgconfb checked readonly>";

echo "</div>";


    

echo "</section>";

echo "<footer class=\"pgalfoot1\">";

if(file_exists($imgfbdirtx . ".csv")){

$imgcsv = fopen($imgfbdirtx . ".csv", 'r');
$imgfarr = fgetcsv($imgcsv);

foreach($imgfarr as $imgfsplit){
$imgfset = preg_split('|=|', $imgfsplit);
if(isset($imgfset[5])){

$imgc = $imgfset[5];

}
if(isset($imgfset[6])){

$imgf = $imgfset[6];   
 
}
if(isset($imgfset[7])){

$imgfs = $imgfset[7];
    
}    
}

$tvalc = $imgc;          
$tvalf = $imgf;              
$tvalfse = $imgfs;           
      
      
echo "<select name=\"colour\" class=\"drpsles\">";

echo "<option value=$tvalc class=\"drpsle-contnent\">Default Color</option>";
echo "<option value=\"black\" class=\"drpsle-contnent\">Black</option>";
echo "<option value=\"white\" class=\"drpsle-contnent\">White</option>";
echo "<option value=\"red\" class=\"drpsle-contnent\">Red</option>";
echo "<option value=\"green\" class=\"drpsle-contnent\">Green</option>";
echo "<option value=\"Orange\" class=\"drpsle-contnent\">Orange</option>";


echo "</select>";

echo "<select name=\"font\" class=\"drpsles\">";

echo "<option value=$tvalf class=\"drpsle-contnent\">Default Font</option>";
echo "<option value=\"OpenSans-Regular.ttf\" class=\"drpsle-contnent\">Default Sans</option>";
echo "<option value=\"DancingScript-Regular.ttf\" class=\"drpsle-contnent\">Script</option>";
echo "<option value=\"Anton-Regular.ttf\" class=\"drpsle-contnent\">Meme Style</option>";
echo "<option value=\"Lobster-Regular.ttf\" class=\"drpsle-contnent\">Lobster Style</option>";

echo "</select>";

echo "<select name=\"fontse\" class=\"drpsles\">";

echo "<option value=$tvalfse class=\"drpsle-contnent\">Default Font Size</option>";
echo "<option value=\"24\" class=\"drpsle-contnent\">24</option>";
echo "<option value=\"8\" class=\"drpsle-contnent\">8</option>";
echo "<option value=\"16\" class=\"drpsle-contnent\">16</option>";
echo "<option value=\"26\" class=\"drpsle-contnent\">26</option>";
echo "<option value=\"32\" class=\"drpsle-contnent\">32</option>";
echo "<option value=\"36\" class=\"drpsle-contnent\">36</option>";
echo "<option value=\"40\" class=\"drpsle-contnent\">40</option>";

echo "</select>";
      
    
}

              else{
echo "<select name=\"colour\" class=\"drpsles\">";

echo "<option value=\"black\" class=\"drpsle-contnent\">Black</option>";
echo "<option value=\"white\" class=\"drpsle-contnent\">White</option>";
echo "<option value=\"red\" class=\"drpsle-contnent\">Red</option>";
echo "<option value=\"green\" class=\"drpsle-contnent\">Green</option>";
echo "<option value=\"Orange\" class=\"drpsle-contnent\">Orange</option>";


echo "</select>";

echo "<select name=\"font\" class=\"drpsles\">";

echo "<option value=\"OpenSans-Regular.ttf\" class=\"drpsle-contnent\">Default Sans</option>";
echo "<option value=\"DancingScript-Regular.ttf\" class=\"drpsle-contnent\">Script</option>";
echo "<option value=\"Anton-Regular.ttf\" class=\"drpsle-contnent\">Meme Style</option>";
echo "<option value=\"Lobster-Regular.ttf\" class=\"drpsle-contnent\">Lobster Style</option>";

echo "</select>";

echo "<select name=\"fontse\" class=\"drpsles\">";

echo "<option value=\"24\" class=\"drpsle-contnent\">24</option>";
echo "<option value=\"8\" class=\"drpsle-contnent\">8</option>";
echo "<option value=\"16\" class=\"drpsle-contnent\">16</option>";
echo "<option value=\"26\" class=\"drpsle-contnent\">26</option>";
echo "<option value=\"32\" class=\"drpsle-contnent\">32</option>";
echo "<option value=\"36\" class=\"drpsle-contnent\">36</option>";
echo "<option value=\"40\" class=\"drpsle-contnent\">40</option>";

echo "</select>";

}
echo "<input type=\"checkbox\" name=\"filters\" value=\"txt\" checked readonly>";
echo "<input type=\"text\" placeholder=\"Enter Text Here\" name=\"texti\" class=\"imgtxtin\">";
echo "<input type=\"submit\" value=\"Apply\"  class=\"sellnke\">";
echo "<input type=\"submit\" value=\"Reset\" name=\"reset\" class=\"sellnke\" formaction=\"imgfilterrst.php\" method=\"POST\">";
echo "<input type=\"submit\" value=\"Download (HQ)\" name=\"download\" class=\"sellnke\" formaction=\"imgfilterdl.php\" method=\"POST\">";
//echo "<input type=\"submit\" value=\"Reset\" name=\"reset\" class=\"sellnke\" formaction=\"imgtextp.php\" method=\"POST\">";
//echo "<input type=\"submit\" value=\"Download\" name=\"download\" class=\"sellnke\" formaction=\"imgtextd.php\" method=\"POST\">";

//echo "</select>";
echo "</form>";
echo "<script> </script>";
echo "</footer>";

?>

    </body>
</html>                

    
