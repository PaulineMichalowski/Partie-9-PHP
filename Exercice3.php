<!DOCTYPE> 
<html>
    <head>
        <title>Exercice 3</title>
    </head>
    <body>
        <?php
        setlocale(LC_TIME, 'fr_FR.UTF8');
        echo 'Nous sommes le ' . strftime('%A %d %B %Y');
        ?>
    </body>
</html>
