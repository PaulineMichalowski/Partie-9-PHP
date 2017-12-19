<!DOCTYPE>
<html>
    <head>
        <title>Exercice 6</title>
    </head>
    <body>
        <?php
        $days_number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
        echo 'Il y a ' . $days_number . ' jours dans le mois de février de l\'année 2016 !';
        ?>
    </body>
</html>
