<html>    
    <head>
        <script>
            function validateForm(){
                var image = document.getElementById("image").value;
                var name = document.getElementById("name").value;
                if (image =='')
                {
                    return false;
                }
                if(name =='')
                {
                    return false;
                } 
                else 
                {
                    return true;
                } 
                return false;
            }
        </script>
    </head>

    <body>
        <form method="post" action="upload.php" enctype="multipart/form-data">
            <input type="text" name="ext" size="30"/>
            <input type="text" name="name" id="name" size="30"/>
            <input type="file" accept="image/*" name="image" id="image" />
            <input type="submit" value='Save' onclick="return validateForm()"/>
        </form>
    </body>
</html>

<?php  
$name = $_POST['name'];
$ext = $_POST['ext'];
if (isset($_FILES['image']['name']))
{
    $saveto = "$name.$ext";
    move_uploaded_file($_FILES['image']['tmp_name'], $saveto);
    $typeok = TRUE;
    switch($_FILES['image']['type'])
    {
        case "image/gif": $src = imagecreatefromgif($saveto); break;
        case "image/jpeg": // Both regular and progressive jpegs
        case "image/pjpeg": $src = imagecreatefromjpeg($saveto); break;
        case "image/png": $src = imagecreatefrompng($saveto); break;
        default: $typeok = FALSE; break;
    }
    if ($typeok)
    {
        list($w, $h) = getimagesize($saveto);
        $max = 100;
        $tw = $w;
        $th = $h;
        if ($w > $h && $max < $w)
        {
            $th = $max / $w * $h;
            $tw = $max;
        }
        elseif ($h > $w && $max < $h)
        {
            $tw = $max / $h * $w;
            $th = $max;
        }
        elseif ($max < $w)
        {
            $tw = $th = $max;
        }

        $tmp = imagecreatetruecolor($tw, $th);      
        imagecopyresampled($tmp, $src, 0, 0, 0, 0, $tw, $th, $w, $h);
        imageconvolution($tmp, array( // Sharpen image
            array(???1, ???1, ???1),
            array(???1, 16, ???1),
            array(???1, ???1, ???1)      
        ), 8, 0);
        imagejpeg($tmp, $saveto);
        imagedestroy($tmp);
        imagedestroy($src);
    }
}
?>
