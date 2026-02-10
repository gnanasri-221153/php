<!DOCTYPE html>
<html>
<head>
    <title>File Upload & Download</title>
</head>
<body>

<h2>Upload File</h2>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="myfile" required>
    <br><br>
    <input type="submit" name="upload" value="Upload">
</form>

<?php
if (isset($_POST['upload'])) {

    $uploadDir = "uploads/";
    $fileName = basename($_FILES["myfile"]["name"]);
    $targetFile = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile)) {
        echo "<p style='color:green;'>File uploaded successfully!</p>";
        echo "<a href='download.php?file=$fileName'>
                <button>Download File</button>
              </a>";
    } else {
        echo "<p style='color:red;'>File upload failed!</p>";
    }
}
?>

</body>
</html>
