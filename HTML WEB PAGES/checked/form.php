<?php

require_once('functions.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Checked</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <style>
        body {
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <?php
    $name = '';
    $age = '';
    $checked = '';
    $selected = '';




    $fruits = array('Apple', 'banana', 'coconut', 'mango', 'jackfruits', 'pineapple');

    if (isset($_REQUEST['name']) && !empty($_REQUEST['name'])) {
        $name = $_REQUEST['name'];
    ?>
        <blockquote>
            <p>
                <em>
                    <?php printf('Name : %s', filter_input(INPUT_POST, 'name', FILTER_DEFAULT)) ?>
                </em>
            </p>
        </blockquote>
    <?php
    }

    if (isset($_REQUEST['age']) && !empty($_REQUEST['age'])) {
        $age = $_REQUEST['age'];
    ?>
        <blockquote>
            <p>
                <em>
                    <?php printf('age : %s', filter_input(INPUT_POST, 'age', FILTER_DEFAULT)) ?>
                </em>
            </p>
        </blockquote>
    <?php
    }

    if (isset($_REQUEST['check']) && !empty($_REQUEST['check'])) {
        $checked = $_REQUEST['check'];

    ?>
        <blockquote>
            <p>
                <em>
                    <?php printf('You Have Checked %s', filter_input(INPUT_POST, 'check', FILTER_DEFAULT)) ?>

                </em>
            </p>
        </blockquote>

    <?php
    }

    // $sFruits = $_REQUEST['fruits'];
    // $sFruits = isset($_REQUEST['fruits']) ? $_REQUEST['fruits'] : array();
    $sFruits = $_REQUEST['fruits'] ?? array();
    print_r($sFruits);
    if (count($sFruits) > 0) {
        echo "You Have Been Selected: " . ucwords(join(", ", $sFruits));
    }

    ?>




    <div class="container">


        <div class="row">
            <div class="column column-50 column-offset-25">
                <form method="POST">
                    <fieldset>
                        <label for="name">Name</label>
                        <input type="text" name="name" value="<?php echo $name; ?>">
                        <label for="name">Select Some Fruits</label>
                        <select style="height: 200px;" name="fruits[]" id="ageRangeField" multiple>
                            <option value="" disabled>--Select One--</option>
                            <?php displayOptions($fruits, $sFruits); ?>
                        </select>
                        <label for="age">age</label>
                        <input type="range" name="age" value="<?php echo $age; ?>">
                        <input type="checkbox" name="check" <?php echo $checked; ?>>
                        <input class=" button-primary" type="submit" value="Send">
                    </fieldset>
                </form>
            </div>
        </div>

    </div>


</body>

</html>