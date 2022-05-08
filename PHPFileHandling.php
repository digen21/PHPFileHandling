<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
//................................TO CREATE FILE................................

        
//        
//        
//        
//        $directory = mkdir('phpfile');                    //mkdir('foldername');
//                         
//        if($directory)
//        {
//            echo 'File Is Created';
//        }
//        else
//        {
//            echo 'error occured';
//        }
        
//................................TO CREATE NEW FILE OR WRITE IN FILE OR READ FROM FILE................................
     
        
        
        $myfile = fopen("newfile.txt", "w+");               
        
        if($myfile)
        {
            echo 'File Is Ready To Write';
        }
        else
        {
            echo 'Error Occured';
        }
        
//................................TO WRITE IN FILE................................

        
        
        //$txt = "Hello Word where are you \n";
        //$txt2 = "Hii I am here \n";
                
        
        //fwrite($myfile, $txt);
        //fwrite($myfile,$txt2);        


        
//................................TO READ FILE BY LINE................................

        
        echo fgets($myfile);
        
//................................TO CHECK END OF FILE AND READ FILE CHARACTER BY CHARACTYER................................  

         
//        while(!feof($myfile))
//        {
//            echo fgetc($myfile)."<br>";
//        }
        
        
 //................................TO DELETE FILE................................
 

 
//        $unlinkfile = unlink('newfile.txt');              unlink('filename.txt')


//        if($unlinkfile)
//        {
//            echo 'File Deleted';
//        }
//        else
//        {
//            echo 'File is still present';
//        }

         
//................................TO CLOSE FILE.......................
         
        fclose($myfile);
        
        ?>
        
    </body>
</html>
