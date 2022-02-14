<?php

$paragraph = 'Ciao sono Floriano ho 21 anni';
$badword = $_GET["word"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        echo $paragraph;
        ?>
    </p>
    <p>
        La lunghezza della stringa è: <?php echo strlen($paragraph) ?> caratteri
    </p>
    <p>
        Il paragrafo con la censura diventa: <?php echo $paragraph = str_replace($badword, "***", $paragraph) ?>
    </p>
</body>

</html>