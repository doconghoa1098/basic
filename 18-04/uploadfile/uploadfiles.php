<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    if (isset($_POST['submit'])) {

        $uploads_dir = '/uploads';
        // foreach ($_FILES["fileToUpload"]["error"] as $key => $error) {
        //     if ($error == UPLOAD_ERR_OK) {
        //         $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
        //         $name = basename($_FILES["pictures"]["name"][$key]);
        //         move_uploaded_file($tmp_name, "$uploads_dir/$name");
        //     }
        // }
        echo "<pre>";
        var_dump($_FILES["fileToUpload"]);
        echo "</pre>";
    }
?>

<body>
    <form action="#" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" multiple>
    <input type="submit" value="Upload Image" name="submit">
    </form>
 
</body>
</html>
