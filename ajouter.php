<?php
/**
 * Created by PhpStorm.
 * User: Hamza
 * Date: 29/03/2019
 * Time: 19:40
 */

include "crudProduit.php";
$crud = new crudProduit();

 $image=null;
if(!empty($_FILES)){


    $file = $_FILES["fileToUpload"]["name"];
    $file_extension=strrchr($file, '.');

    $target = $_FILES["fileToUpload"]["tmp_name"];
    $target_dir = "imageProduit/".$file;
$image= $target_dir;
    var_dump($image);
    move_uploaded_file($target, $target_dir);
   // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if(isset($_POST["fileToUpload"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        echo("heeeeeeeeeeeeeeeeeeeeeeee");
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";


        } else {
            echo "File is not an image.";

        }
    }
}
var_dump($image);
if(!empty($_POST)) {
    
    $emp = new classProduit($_POST["nom"], $_POST["prix"], $_POST["quantite"], $_POST["select"],$_POST["desc"],$image);
    
    $crud->ajouter($emp);
    header('Location: http://localhost/projet/produit.php');
}
?>