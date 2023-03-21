<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic" />

    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css" />

    <!-- You should properly set the path from the main file. -->
    <title>FORM</title>

    <style>
        body {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-50 column-offset-25">

                <?php
                $fName = '';
                $lName = '';


                if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) {
                    $fName = $_REQUEST['fname'];
                }
                if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {
                    $lName = $_REQUEST['lname'];
                }
                ?>

                <?php if (isset($fName) && !empty($fName)) : ?>
                    <blockquote>
                        <p><em>Frist Name : <?php echo htmlspecialchars($fName); ?></em></p>
                    </blockquote>
                <?php endif;
                if (isset($lName) && !empty($lName)) : ?>
                    <blockquote>
                        <p><em>Last Name : <?php echo htmlspecialchars($lName); ?></em></p>
                    </blockquote>
                <?php endif; ?>



            </div>
        </div>
        <div class="row">
            <div class="column column-50 column-offset-25">
                <form method="POST">
                    <fieldset>
                        <label for="fname">Frist Name</label>
                        <input type="text" name="fname" value="<?php echo $fName; ?>">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" value="<?php echo $lName; ?>">
                        <input class=" button-primary" type="submit" value="Send">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>

</html>