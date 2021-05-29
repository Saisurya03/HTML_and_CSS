<?php
  if(isset($_FILES['image'])){
      $errors = array();   
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext =strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions = array("jpeg", "jpg", "png");
      
      if(in_array($file_ext, $extensions)== false){
          $errors[] = "extension not allowed, please choose a JPEG, PNG or JPG.";
      }

      if($file_size > 2097152){
        $errors[] = "File size must not exceed 2 MB.";
      }

      if(empty($errors)== true){
        move_uploaded_file($file_tmp, "upload/".$file_name);
        echo "Success";
      }else{
          print_r($errors);
      }
  }
?>
<!DOCTYPE>
<html>
  <body>
        <form action="" method = "POST" enctype = "multipart/form-data">
            <input type= "file" name = "image" /><br>
            <input type = "submit" />

            <ul>
                <li>Sent file: <?php echo $_FILES['image']['name']; ?></li>
                <li>File size: <?php echo $_FILES['image']['size']; ?></li>
                <li>File type: <?php echo $_FILES['image']['type']; ?></li>
            </ul>

        </form>
  </body>
</html>