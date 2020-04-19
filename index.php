<?php
$guessnumber = rand(0,100);
$yournumber = 7;
define ('MAX_NUMBER', 100);
define ('MIN_NUMBER', 0);
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p> Hádej číslo mezi <?= MIN_NUMBER ?> a <?= MAX_NUMBER ?> </p>
<?= $yournumber ?> </p>

<?php


while ($guessnumber != $yournumber) { ?>
    <p> Tvé číslo <?= $yournumber ?> není správné. Zkus jiné číslo.</p>

<?php

if ($guessnumber>$yournumber) {
    echo "<p>Hádané číslo je větší.</p>";
}

else {
    echo "<p>Hádané číslo je menší.</p>";
}

$yournumber = rand(MIN_NUMBER, MAX_NUMBER);
}

?>

<p> Gratulujeme, uhádl jsi číslo <?= $guessnumber ?> svým hádaným číslem <?= $yournumber ?>. </p>

</body>
</html>