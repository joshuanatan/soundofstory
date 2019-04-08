<?php
session_start();
    echo "halo";
    $uploads_dir = "../audio";
    $tmp_name = $_FILES["uploadFile"]["tmp_name"];
    $name = $_FILES["uploadFile"]["name"];
    $_SESSION["namaFile"] = $name;
    echo $_SESSION["namaFile"];
    $moved = move_uploaded_file($tmp_name, "$uploads_dir/$name");
    if($moved && file_exists("$uploads_dir/$name")){
        echo 'file uploaded successfully';
    }
    else{
        echo $_FILES['uploadFile']['error'];
    }
    header("location:testaudio.php");
?>