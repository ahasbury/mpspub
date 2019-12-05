<?php

//$hostlink = "http://$_SERVER[SERVER_NAME]:$_SERVER[SERVER_PORT]/main.php";
$hostlink = "https://mooseplane.net";    
$imgcatpt = $_POST['imgcat'];

echo     "<title>$imgcatpt</title>";
echo        "<meta charset=\"UTF-8\">";
echo        "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
echo        "<link rel=\"stylesheet\" type=\"text/css\" href=\"mainstyle.css\">";
echo        "<header class=\"pgalhead1\">";
echo        "<h1><img src=\"logosmall.jpg\" class=\"headlogo1\"</img>$imgcatpt</h1>";
echo        "<a href=$hostlink class=\"sellnkl\">Back To Gallery</a>";
echo        "<p class=\"halttext\"><p/>";
  


?>
