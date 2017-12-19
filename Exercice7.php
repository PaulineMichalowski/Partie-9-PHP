<!DOCTYPE>
<html>
    <head>
        <title>Exercice 7</title>
    </head>
    <body>
        <?php
        $in_20_days = date(('d/m/Y'), strtotime("+20 days"));
        echo 'Dans 20 jours, nous serons le ' . $in_20_days . '.';
        ?>
    </body>
</html>
