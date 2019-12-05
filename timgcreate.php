<html>
    <body>
        <?php
       // if (!function_exists('imgthmb')) { 
       // function imgthmb(){
            
        
//Varibles for Directory and files 
        
                                      
        $imgdir1 = '/var/www/mps/img/';
        $timgdir = '/var/www/mps/timg/';
        $imgfiledir1   = (glob($imgdir1.'*.[jJ][pP][gG]'));

        foreach ($imgfiledir1 as $imgfiles1) {
        $img = new Imagick($imgfiles1);    
        
        
               
        $imgr = $img->getimageorientation();      
        
        echo $imgr;
        
        if($imgr == '8'){
                    
            $img->rotateimage('black', -90);                                                          
            $img->thumbnailimage(256,171);

        $imgf = (preg_replace("/\/var\/www\/mps\/img\//i" , $timgdir , $imgfiles1 , 1));    
        
        $img->writeImages($imgf , false);
        
        }
        
        if($imgr == '0'){
                    
            $img->rotateimage('black', -90);                                                          
            $img->thumbnailimage(256,171);

        $imgf = (preg_replace("/\/var\/www\/mps\/img\//i" , $timgdir , $imgfiles1 , 1));    
        
        $img->writeImages($imgf , false);
        
        
        }
else{            
            
        $imgf = (preg_replace("/\/var\/www\/mps\/img\//i" , $timgdir , $imgfiles1 , 1));  
            
            $img->thumbnailimage(256,171);
            $img->writeImages($imgf , false);
            
                
    //Loop through files in dir pass to imagick to create thumbnails, use regex to flip output directory to thumbnail dir. write 
            }
        
        }  
       

?>    
    </body>
</html>                
