<?php
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>File Upload</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css" />
</head>

<body style="margin-top: 100px;">

  <?php
  $name = '';
  $checked = '';
  $ageRangeField = '';
  $ages = range(10, 50, 5);

  if (isset($_REQUEST['name']) && !empty($_REQUEST['name'])) {
    $name = htmlspecialchars($_REQUEST['name']);
  }
  if (isset($_REQUEST['ageRangeField']) && !empty($_REQUEST['ageRangeField'])) {
    $ageRangeField = $_REQUEST['ageRangeField'];
  }
  if (isset($_REQUEST['confirmField']) && !empty($_REQUEST['confirmField'])) {
    $checked = $_REQUEST['confirmField'];
  }






  ?>
  <div class="container">
    <div class="row">
      <div class="column column-50 column-offset-25">
        <form method="post">
          <label for="name">Name</label>
          <input type="text" placeholder="CJ Patoilo" name="name" value="<?php echo $name; ?>" />
          <label for="ageRangeField">Age Range</label>
          <select name="ageRangeField[]">
            <option selected disabled> -- 10-50 -- </option>
            <?php options($ages, $ageRangeField); ?>
          </select>

          <div class="float-right">
            <input <?php echo $checked; ?> type="checkbox" name="confirmField" <?php echo $checked; ?> />
            <label class="label-inline" for="confirmField">Send a copy to yourself</label>
          </div>
          <input type="file" name="file" id="" />
          <input class="button-primary" type="submit" value="Send" />
        </form>
      </div>
    </div>
  </div>
</body>

</html>