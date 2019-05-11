<?php
session_start();
if(isset($_SESSION["namaFile"])){
}
else{ $_SESSION["namaFile"] = "test1.aac";
    echo "haloee";
}
echo $_SESSION["namaFile"];
?>
<audio controls>
  <source src="../audio/<?php echo $_SESSION["namaFile"]?>" type="audio/aac">
Your browser does not support the audio element.
</audio>
<br/><br/>
<h4>Enter your audio here</h4>
<form method = "post" action = "upload-testaudio.php" enctype="multipart/form-data">
    <input type = "file" name = "uploadFile">
    <input type = "submit" value = "submit">
</form>

