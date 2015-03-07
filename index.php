<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $em=  imagecreate(1500, 600);
        imagecolorallocate($em, 255, 255, 255);
         X($em, 1500, 400, 40);
        
          
        
      
        imagejpeg($em, "demo.jpg");
        
       function X($em,$width,$hieght,$pas)
        {
           $blue=  imagecolorallocate($em, 0, 0, 255);
           //$blue=null;
            for($i=1;$i<$width/10;$i++)
            {
               
                imageline($em, $i*$pas, 0, $i*$pas, $hieght, $blue);
              $j=$i*10;
                imagefttext($em,10, 0, $i*$pas, $hieght,$blue,"ARIAL.ttf","$j");
                if($i<$hieght/10)
                {
                    imageline($em, $pas,$i*$pas, $width, $i*$pas, $blue); 
                    $j=$hieght/10-$pas-10-$i;
                    imagefttext($em,10, 0,2, $i*$pas,$blue,"ARIAL.ttf","$j");
                }
            } 
        }
        ?>
        <img src="demo.jpg" width="1000"  height="400">
    </body>
</html>
