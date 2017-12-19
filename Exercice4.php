<!DOCTYPE>
<html>
    <head>
        <title>Exercice 4</title>
    </head>
    <body>
        <p>
            <?php
            echo mktime(15, 0, 0, 8, 02, 2016);
            ?>
        </p>
        <p>
            <?php
            $date = date_create();
            echo date_format($date, 'U = d/m/Y H:i:s');
            ?>
        </p>
    </body>
</html>
