<?php

$allowedTypes = array(
    'image/svg+xml',
    'image/png',
    'image/jpg',
    'image/jpeg',
);

require_once 'functions.php';

$files = $_FILES['files'] ?? array();

if ($files) {

    $filesCounts = count($_FILES['files']);



    for ($i = 0; $i < $filesCounts; $i++) {
        if (in_array($_FILES['files']['type'][$i], $allowedTypes) !== false && $_FILES['files']['size'][$i] < 2 * 1024 * 1024) {
            move_uploaded_file($_FILES['files']['tmp_name'][$i], 'files/' . $_FILES['files']['name'][$i]);
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <style>
        body {
            margin-top: 100px;
        }
    </style>
</head>

<body>

    <pre>
        <p>
            <?php
            print_r($_POST);
            print_r($_FILES);
            print_r($filesCounts);
            ?>
        </p>
    </pre>


    <div class="container">
        <div class="row">
            <div class="column column-50 column-offset-25">
                <form method="post" enctype="multipart/form-data">
                    <fieldset>
                        <label for="nameField">Name</label>
                        <input type="text" placeholder="CJ Patoilo" name="nameField">
                        <label for="file">Upload</label>
                        <input type="file" name="files[]">
                        <input type="file" name="files[]">
                        <input type="file" name="files[]">
                        <label for=""></label>
                        <input class="button-primary" type="submit" value="Send">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>


</body>

</html>