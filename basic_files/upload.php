<?php 

if(isset($_POST['submit'])) {

echo "<pre>";

print_r($_FILES['file_upload']);

echo "<pre>";



$upload_errors = array(

UPLOAD_ERR_OK          =>  "There is no error",
UPLOAD_ERR_INI_SIZE    =>  "The uploaded file exceeds the upload_max_filesize directive",
UPLOAD_ERR_FORM_SIZE   =>  "The uploaded file exceeds the MAX_FILE_SIZE directive",
UPLOAD_ERR_PARTIAL     =>  "The uploaded was only partially uploaded.",
UPLOAD_ERR_NO_FILE     =>  "No file was uploaded",
UPLOAD_ERR_NO_TMP_DIR  =>  "Missing a temporary folder.",
UPLOAD_ERR_NO_TMP_DIR  =>  "Failed to write file to disk",
UPLOAD_ERR_EXTENSION   =>  "A PHP extension stopped the file upload."
    
);

$the_error = $_FILES['file_upload']['error'];

$the_message = $upload_errors[$the_error];

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="upload.php" enctype="multipart/form-data" method="post">

        <h2>

            <?php 
            
            if (!empty($upload_errors)) {
                
            echo $the_message;
                
            }
            
            ?>

        </h2>

        <input type="file" name="file_upload">

        <input type="submit" name="submit">
    </form>

</body>

</html>