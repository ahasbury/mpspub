<?php
$imgcatp = '"timglinkf.php"';

echo "<div class=\"sformw\">";
echo "<form>";
 $catfiledir = '/var/www/mps/cat.csv'; 
         $catcsvfile = fopen($catfiledir, 'r');
         $catcsv = fgetcsv($catcsvfile);        

//            echo "<button type=\"submit\" value=\"All\" name=\"imgcat\" formaction=$imgcatp class=\"sellnkg\" onclick=\"this.form.submit()\">\"All\"</button>";
         
         foreach($catcsv as $catlp){
             
             echo "<button type=\"submit\" value=$catlp name=\"imgcat\" formaction=$imgcatp class=\"sellnkg\" onclick=\"this.form.submit()\">$catlp</button>";
         
         }


echo "</form>";         
echo "</div>";




?>    
