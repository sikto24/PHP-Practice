<?php

require_once('functions.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selector</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>

<body style="margin-top: 100px;">

    <?php
    $name = '';
    $agesList = range(1, 50, 2);
    $ageSelect = '';
    $checked = '';

    if (isset($_REQUEST['name']) && !empty($_REQUEST['name'])) {
        $name = htmlspecialchars($_REQUEST['name']);
    }
    if (isset($_REQUEST['checkbox']) && !empty($_REQUEST['checkbox'])) {
        $checked = 'checked';
    }

    $ageSelect = $_REQUEST['age'] ?? array();



    ?>

    <div class="container">
        <div class="row">
            <div class="column column-50 column-offset-25">
                <form method="post">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="<?php echo $name; ?>">
                    <label for="ageRangeField">Age Range</label>
                    <select id="ageRangeField" name="age[]" multiple style="height: 300px;">
                        <option selected disabled>---0-50---</option>
                        <?php ages($agesList, $ageSelect); ?>
                    </select>
                    <label for="message">Comment</label>

                    <div class="float-right">
                        <input type="checkbox" name="checkbox" <?php echo $checked; ?>>
                        <label class="label-inline" for="checkbox">Send a copy to yourself</label>
                    </div>
                    <input class="button-primary" type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>


</body>

</html>