<!DOCTYPE>
<html>
    <head>
        <title>Exercice 5</title>
    </head>
    <body>
<?php
        $now = time();
        $date = strtotime('2016-05-16');
        setlocale(LC_TIME, 'fr_FR.UTF8');
        function dateDiff($now, $date) {
            $diff = abs($now - $date);
            $retour = array();
            $tmp = $diff;
            $retour['second'] = $tmp % 60;
            $tmp = floor(($tmp - $retour['second']) / 60);
            $retour['minute'] = $tmp % 60;
            $tmp = floor(($tmp - $retour['minute']) / 60);
            $retour['hour'] = $tmp % 24;
            $tmp = floor(($tmp - $retour['hour']) / 24);
            $retour['day'] = $tmp;
            return $retour;
        }
        echo 'Il y a ' . dateDiff($now, $date)['day'] . ' jours entre le ' . strftime('%A %d %B %Y') . ' et le mardi 2 août 2016 à 15h00.';
        ?>
    </body>
</html>
