<html>
    <head>
              
        <title>Review and Confirm Selection</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mainstyle.css">
        <header class="pgalhead1">
        <h1><img src="logosmall.jpg" class="headlogo1"</img>Confirm Selection</h1>
        <?php 
        $hostlink = "http://$_SERVER[SERVER_NAME]:$_SERVER[SERVER_PORT]/main.php";
        //$hostlink = "https://mooseplane.net";
        echo        "<a href=$hostlink class=\"sellnkl\">Back To Gallery</a>";
        ?>
                <p class="halttext">Click on the Download button to the get high quailty version of the photo, which will be combined into a single zip file.<p/>    
       </header>
    
    <body class="photosbackground">
            <?php                
echo           "<section>";
echo "<form action=\"imgdownload.php\" method=\"POST\" target=\"_top\">";
echo           "<div  class=\"flex-container\">";
            
            
            
   $imgdir4d = './img/';    
//   $filename = $fbufferdir . "images" . rand() . ".zip";
     $hostlink = "https://mooseplane.net/timg/";
//   $hostlink = "http://$_SERVER[SERVER_NAME]:$_SERVER[SERVER_PORT]/timg/";
   $fbufferdir = '/var/www/mps/fbuffer/';

//echo "<form action=\"imgdownload.php\" method=\"POST\" target=\"_top\">";   

$imgchk = $_POST['imgcname'];
                
              if(empty($imgchk)) {
                  
                  echo "<p>Nothing Selected</p>";
              }elseif(count($imgchk) >= 5){    
                  echo "<p>Only Five Images per session currently allowed for multi photo download</p>";
               }
               else{ 
                 foreach ($imgchk as $imgchkdisp){
       $imglinklist = $hostlink . $imgchkdisp;
       $imgconfb = $imgchkdisp;
       $imgconfbv = $fbufferdir . $imgchkdisp;
       
echo "<label for=$imgconfb><img src=$imglinklist name=\"imgfbchk\" id=$imgconfbv value=$imgconfbv  class=\"imgprev\"></label>"; 
echo "<input type=\"checkbox\" name=\"imgfilepost[]\" id=$imgconfb value=$imgconfb checked readonly style=display:none;>";
                 
                 }
                                      
                
                
             }
echo "</div>";
echo "<div style=\"height:75px;\"></div>";
echo "</section>";

echo "<footer class=\"pgalfoot1\">";    
echo "<ul class=\"sellst\">";
echo "<li style=\"list-style:none;\"><input type=\"submit\" value=\"Download\" class=\"dwnbtn\"></input>";

echo "</form>";    
echo "</ul>";
echo "<script> </script>";
echo "</footer>";
           
       
?>
 
    </head>
    </body>
</html>                
