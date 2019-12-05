<html>
     <link rel="stylesheet" type="text/css" href="tagedit.css">
    <body class="photosbackground">    
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <iframe name="tagiframe" value="tagtime" style="border:none;"></iframe>    
    <section>    
        <?php
        $hostlink = "https://mooseplane.net/timg/";
//        $hostlink = "http://$_SERVER[SERVER_NAME]:$_SERVER[SERVER_PORT]/timg/";
        $wrkdir = "/var/www/mps/timg/";
        $imgfiledir1   = (glob($wrkdir.'*.[jJ][pP][gG]')); 
        $imgcatcsvdef = "file, desc, cat, tags";
 //      $imgcsvtfo = $wrkdir . $imgfiles . "tag" . ".csv";
            

//         echo "<div class=\"editdiv\">";
//         echo "<form action=\"imgtagwrite.php\" method=\"POST\" target=\"tagiframe\">";
        
        
        foreach ($imgfiledir1 as $imgfiles){
        
        $imgcsvt = $imgfiles . "tag" . ".csv";    
            
        $timgflink = array (preg_filter('/\/var\/www\/mps\/timg\//i' , '' , $imgfiles));
        $timgelink = array (preg_filter('/\/var\/www\/mps\/timg\//i' , $hostlink , $imgfiles));
        $fdirlink = ($wrkdir . $timgflink[0] . $imgcsvt);  
        
        
        if(file_exists($imgcsvt)){
           
        $imgcsvtfor = fopen ($imgcsvt, 'r');   
        $imgcatcsv = fgetcsv($imgcsvtfor);
               
        
         echo "<div class=\"editdiv\">";
         echo "<form action=\"imgtagwrite.php\" method=\"POST\" target=\"tagiframe\">";      
        
         echo "<input type=\"text\" value=$timgflink[0] name=\"imgflink\" class=\"inputimgn\" readonly>";   
         echo "<br></br>;";
         echo "<img src=$timgelink[0]></img>";          
         
         echo "<br></br>";  
         echo "Image Title:<input type=\"text\" name=\"imgtitle\" value='$imgcatcsv[1]' class=\"inputtitle\">";
         echo "<br></br>";
         echo "Image Tags:<input type=\"text\" name=\"imgtags\" value='$imgcatcsv[3]' class=\"inputtags\">";
         echo "<br></br>";
         
         $catfiledir = '/var/www/mps/cat.csv'; 
         $catcsvfile = fopen($catfiledir, 'r');
         $catcsv = fgetcsv($catcsvfile);        

         echo "<span>Set Image Category</span><br></br>";
         foreach($catcsv as $catlp){
         echo "$catlp:<input type=\"radio\" name=\"imgcat\" value=$catlp class=\"imgcatsel\">";
        
               
         }
         
         echo "<br></br>";
         echo "<input type=\"submit\" value=\"Update\">";
         echo "</form>";
         echo "</div>";
         echo "<br></br>";
         
         
        }
        else{
        $imgcsvtfow = fopen ($imgcsvt, 'w');
        fwrite ($imgcsvtfow, $imgcatcsvdef);

        
        echo $test;
        
         echo "<div class=\"editdiv\">";
         echo "<form action=\"imgtagwrite.php\" method=\"POST\" target=\"tagiframe\">";
          

         echo "<input type=\"text\" value=$timgflink[0] name=\"imgflink\" class=\"inputimgn\" readonly>";   
         echo "<br></br>;";
         echo "<img src=$timgelink[0]></img>";          
         
         echo "<br></br>";  
         echo "Image Title:<input type=\"text\" name=\"imgtitle\" value='$imgcatcsv[1]' class=\"inputtitle\">";
         echo "<br></br>";
         echo "Image Tags:<input type=\"text\" name=\"imgtags\" value='$imgcatcsv[3]' class=\"inputtags\">";
         echo "<br></br>";
        
         echo "Image Cat:<input type=\"radio\" name=\"imgcat\" value='default'>";

         $catfiledir = '/var/www/mps/cat.csv'; 
         $catcsvfile = fopen($catfiledir, 'r');
         $catcsv = fgetcsv($catcsvfile);        

         echo "<span>Set Image Category</span><br></br>";
         foreach($catcsv as $catlp){
         echo "$catlp:<input type=\"radio\" name=\"imgcat\" value=$catlp class=\"imgcatsel\">";
               
         
         }

         echo "<br></br>";
         echo "<input type=\"submit\" value=\"Update\">";
         echo "</form>";
         echo "</div>";
         echo "<br></br>";
         

        }    

         
        }
        
        ?>
        </section>
    </body>
</html>
