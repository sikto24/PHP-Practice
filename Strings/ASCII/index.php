<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>Document</title>
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="column column-50 column-offset-25">
                        <table>
                            <thead>

                            
                                <tr>
                                    <th>Serials</th>
                                    <th>Symbol</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i = 1; $i <= 128; $i++):?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php  echo chr($i); ?></td>
                                </tr>
                                <?php endfor;?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
</body>
</html>