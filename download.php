<?php
if (isset($_POST['upload'])) {

    $uploadDir = "uploads/";
    $fileName = basename($_FILES["myfile"]["name"]);
    $targetFile = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile)) {
        echo "<p style='color:green;'>File uploaded successfully!</p>";
        echo "<a href='download.php?file=" . urlencode($fileName) . "'>Download File</a>";
    } else {
        echo "<p style='color:red;'>File upload failed!</p>";
    }
}
?>

