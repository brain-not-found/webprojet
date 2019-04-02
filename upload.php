<?php



if(!empty($_FILES)){


$file = $_FILES["fileToUpload"]["name"];
$file_extension=strrchr($fil, '.');

$target = $_FILES["fileToUpload"]["tmp_name"];
$target_dir = "imageProduit/".$file;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        move_uploaded_file($target, $target_dir);
      
    } else {
        echo "File is not an image.";
        
    }
}
}
?>

<!DOCTYPE html>
<html>
<body>

<form  method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>