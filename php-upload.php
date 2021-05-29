<form action="" method="post" enctype="multipart/form-data" name="form1">
<input type="file" name="image">
<input type="submit" name="SubmitBtn" id="SubmitBtn" value="Upload Image">
</form>
<?php
if(isset($_POST["SubmitBtn"])){

  $fileName=$_FILES["image"]["name"];
  $fileSize=$_FILES["image"]["size"]/1024;
  $fileType=$_FILES["image"]["type"];
  $fileTmpName=$_FILES["image"]["tmp_name"];  
  
  $file_ext=strtolower(end(explode('.',$fileName)));

  $extensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions)== false){
        $errors[]="Only images allowed!";
     }
 
    if($fileSize > 2000){
        $errors[]='File size lower than or equal to 2 MB!';
    }
 
   if(empty($errors)==true){
        move_uploaded_file($fileTmpName,"e:/upload/".$fileName);
        echo "<br> Success! <br>";
        echo "File Name :".$fileName."<br>"; 
        echo "File Size :".$fileSize." kb <br>"; 
        echo "File Type :".$fileType."<br>";
    }else{
        print_r($errors);
    }

}
?> 