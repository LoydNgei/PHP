<?php
    if(isset($_POST['submit'])) {
        if(!empty($_FILES['upload'] ['name'])) {

        } else {
            $message = '<p style="color: red;">Please choose a file</p>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>File Upload</title>
    </head>
    <body>
        <?php echo $message ?? null; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="upload">
            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>