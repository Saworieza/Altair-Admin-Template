<?php
    // image upload script (jpg,gif,png)
    // can be used in upload component (forms_file_upload.html)
    // "action" option should be set as url to this script (forms_file_upload.js)
    // eg.
    // action: "/uploads/upload.php"

    $target_dir = "";
    $files = $_FILES['files'];
    $target_file = $target_dir . basename($files["name"][0]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($files["tmp_name"][0]);

    // Check if image file is a actual image or fake image
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".\n";
        $uploadOk = 1;
    } else {
        echo "File is not an image.\n";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "File already exists.\n";
        $uploadOk = 0;
    }
    // Check file size
    if ($files["size"][0] > 500000) {
        echo "Sorry, your file is too large.\n";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.\n";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($files["tmp_name"][0], $target_file)) {
            echo "The file ". basename( $files["name"][0]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }