<?php

 if (!function_exists('ckcon')) { 
 function ckcon(){

 if (isset($_COOKIE['skey'])){
     null;
 }   
else{ 
     $skey = rand(1000, 5000);
     setcookie("skey", "$skey", time()+3600 , "/");
     setcookie("scnt", "0" , time()+3600 , "/");
}

    $cookiev = $_COOKIE['key'];
    $perkey = hash('md5', rand()); 
    session_name('media');
    session_start();
 //   echo $cookiev;
            
    foreach (glob('/var/www/mps/perkey/*') as $filelist){
    $pkeyp = array (preg_filter('/\/var\/www\/mps\/perkey\//i' , '' , $filelist));
     

    foreach (preg_grep("*$cookiev*", $pkeyp) as $pkeyl);
    $pkeym = $pkeyl;
    
   
    
    }
    if ($_COOKIE['key'] == $pkeym){
            null;
    }else {
    
    echo "<div class=\"pgalhead2\">";
    echo "<form action=\"scook.php\" method=\"POST\" target=\"_self\">";        
    echo "<label for=$perkey class=\"ckconlb\"></label>"; 
    echo "<input type=\"checkbox\" name=\"perkey\" id=$perkey value=$perkey checked readonly style=display:none;>";      
    echo "<ul>";
    echo "<li class=\"sellstck\"><input type=\"submit\" value=\"Accept Cookies\" class=\"agbut\"></input></li>";         
    echo "<p>We use cookies to analyse site usage, provide social media features, personalised content and ads</p>";   
    echo "<a href=\"legal.html\">Learn More<a/>"; 

    echo "</ul>";
    echo "</div>";    
            
    
    }     
      
 }

 } 
?>


