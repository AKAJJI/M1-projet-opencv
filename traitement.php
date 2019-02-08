<?php

require 'connect.php';

if(isset($_FILES['images'])){
    
    $target_dir=getcwd()."\images\hooligans\ ";
    
   for($i=0;$i<count($_FILES['images']['name']);$i++){
       
        $name=$_FILES['images']['name'][$i];
        $tmp = $_FILES['images']['tmp_name'][$i];
        
        $target_file = $target_dir.basename($name);
       $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       $extensions_arr = array("jpg","jpeg","png","gif");
       if( in_array($imageFileType,$extensions_arr) ){
 
            $req = $bdd->prepare('INSERT INTO hooligans(name,image) VALUES(:name,:image)');
$req->execute(array(
                    
                    'name' => $name,
                    'image' => $target_file));
    
    require 'disconnect.php';
    header('location:Home.php');
  
     
           move_uploaded_file($tmp,$target_dir.$name);

  }else{
           echo 'L\'un des fichiers inserer n\'est pas une image.';
       }
   }
    
}

