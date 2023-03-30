<?php  
  
session_start();  
require('db_config.php');  
  
if(isset($_POST) && !empty($_FILES['image']['name']) && !empty($_POST['title'])){  
  
    $name = $_FILES['image']['name'];  
    list($txt, $ext) = explode(".", $name);  
    $image_name = time().".".$ext;  
    $tmp = $_FILES['image']['tmp_name'];  
  
    if(move_uploaded_file($tmp, 'uploads/'.$image_name)){  
  
  
          // Sql query to be executed
  $sql = "INSERT INTO `image_gallery` (`title`, `image`) VALUES ('".$_POST['title']."', '".$image_name."')";
  $result = mysqli_query($conn, $sql);

   
  if($result){ 
      $insert = true;
  }
  else{
      echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
  }  
  

  
        $_SESSION['success'] = 'Uploading of image is successfully.';  
          
    }else{  
        $_SESSION['error'] = 'Uploading of image is failed';  
          
    }  
}else{  
    $_SESSION['error'] = 'Please Select Image or Write title';  
      
}  
  
?>  
